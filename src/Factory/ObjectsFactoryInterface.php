<?php

namespace App\Factory;

use App\Presenter\PresenterInterface;
use Exception;

/**
 * Interface ObjectsFactoryInterface
 */
interface ObjectsFactoryInterface
{
    /**
     * @param mixed $model
     *
     * @return PresenterInterface
     *
     * @throws Exception
     */
    public function create($model): PresenterInterface;
}
