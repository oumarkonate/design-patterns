<?php

namespace App\Model;

/**
 * Class Circle
 */
final class Circle
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
     * @return Circle
     */
    public function setTitle(string $title): Circle
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
     * @return Circle
     */
    public function setDescription(string $description): Circle
    {
        $this->description = $description;

        return $this;
    }
}
