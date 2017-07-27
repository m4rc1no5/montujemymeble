<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Artykul;
use AppBundle\Repository\Doctrine\ArtykulRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

///**
// * @Route(service="app.onas_controller")
// */
class ONasController extends Controller
{

//    /** @var ArtykulRepository */
//    private $artykulRepository;
//
//    /**
//     * @param ArtykulRepository $artykulRepository
//     */
//    public function __construct(ArtykulRepository $artykulRepository)
//    {
//        $this->artykulRepository = $artykulRepository;
//    }

    /**
     * @Route("/", name="onas")
     * @Template()
     */
    public function oNasAction()
    {
        $artykul = $this->getDoctrine()->getRepository(Artykul::class);

        return [
            'artykul'=> $artykul->find(7),
//            'artykul' => $this->artykulRepository->getLast(1),

        ];
    }
}
