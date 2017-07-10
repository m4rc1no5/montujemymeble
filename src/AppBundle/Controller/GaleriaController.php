<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class GaleriaController extends Controller
{
    /**
     * @Route("/galeria", name="galeria")
     * @Template()
     */
    public function galeriaAction()
    {
        return [];
    }
}
