<?php

namespace App\Model;

/**
 * Class Octagon.
 */
final class Octagon
{
    /** @var string */
    private $title;

    /** @var string */
    private $description;

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): Octagon
    {
        $this->title = $title;

        return $this;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): Octagon
    {
        $this->description = $description;

        return $this;
    }
}
