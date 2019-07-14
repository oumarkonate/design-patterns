<?php

namespace App\Model;

/**
 * Class Model3
 */
final class Star
{
    /** @var string */
    private $title;

    /** @var string */
    private $description;

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     *
     * @return Star
     */
    public function setTitle(string $title): Star
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     *
     * @return Star
     */
    public function setDescription(string $description): Star
    {
        $this->description = $description;

        return $this;
    }
}

