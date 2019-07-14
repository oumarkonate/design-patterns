<?php

namespace App\Presenter;

/**
 * Interface ObjectInterface
 */
interface PresenterInterface
{
    /**
     * @param mixed $model
     */
    public function attach($model): void;

    /**
     * @return mixed
     */
    public function getModel();
}
