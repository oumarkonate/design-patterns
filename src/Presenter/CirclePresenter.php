<?php

namespace App\Presenter;

/**
 * Class CirclePresenter
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
