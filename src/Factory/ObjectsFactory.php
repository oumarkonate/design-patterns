<?php

namespace App\Factory;

use App\Model\Circle;
use App\Model\Octagon;
use App\Model\Rectangle;
use App\Model\Star;
use App\Presenter\CirclePresenter;
use App\Presenter\OctagonPresenter;
use App\Presenter\PresenterInterface;
use App\Presenter\RectanglePresenter;
use App\Presenter\StarPresenter;
use Exception;

/**
 * Class ObjectsFactory.
 */
class ObjectsFactory implements ObjectsFactoryInterface
{
    /**
     * {@inheritdoc}
     */
    public function create($model): PresenterInterface
    {
        if ($model instanceof Circle) {
            return new CirclePresenter();
        }

        if ($model instanceof Rectangle) {
            return new RectanglePresenter();
        }

        if ($model instanceof Star) {
            return new StarPresenter();
        }

        if ($model instanceof Octagon) {
            return new OctagonPresenter();
        }

        throw new Exception(sprintf('Object not found for model : %s', get_class($model)));
    }
}
