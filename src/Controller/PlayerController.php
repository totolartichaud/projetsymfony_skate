<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PlayerController extends AbstractController
{
    public function getPlayers()
    {
        $repo = $this->getDoctrine()->getRepository( 'App:Player');

        $Players = $repo->findAll();

        return $this->render('getAllplayer.html.twig', [
            'players' => $Players
        ]);
    }

    public function addPLayerToTeam()
    {
        $em = $this->getDoctrine()->getManager();
    }

    public function createPlayer()
    {

    }
}
