<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class GaleriaController extends Controller
{
    /**
     * @Route("/galeria", name="galeria")
     * @Template()
     */
    public function galeriaAction()
    {
        $params = array(
            'api_key' => '8da87a1824d3b7ad151e789438c6ed10',
            'user_id' => '151280823@N06',
            'method' => 'flickr.people.getPhotos',
            'extras' => 'url_sq',
            'format' => 'php_serial',
        );

        $encoded_params = array();

        foreach ($params as $k => $v) {

            $encoded_params[] = urlencode($k) . '=' . urlencode($v);
        }


        $url = "https://api.flickr.com/services/rest/?" . implode('&', $encoded_params);

        echo $url;

        $rsp = file_get_contents($url);

        $rsp_obj = unserialize($rsp);


        if ($rsp_obj['stat'] == 'ok') {

            $photo_view = $rsp_obj['photos']['photo'];

//            echo "Title is $photo_view!";
        } else {

            echo "Call failed!";
        }

        return [
            'view' => $photo_view,
        ];
    }
}
