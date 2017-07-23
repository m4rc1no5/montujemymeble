<?php
namespace AppBundle\Controller;

use AppBundle\Form\Model\Pytania;
use AppBundle\Entity\Pytania as PytaniaBaza;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;

/**
 * @Route()
 */
class PytaniaController extends Controller
{
    /**
     * @Route("/pytania", name="pytania")
     * @Template()
     * @param Request $request
     * @return array|\Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function pytaniaAction(Request $request)
    {
        $pytania = new Pytania();

        $form = $this->createFormBuilder($pytania)
            ->add('imie', TextType::class)
            ->add('email', TextType::class)
            ->add('telefon', NumberType::class)
            ->add('temat', TextType::class)
            ->add('wiadomosc', TextareaType::class)
            ->getForm();

        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();

            $pytaniaBaza = new PytaniaBaza();
            $pytaniaBaza->setImie($pytania->getImie());
            $pytaniaBaza->setEmail($pytania->getEmail());
            $pytaniaBaza->setTelefon($pytania->getTelefon());
            $pytaniaBaza->setTemat($pytania->getTemat());
            $pytaniaBaza->setWiadomosc($pytania->getWiadomosc());

            $em->persist($pytaniaBaza);
            $em->flush();

            return $this->redirectToRoute('mailwyslany');
        }

        return array(
            'form' => $form->createView(),
        );
    }

    /**
     * @return array
     *
     * @Route("/mailwyslany", name="mailwyslany")
     * @Template()
     */
    public function mailwyslanyAction()
    {
        return [];
    }
}