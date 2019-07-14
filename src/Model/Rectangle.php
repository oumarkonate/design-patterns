<?php

namespace App\Model;

/**
 * Class Model2
 */
final class Rectangle
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
     * @return Rectangle
     */
    public function setTitle(string $title): Rectangle
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
     * @return Rectangle
     */
    public function setDescription(string $description): Rectangle
    {
        $this->description = $description;

        return $this;
    }
}
