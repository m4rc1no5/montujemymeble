<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Artykul;
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
        $artykul = $this->getDoctrine()->getRepository(Artykul::class);

        return [
            'artykul'=> $artykul->find(3)
        ];
    }
}