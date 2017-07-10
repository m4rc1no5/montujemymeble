<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class KontaktController extends Controller
{
    /**
     * @Route("/kontakt", name="kontakt")
     * @Template()
     */
    public function kontaktAction()
    {
        return [];
    }
}