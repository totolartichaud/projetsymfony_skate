<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    /**
     * @return \Symfony\Component\HttpFoundation\Response
     *
     */
    public function home()
    {
        $name = 'Thomas';
        return $this->render( 'index.html.twig', [
            'name' => $name
        ]);
    }

    public function homeName($name)
    {
        return $this->render('index.html.twig', [
            'name' => $name
        ]);
    }
}