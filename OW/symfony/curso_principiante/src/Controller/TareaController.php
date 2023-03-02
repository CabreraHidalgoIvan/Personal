<?php

namespace App\Controller;

use App\Entity\Tarea;
use App\Repository\TareaRepository;
use App\Service\TareaManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TareaController extends AbstractController
{
    #[Route('/', name: 'app_listado_tarea')]
    public function listado(TareaRepository $tareaRepository): Response
    {
        $tareas = $tareaRepository->findAll();
        return $this->render('tarea/listado.html.twig', [
            'tareas' => $tareas,
        ]);
    }

    #[Route('/tarea/crear-servicio', name: 'app_crear_tarea_servicio')]
    public function crear(TareaManager $tareaManager, Request $request): Response
    {
        $tarea = new Tarea();
        $descripcion = $request->request->get('descripcion');
        if (null !== $descripcion) {

                $tarea->setDescripcion($descripcion);
                $errores = $tareaManager->validar($tarea);
                if(empty($errores)) {
                    $tareaManager->crearTarea($tarea);

                    $this->addFlash('success', 'Tarea creada correctamente');

                    return $this->redirectToRoute('app_listado_tarea');

                } else {
                    foreach ($errores as $error) {
                        $this->addFlash('warning', $error->getMessage());
                    }
                }

        }
        return $this->render('tarea/crear.html.twig', [
            'tarea' => $tarea,
        ]);
    }

    #[Route('/tarea/editar/{id}', name: 'app_editar_tarea', requirements: ['id' => '\d+'])]
    public function editar(int $id, TareaRepository $tareaRepository, Request $request, EntityManagerInterface $em): Response
    {
        $tarea = $tareaRepository->find($id);
        if (null === $tarea) {
            throw $this->createNotFoundException('No existe la tarea con id ' . $id);
        }
        $descripcion = $request->request->get('descripcion');
        if (null !== $descripcion) {
            if (!empty($descripcion)) {
                $tarea->setDescripcion($descripcion);
                $em->flush();
                $this->addFlash('success', 'Tarea editada correctamente');
                return $this->redirectToRoute('app_listado_tarea');
            } else {
                $this->addFlash('warning', 'La descripción no puede estar vacía');
            }
        }
        return $this->render('tarea/editar.html.twig', [
            'tarea' => $tarea,
        ]);
    }

    #[Route('/tarea/editar-params/{id}', name: 'app_editar_tarea_params', requirements: ['id' => '\d+'])]
    public function editarConParamsConvert(Tarea $tarea, TareaRepository $tareaRepository, Request $request, EntityManagerInterface $em): Response
    {
        $descripcion = $request->request->get('descripcion');
        if (null !== $descripcion) {
            if (!empty($descripcion)) {
                $tarea->setDescripcion($descripcion);
                $em->flush();
                $this->addFlash('success', 'Tarea editada correctamente');
                return $this->redirectToRoute('app_listado_tarea');
            } else {
                $this->addFlash('warning', 'La descripción no puede estar vacía');
            }
        }
        return $this->render('tarea/editar.html.twig', [
            'tarea' => $tarea,
        ]);
    }

    #[Route('/tarea/eliminar/{id}', name: 'app_eliminar_tarea', requirements: ['id' => '\d+'])]
    public function eliminar(Tarea $tarea, EntityManagerInterface $em): Response
    {
        $em->remove($tarea);
        $em->flush();
        $this->addFlash('success', 'Tarea eliminada correctamente');
        return $this->redirectToRoute('app_listado_tarea');
    }
}
