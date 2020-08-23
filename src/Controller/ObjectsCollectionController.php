<?php

namespace App\Controller;

use App\Generator\ObjectsCollectionGeneratorInterface;
use App\Model\Circle;
use App\Model\Octagon;
use App\Model\Rectangle;
use App\Model\Star;
use Exception;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class ObjectsCollectionController.
 */
class ObjectsCollectionController extends AbstractController
{
    /**
     * @Route("/objects-collection", name="objects_collection")
     *
     * @throws Exception
     */
    public function index(ObjectsCollectionGeneratorInterface $generator): Response
    {
        $data = [
            (new Circle())->setTitle('Object1')->setDescription('circle'),
            (new Rectangle())->setTitle('Object2')->setDescription('rectangle'),
            (new Star())->setTitle('Object3')->setDescription('star'),
            (new Circle())->setTitle('Object1')->setDescription('circle'),
            (new Rectangle())->setTitle('Object2')->setDescription('rectangle'),
            (new Octagon())->setTitle('Object4')->setDescription('octagon'),
            (new Star())->setTitle('Object3')->setDescription('star'),
            (new Octagon())->setTitle('Object4')->setDescription('octagon'),
        ];

        return $this->render(
            'objects-collection.html.twig',
            [
                'objectsCollection' => $generator->generate($data),
            ]
        );
    }
}
