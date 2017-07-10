<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PytaniaController extends Controller
{
    /**
     * @Route("/pytania", name="pytania")
     * @Template()
     */
    public function pytaniaAction()
    {
        return [];
    }
}