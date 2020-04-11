<?php
/**
 * Created by PhpStorm.
 * User: Victor
 * Date: 11/04/2020
 * Time: 12:57
 */

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GestionController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function homepage()
    {
        return new Response('Vaya, vaya, vaya!!!');
    }

    /**
     * @Route("/nueva/{slug}")
     */
    public function show($slug)
    {
        dump($slug, $this);

        return $this->render('gestion/show.html.twig', [
          'title' => ucwords(str_replace('-', '', $slug)) ,
        ]);
    }
}