<?php

namespace AppBundle\Controller;


use AppBundle\Entity\Artykul;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ONasController extends Controller
{
    /**
     * @Route("/", name="onas")
     * @Template()
     */
    public function oNasAction()
    {
        $artykul = $this->getDoctrine()->getRepository(Artykul::class);

        return [
            'artykul'=> $artykul->find(1)
        ];
    }
}
