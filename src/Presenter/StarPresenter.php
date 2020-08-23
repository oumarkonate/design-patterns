<?php

namespace App\Presenter;

/**
 * Class StarPresenter.
 */
final class StarPresenter extends AbstractPresenter
{
    /**
     * {@inheritdoc}
     */
    public function getTemplate(): string
    {
        return 'objects/star-template.html.twig';
    }
}
