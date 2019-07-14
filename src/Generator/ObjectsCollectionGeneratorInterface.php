<?php

namespace App\Generator;

use App\Collection\ObjectsCollection;
use Exception;

interface ObjectsCollectionGeneratorInterface
{
    /**
     * @param iterable $models
     *
     * @return ObjectsCollection|null
     *
     * @throws Exception
     */
    public function generate(iterable $models): ?ObjectsCollection;
}
