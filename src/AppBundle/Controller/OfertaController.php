<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Artykul;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class OfertaController extends Controller
{
    /**
     * @Route("/oferta", name="oferta")
     * @Template()
     */
    public function ofertaAction()
    {
        $artykul = $this->getDoctrine()->getRepository(Artykul::class);

        return [
            'artykul'=> $artykul->find(2)
        ];
    }
}