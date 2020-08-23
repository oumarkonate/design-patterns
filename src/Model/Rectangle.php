<?php

namespace App\Model;

/**
 * Class Rectangle.
 */
final class Rectangle
{
    /** @var string */
    private $title;

    /** @var string */
    private $description;

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): Rectangle
    {
        $this->title = $title;

        return $this;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): Rectangle
    {
        $this->description = $description;

        return $this;
    }
}
