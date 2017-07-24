<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="artykul")
 */
class Artykul
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=4098)
     */
    protected $onas;

    /**
     * @ORM\Column(type="string", length=4098)
     */
    protected $oferta;

    /**
     * @ORM\Column(type="string", length=512)
     */
    protected $linki;

    /**
     * @ORM\Column(type="string", length=256)
     */
    protected $kontakt;

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
     * @return mixed
     */
    public function getOnas()
    {
        return $this->onas;
    }

    /**
     * @param mixed $onas
     */
    public function setOnas($onas)
    {
        $this->onas = $onas;
    }

    /**
     * @return mixed
     */
    public function getOferta()
    {
        return $this->oferta;
    }

    /**
     * @param mixed $oferta
     */
    public function setOferta($oferta)
    {
        $this->oferta = $oferta;
    }

    /**
     * @return mixed
     */
    public function getLinki()
    {
        return $this->linki;
    }

    /**
     * @param mixed $linki
     */
    public function setLinki($linki)
    {
        $this->linki = $linki;
    }

    /**
     * @return mixed
     */
    public function getKontakt()
    {
        return $this->kontakt;
    }

    /**
     * @param mixed $kontakt
     */
    public function setKontakt($kontakt)
    {
        $this->kontakt = $kontakt;
    }
}