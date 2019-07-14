<?php

namespace App\Presenter;

/**
 * Class Object2
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
