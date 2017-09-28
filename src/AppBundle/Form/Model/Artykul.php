<?php
namespace AppBundle\Form\Model;

class Artykul
{
    private $id;

    private $createat;

    /**
     * @var string
     */
    private $temat;

    /**
     * @var string
     */
    private $tresc;

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
    public function getTemat()
    {
        return $this->temat;
    }

    /**
     * @param string $temat
     */
    public function setTemat($temat)
    {
        $this->temat = $temat;
    }

    /**
     * @return string
     */
    public function getTresc()
    {
        return $this->tresc;
    }

    /**
     * @param string $tresc
     */
    public function setTresc($tresc)
    {
        $this->tresc = $tresc;
    }
}