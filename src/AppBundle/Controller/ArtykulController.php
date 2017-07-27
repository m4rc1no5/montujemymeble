<?php

namespace AppBundle\Controller;

use AppBundle\Form\Model\Artykul;
use AppBundle\Entity\Artykul as ArtykulEntity;
use AppBundle\Form\Type\ArtykulType;
use AppBundle\Repository\Doctrine\ArtykulRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * @Route(service="app.artykul_controller")
 */
class ArtykulController extends Controller
{
    /** @var ArtykulRepository */
    private $artykulRepository;

    /**
     * @param ArtykulRepository $artykulRepository
     */
    public function __construct(ArtykulRepository $artykulRepository)
    {
        $this->artykulRepository = $artykulRepository;
    }

    /**
     * @Route("/panel/artykul", name="artykul")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function editAction(Request $request)
    {
        $id = $request->get('id');
        $artykul = new Artykul();

        if (isset($id)) {
            /** @var ArtykulEntity $artykulBaza */
            $artykulBaza = $this->getDoctrine()
                ->getRepository('AppBundle:Artykul')
                ->find($id);

            $artykul->setId($artykulBaza->getId());
            $artykul->setArtykul($artykulBaza->getArtykul());
            $artykul->setTresc($artykulBaza->getTresc());
        }

        $form = $this->createForm(ArtykulType::class, $artykul);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $this->artykulRepository->update($artykul);

            return $this->redirectToRoute('artykul');
        }

        $dane = $this->getDoctrine()
            ->getRepository('AppBundle:Artykul')
            ->findAll();

        return $this->render('@App/Artykul/artykul.html.twig', [
            'form' => $form->createView(),
            'isValid' => $form->isValid(),
            'artykul' => $artykul,
            'dane' => $dane,
            'artykuly' => $this->artykulRepository->getAllOrderByName(),
        ]);
    }

























//    /**
//     * @Route("/panel/artykul", name="artykul")
//     * @Template()
//     * @param Request $request
//     * @return array|\Symfony\Component\HttpFoundation\RedirectResponse
//     */
//    public function artykulAction(Request $request)
//    {
//        $artykul = new Artykul();
//
//        $form = $this->createFormBuilder($artykul)
//            ->add('id', HiddenType::class)
//            ->add('createat', HiddenType::class)
//            ->add('artykul', TextareaType::class)
//            ->add('tresc', TextareaType::class)
//            ->getForm();
//
//        $form->handleRequest($request);
//
//        if ($form->isValid()) {
//            $em = $this->getDoctrine()->getManager();
//
//            $artykulBaza = new ArtykulBaza();
//            $artykulBaza->setArtykul($artykul->getArtykul());
//            $artykulBaza->setTresc($artykul->getTresc());
//
//            $em->persist($artykulBaza);
//            $em->flush();
//
//            return $this->redirectToRoute('artykul');
//        }
//
//        return array(
//            'form' => $form->createView(),
//        );
//    }
}

