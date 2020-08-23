<?php

namespace App\Model;

/**
 * Class Star.
 */
final class Star
{
    /** @var string */
    private $title;

    /** @var string */
    private $description;

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): Star
    {
        $this->title = $title;

        return $this;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): Star
    {
        $this->description = $description;

        return $this;
    }
}
