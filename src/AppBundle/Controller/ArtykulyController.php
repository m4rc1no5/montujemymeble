<?php

namespace AppBundle\Controller;

use AppBundle\Form\Model\Artykul;
use AppBundle\Form\Type\ArtykulType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ArtykulyController extends Controller
{
    /**
     * @Route("/panel/artykuly", name="artykuly")
     * @Template()
     */
    public function artykulyAction()
    {
        $artykul = new Artykul();

        $form = $this->createForm(ArtykulType::class, $artykul);

//        $form->handleRequest($request);

//        if ($form->isSubmitted() && $form->isValid()) {
//            $this->artykulRepository->save($artykul);
//            return $this->redirectToRoute('artykuly');
//        }

        return [
            'form' => $form->createView(),
//            'isValid' => $form->isValid(),
            'artykul' => $artykul,
        ];
    }
}
