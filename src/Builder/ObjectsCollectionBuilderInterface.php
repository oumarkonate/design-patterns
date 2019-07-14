<?php

namespace App\Builder;

use Exception;
use App\Model\ObjectsCollection;

/**
 * Interface ObjectsCollectionBuilderInterface
 */
interface ObjectsCollectionBuilderInterface
{
    /**
     * @param mixed $model
     *
     * @return ObjectsCollectionBuilderInterface The builder object.
     */
    public function add($model): ObjectsCollectionBuilderInterface;

    /**
     * @return ObjectsCollectionBuilderInterface The builder object.
     *
     * @throws Exception;
     */
    public function build(): ObjectsCollectionBuilderInterface;

    /**
     * @return ObjectsCollection
     */
    public function getObjectsCollection(): ObjectsCollection;
}
