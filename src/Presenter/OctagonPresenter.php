<?php

namespace App\Presenter;

/**
 * Class OctagonPresenter.
 */
final class OctagonPresenter extends AbstractPresenter
{
    /**
     * {@inheritdoc}
     */
    public function getTemplate(): string
    {
        return 'objects/octagon-template.html.twig';
    }
}
