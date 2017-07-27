<?php

namespace AppBundle\Controller;

use AppBundle\Form\Model\Artykul;
use AppBundle\Entity\Artykul as ArtykulBaza;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\HttpFoundation\Request;

class ArtykulController extends Controller
{
    /**
     * @Route("/panel/artykul", name="artykul")
     * @Template()
     * @param Request $request
     * @return array|\Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function artykulAction(Request $request)
    {
        $artykul = new Artykul();

        $form = $this->createFormBuilder($artykul)
            ->add('id', HiddenType::class)
            ->add('createat', HiddenType::class)
            ->add('artykul', TextareaType::class)
            ->add('tresc', TextareaType::class)
            ->getForm();

        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();

            $artykulBaza = new ArtykulBaza();
            $artykulBaza->setArtykul($artykul->getArtykul());
            $artykulBaza->setTresc($artykul->getTresc());

            $em->persist($artykulBaza);
            $em->flush();

            return $this->redirectToRoute('artykul');
        }

        return array(
            'form' => $form->createView(),
        );
    }
}

