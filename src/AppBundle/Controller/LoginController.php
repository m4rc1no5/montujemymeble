<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LoginController extends Controller
{
    /**
     * @Route("/panel", name="panel")
     * @Template()
     */
    public function zalogowanyAction()
    {
        return $this->render('@App/Login/zalogowany.html.twig');
    }
}