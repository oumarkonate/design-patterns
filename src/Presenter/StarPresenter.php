<?php

namespace App\Presenter;

/**
 * Class Object3
 */
final class StarPresenter extends AbstractPresenter
{
    /**
     * {@inheritDoc}
     */
    public function getTemplate(): string
    {
        return 'objects/star-template.html.twig';
    }
}
