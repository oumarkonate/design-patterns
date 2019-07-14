<?php

namespace App\Presenter;

/**
 * Class RectanglePresenter
 */
final class RectanglePresenter extends AbstractPresenter
{
    /**
     * {@inheritDoc}
     */
    public function getTemplate(): string
    {
        return 'objects/rectangle-template.html.twig';
    }
}
