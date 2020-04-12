<?php

namespace App\Controller;

use App\Entity\Visitas;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\SubmitButton;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\DateType;


class VisitasController extends AbstractController
{
    /**
     * @Route("/visitas", name="visitas")
     */
    public function visitas(Request $request)
    {
        $form = $this->createFormBuilder()
            ->add('Fecha',DateType::class,[
                'widget' => 'choice'
            ])

            ->add('NumVisitas')
            ->add('Guardar', SubmitType::class, [
                'attr' => ['btn btn-success float-right'
                ]
            ])

            ->getForm();

        $form->handleRequest($request);
        if($form->isSubmitted()){
            $data = $form->getData();

            $visitas = new Visitas();
            $visitas->setFecha($data['Fecha']);
            $visitas->setNumvisitas($data['NumVisitas']);
            $em = $this->getDoctrine()->getManager();
            $em->persist($visitas);
            $em->flush();

            return $this->redirect($this->generateUrl('visitas'));

        }
        return $this->render('visitas/index.html.twig', [
            'visitascn' => $form->createView()
        ]);
    }

    /**
     * @Route("/vervisitas", name="vervisitas")
     */
    public function vervisitas()
    {
        $em = $this->getDoctrine()->getManager();
        $repositorio = $em->getRepository('App:Visitas');
        $visitas = $repositorio->findAll();
        return $this->render('visitas/vervisitas.html.twig',
            array('visitas'=>$visitas));

    }

    /**
     * @Route("/visitas/borra/{id}", name="borravisitas")
     */
    public function  borravisitas($id)
    {
        $em = $this->getDoctrine()->getManager();
        $visita = $em->getRepository('App:Visitas')->find($id);
        if (!$visita) {
            throw $this->createNotFoundException(
                'Las visitas con ID: ' . $id . ' no existe'
            );
        }
        $em->remove($visita);
        $em->flush();
        // Mostramos de nuevo todos los pedidos
        $em = $this->getDoctrine()->getManager();
        $repositorio = $em->getRepository('App:Visitas');
        $visitas = $repositorio->findAll();

        return $this->render('visitas/vervisitas.html.twig',
            array('visitas'=>$visitas));
    }

}
