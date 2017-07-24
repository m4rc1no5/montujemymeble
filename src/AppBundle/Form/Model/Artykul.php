<?php
namespace AppBundle\Form\Model;

class Artykul
{
    private $id;

    private $createat;

    /**
     * @var string
     */
    private $onas;

    /**
     * @var string
     */
    private $oferta;

    /**
     * @var string
     */
    private $linki;

    /**
     * @var string
     */
    private $kontakt;

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

    /**
     * @return mixed
     */
    public function getCreateat()
    {
        return $this->createat;
    }

    /**
     * @param mixed $createat
     */
    public function setCreateat($createat)
    {
        $this->createat = $createat;
    }

    /**
     * @return string
     */
    public function getKontakt()
    {
        return $this->kontakt;
    }

    /**
     * @param string $kontakt
     */
    public function setKontakt($kontakt)
    {
        $this->kontakt = $kontakt;
    }

    /**
     * @return string
     */
    public function getLinki()
    {
        return $this->linki;
    }

    /**
     * @param string $linki
     */
    public function setLinki($linki)
    {
        $this->linki = $linki;
    }
}