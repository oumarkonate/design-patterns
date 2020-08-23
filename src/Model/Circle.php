<?php

namespace App\Model;

/**
 * Class Circle.
 */
final class Circle
{
    /** @var string */
    private $title;

    /** @var string */
    private $description;

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): Circle
    {
        $this->title = $title;

        return $this;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): Circle
    {
        $this->description = $description;

        return $this;
    }
}
