<?php

namespace App\Controller;

use App\Repository\TareaRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{

    const ELEMENTS_PER_PAGE = 10;

    #[Route('/{pagina}',
        name: 'app_index',
        requirements: ['pagina' => '\d+'],
        defaults: ['pagina' => 1],
        methods: ['GET'])]
    public function index(int $pagina, TareaRepository $tareaRepository): Response
    {
        $this->denyAccessUnlessGranted('ROLE_USER');

        return $this->render(
            'index/index.html.twig',
            [
                'tareas' => $tareaRepository->buscarTodas($pagina, self::ELEMENTS_PER_PAGE),
                'pagina' => $pagina,
            ]
        );
    }
}
