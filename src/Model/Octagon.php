<?php

namespace App\Model;

/**
 * Class Model4
 */
final class Octagon
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
     * @return Octagon
     */
    public function setTitle(string $title): Octagon
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
     * @return Octagon
     */
    public function setDescription(string $description): Octagon
    {
        $this->description = $description;

        return $this;
    }
}

