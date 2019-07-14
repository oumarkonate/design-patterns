<?php

namespace App\Presenter;

/**
 * Class AbstractPresenter
 */
abstract class AbstractPresenter implements PresenterInterface
{
    /** @var mixed */
    protected $model;

    /**
     * {@inheritDoc}
     */
    public function attach($model): void
    {
        $this->model = $model;
    }

    /**
     * {@inheritDoc}
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * @return string
     */
    abstract public function getTemplate(): string;
}
