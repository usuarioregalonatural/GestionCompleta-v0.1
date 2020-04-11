<?php

namespace App\Controller;

use App\Entity\AccesoCarros;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\SubmitButton;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\DateType;


class AccesocarrosController extends AbstractController
{
    /**
     * @Route("/accesocarros", name="accesocarros")
     */
    public function accesocarros(Request $request)
    {
        $form = $this->createFormBuilder()
            ->add('Fecha',DateType::class,[
                'widget' => 'choice'
            ])

            ->add('NumCarros')
            ->add('ImporteCarros')
            ->add('Guardar', SubmitType::class, [
                'attr' => ['btn btn-success float-right'
                ]
            ])

            ->getForm();

        $form->handleRequest($request);
        if($form->isSubmitted()){
            $data = $form->getData();

            $accesocarros = new AccesoCarros();
            $accesocarros->setFechacarro($data['Fecha']);
            $accesocarros->setNumcarros($data['NumCarros']);
            $accesocarros->setImportecarros($data['ImporteCarros']);
            $em = $this->getDoctrine()->getManager();
            $em->persist($accesocarros);
            $em->flush();

            return $this->redirect($this->generateUrl('accesocarros'));

        }
        return $this->render('accesocarros/index.html.twig', [
            'accesocarroscn' => $form->createView()
        ]);
    }
}
