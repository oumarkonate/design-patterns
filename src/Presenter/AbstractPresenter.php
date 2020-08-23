<?php

namespace App\Presenter;

/**
 * Class AbstractPresenter.
 */
abstract class AbstractPresenter implements PresenterInterface
{
    /** @var mixed */
    protected $model;

    /**
     * {@inheritdoc}
     */
    public function attach($model): void
    {
        $this->model = $model;
    }

    /**
     * {@inheritdoc}
     */
    public function getModel()
    {
        return $this->model;
    }

    abstract public function getTemplate(): string;
}
