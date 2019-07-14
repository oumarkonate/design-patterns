<?php

namespace App\Factory;

use App\Model\Circle;
use App\Presenter\PresenterInterface;
use Exception;
use App\Model\Rectangle;
use App\Model\Star;
use App\Model\Octagon;
use App\Presenter\CirclePresenter;
use App\Presenter\RectanglePresenter;
use App\Presenter\StarPresenter;
use App\Presenter\OctagonPresenter;

/**
 * Class ObjectsFactory
 */
class ObjectsFactory implements ObjectsFactoryInterface
{
    /**
     * {@inheritDoc}
     */
    public function create($model): PresenterInterface
    {
        if($model instanceof Circle) {
            return new CirclePresenter();
        }

        if($model instanceof Rectangle) {
            return new RectanglePresenter();
        }

        if($model instanceof Star) {
            return new StarPresenter();
        }

        if($model instanceof Octagon) {
            return new OctagonPresenter();
        }

        throw new Exception(sprintf('Object not found for model : %s', get_class($model)));
    }
}
