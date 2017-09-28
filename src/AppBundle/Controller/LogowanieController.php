<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class LogowanieController extends Controller
{
    /**
     * @Route("/MM-panel", name="logowanie")
     */
    public function logowanieAction()
    {
        $authenticationUtils = $this->get('security.authentication_utils');

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();

        return $this->render('@App/Security/logowanie.html.twig', [
            'error' => $error,
        ]);
    }
}