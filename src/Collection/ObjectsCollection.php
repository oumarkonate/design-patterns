<?php

namespace App\Collection;

use App\Presenter\PresenterInterface;

final class ObjectsCollection
{
    /** @var iterable */
    private $objects = [];

    public function add(PresenterInterface $object)
    {
        $this->objects[] = $object;
    }

    public function getObjects(): iterable
    {
        return $this->objects;
    }
}
