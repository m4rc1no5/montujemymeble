<?php

namespace AppBundle\Controller;

use Psr\Log\LoggerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * @Route(service="app.galeria_controller")
 */
class GaleriaController extends Controller
{
    /** @var LoggerInterface */
    private $logger;

    private $params = [
        'method' => 'flickr.people.getPhotos',
        'extras' => 'url_q, url_m, url_o',
        'format' => 'php_serial',
    ];

    /**
     * GaleriaController constructor.
     * @param LoggerInterface $logger
     */
    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }


    /**
     * @Route("/galeria", name="galeria")
     * @Template()
     * @return array
     */
    public function galeriaAction()
    {


        return [
            'photos' => $this->getPhotos(),
        ];
    }

    private function getPhotos() {
        $encoded_params = [];

        $this->params['api_key'] = $this->container->getParameter('flickr_api_key');
        $this->params['user_id'] = $this->container->getParameter('flickr_user_id');

        foreach ($this->params as $k => $v) {
            $encoded_params[] = urlencode($k) . '=' . urlencode($v);
        }

        $url = "https://api.flickr.com/services/rest/?" . implode('&', $encoded_params);
        $rsp = file_get_contents($url);
        $rsp_obj = unserialize($rsp);

        if ($rsp_obj['stat'] == 'ok') {
            return $rsp_obj['photos']['photo'];
        }

        $this->logger->alert("Nie udało się pobrać zdjęć z: " . $url);

        return null;
    }
}
