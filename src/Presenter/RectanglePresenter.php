<?php

namespace App\Presenter;

/**
 * Class RectanglePresenter.
 */
final class RectanglePresenter extends AbstractPresenter
{
    /**
     * {@inheritdoc}
     */
    public function getTemplate(): string
    {
        return 'objects/rectangle-template.html.twig';
    }
}
