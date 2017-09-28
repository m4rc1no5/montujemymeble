<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Artykul;
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
        $artykul = $this->getDoctrine()->getRepository(Artykul::class);

        return [
            'artykul'=> $artykul->find(4)
        ];
    }
}