<?php

namespace App\Controller;

use App\Entity\Datospubli;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\SubmitButton;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\DateType;


class DatospubliController extends AbstractController
{
    /**
     * @Route("/datospubli", name="datospubli")
     */
    public function datospubli(Request $request)
    {
        $form = $this->createFormBuilder()
            ->add('Fecha',DateType::class,[
                'widget' => 'choice'
            ])

            ->add('Medio')
            ->add('Impresiones')
            ->add('Clicks')
            ->add('CTR')
            ->add('Coste')
            ->add('Guardar', SubmitType::class, [
                'attr' => ['btn btn-success float-right'
                ]
            ])

            ->getForm();

        $form->handleRequest($request);
        if($form->isSubmitted()){
            $data = $form->getData();

            $datospubli = new Datospubli();
            $datospubli->setFecha($data['Fecha']);
            $datospubli->setMedio($data['Medio']);
            $datospubli->setImpresiones($data['Impresiones']);
            $datospubli->setClicks($data['Clicks']);
            $datospubli->setCtr($data['CTR']);
            $datospubli->setCoste($data['Coste']);
            $em = $this->getDoctrine()->getManager();
            $em->persist($datospubli);
            $em->flush();

            return $this->redirect($this->generateUrl('datospubli'));

        }
        return $this->render('datospubli/index.html.twig', [
            'datospublicn' => $form->createView()
        ]);
    }
}
