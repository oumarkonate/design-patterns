<?php

namespace App\Builder;

use App\Factory\ObjectsFactoryInterface;
use App\Collection\ObjectsCollection;

/**
 * Class ObjectsCollectionBuilder
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
     *
     * @param ObjectsFactoryInterface $objectsFactory
     */
    public function __construct(ObjectsFactoryInterface $objectsFactory)
    {
        $this->objectsCollection = new ObjectsCollection();
        $this->objectsFactory = $objectsFactory;
    }

    /**
     * {@inheritDoc}
     */
    public function add($model): ObjectsCollectionBuilderInterface
    {
        $this->models[] = $model;

        return $this;
    }

    /**
     * {@inheritDoc}
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
     * {@inheritDoc}
     */
    public function getObjectsCollection(): ObjectsCollection
    {
        return $this->objectsCollection;
    }
}
