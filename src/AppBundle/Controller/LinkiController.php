<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LinkiController extends Controller
{
    /**
     * @Route("/linki", name="linki")
     * @Template()
     */
    public function linkiAction()
    {
        return [];
    }
}