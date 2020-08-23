<?php

namespace App\Presenter;

/**
 * Interface PresenterInterface.
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
