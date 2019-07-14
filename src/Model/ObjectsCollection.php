<?php

namespace App\Model;

use App\Presenter\PresenterInterface;

final class ObjectsCollection
{
    /** @var iterable */
    private $objects = [];

    /**
     * @param PresenterInterface $object
     */
    public function add(PresenterInterface $object)
    {
        $this->objects[] = $object;
    }

    /**
     * @return iterable
     */
    public function getObjects(): iterable
    {
        return $this->objects;
    }
}
