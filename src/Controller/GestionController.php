<?php
/**
 * Created by PhpStorm.
 * User: Victor
 * Date: 11/04/2020
 * Time: 12:57
 */

namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GestionController
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
        return new Response(sprintf(
            'Esta es una página nueva número: %s',
            $slug
        ));
    }
}