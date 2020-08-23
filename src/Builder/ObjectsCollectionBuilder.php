<?php

namespace App\Builder;

use App\Collection\ObjectsCollection;
use App\Factory\ObjectsFactoryInterface;

/**
 * Class ObjectsCollectionBuilder.
 */
class ObjectsCollectionBuilder implements ObjectsCollectionBuilderInterface
{
    /** @var iterable */
    private $models = [];

    /** @var ObjectsCollection */
    private $objectsCollection;

    /** @var ObjectsFactoryInterface */
    private $objectsFactory;

    /**
     * ObjectsCollectionBuilder constructor.
     */
    public function __construct(ObjectsFactoryInterface $objectsFactory)
    {
        $this->objectsCollection = new ObjectsCollection();
        $this->objectsFactory = $objectsFactory;
    }

    /**
     * {@inheritdoc}
     */
    public function add($model): ObjectsCollectionBuilderInterface
    {
        $this->models[] = $model;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function build(): ObjectsCollectionBuilderInterface
    {
        foreach ($this->models as $model) {
            $object = $this->objectsFactory->create($model);
            $object->attach($model);
            $this->objectsCollection->add($object);
        }

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getObjectsCollection(): ObjectsCollection
    {
        return $this->objectsCollection;
    }
}
