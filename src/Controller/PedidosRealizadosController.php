<?php

namespace App\Controller;

use App\Entity\PedidosRealizados;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\SubmitButton;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\DateType;


class PedidosRealizadosController extends AbstractController
{
    /**
     * @Route("/pedidosrealizados", name="pedidosrealizados")
     */
    public function pedidosrealizados(Request $request)
    {
        $form = $this->createFormBuilder()
            ->add('Fecha',DateType::class,[
                'widget' => 'choice',
                'attr' => array('style' => 'width: 30%')
            ])

            ->add('NumPedidos', null,[
            'attr' => array('style' => 'width: 10%')]
            )
            ->add('ImportePedidos', null,[
                'attr' => array('style' => 'width: 10%')]
            )
            ->add('Guardar', SubmitType::class, [
                'attr' => ['btn btn-success float-right'
                ]
            ])

            ->getForm();

        $form->handleRequest($request);
        if($form->isSubmitted()){
            $data = $form->getData();

            $pedidosrealizados = new PedidosRealizados();
            $pedidosrealizados->setFechapedido($data['Fecha']);
            $pedidosrealizados->setNumpedidos($data['NumPedidos']);
            $pedidosrealizados->setImppedidos($data['ImportePedidos']);
            $em = $this->getDoctrine()->getManager();
            $em->persist($pedidosrealizados);
            $em->flush();

            return $this->redirect($this->generateUrl('pedidosrealizados'));

        }
        return $this->render('pedidos_realizados/index.html.twig', [
            'pedidosrealizadoscn' => $form->createView()
        ]);
    }
}
