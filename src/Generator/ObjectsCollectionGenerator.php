<?php

namespace App\Generator;

use Exception;
use App\Builder\ObjectsCollectionBuilderInterface;
use App\Model\ObjectsCollection;
use Psr\Log\LoggerInterface;

/**
 * Class ObjectsCollectionGenerator
 */
class ObjectsCollectionGenerator implements ObjectsCollectionGeneratorInterface
{
    /** @var ObjectsCollectionBuilderInterface */
    private $objectsCollectionBuilder;

    /** @var LoggerInterface */
    private $logger;

    /**
     * ObjectsCollectionGenerator constructor.
     *
     * @param ObjectsCollectionBuilderInterface $objectsCollectionBuilder
     * @param LoggerInterface $logger
     */
    public function __construct(ObjectsCollectionBuilderInterface $objectsCollectionBuilder, LoggerInterface $logger)
    {
        $this->objectsCollectionBuilder = $objectsCollectionBuilder;
        $this->logger = $logger;
    }

    /**
     * {@inheritDoc}
     */
    public function generate(iterable $models): ?ObjectsCollection
    {
        foreach ($models as $model) {
            $this->objectsCollectionBuilder->add($model);
        }

        try {
            return $this->objectsCollectionBuilder
                ->build()
                ->getObjectsCollection()
            ;
        } catch (Exception $exception) {
            $this->logger->error(sprintf('Error : %s', $exception->getMessage()));

            return null;
        }
    }
}
