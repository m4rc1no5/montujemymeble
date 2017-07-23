<?php
namespace AppBundle\Form\Model;

class Artykul
{
    private $id;

    /**
     * @var string
     */
    private $onas;

    /**
     * @var string
     */
    private $oferta;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getOnas()
    {
        return $this->onas;
    }

    /**
     * @param string $onas
     */
    public function setOnas($onas)
    {
        $this->onas = $onas;
    }

    /**
     * @return string
     */
    public function getOferta()
    {
        return $this->oferta;
    }

    /**
     * @param string $oferta
     */
    public function setOferta($oferta)
    {
        $this->oferta = $oferta;
    }
}