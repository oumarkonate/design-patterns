<?php

namespace App\Presenter;

/**
 * Class Object1
 */
final class CirclePresenter extends AbstractPresenter
{
    /**
     * {@inheritDoc}
     */
    public function getTemplate(): string
    {
        return 'objects/circle-template.html.twig';
    }
}
