<?php

namespace App\Generator;

use App\Builder\ObjectsCollectionBuilderInterface;
use App\Collection\ObjectsCollection;
use Exception;
use Psr\Log\LoggerInterface;

/**
 * Class ObjectsCollectionGenerator.
 */
class ObjectsCollectionGenerator implements ObjectsCollectionGeneratorInterface
{
    /** @var ObjectsCollectionBuilderInterface */
    private $builder;

    /** @var LoggerInterface */
    private $logger;

    /**
     * ObjectsCollectionGenerator constructor.
     */
    public function __construct(ObjectsCollectionBuilderInterface $builder, LoggerInterface $logger)
    {
        $this->builder = $builder;
        $this->logger = $logger;
    }

    /**
     * {@inheritdoc}
     */
    public function generate(iterable $models): ?ObjectsCollection
    {
        foreach ($models as $model) {
            $this->builder->add($model);
        }

        try {
            return $this->builder
                ->build()
                ->getObjectsCollection()
            ;
        } catch (Exception $exception) {
            $this->logger->error(sprintf('Error : %s', $exception->getMessage()));

            return null;
        }
    }
}
