<?php

namespace App\Builder;

use App\Collection\ObjectsCollection;
use Exception;

/**
 * Interface ObjectsCollectionBuilderInterface.
 */
interface ObjectsCollectionBuilderInterface
{
    /**
     * @param mixed $model
     *
     * @return ObjectsCollectionBuilderInterface the builder object
     */
    public function add($model): ObjectsCollectionBuilderInterface;

    /**
     * @return ObjectsCollectionBuilderInterface the builder object
     *
     * @throws Exception;
     */
    public function build(): ObjectsCollectionBuilderInterface;

    public function getObjectsCollection(): ObjectsCollection;
}
