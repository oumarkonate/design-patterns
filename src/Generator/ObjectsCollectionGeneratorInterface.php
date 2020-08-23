<?php

namespace App\Generator;

use App\Collection\ObjectsCollection;
use Exception;

interface ObjectsCollectionGeneratorInterface
{
    /**
     * @throws Exception
     */
    public function generate(iterable $models): ?ObjectsCollection;
}
