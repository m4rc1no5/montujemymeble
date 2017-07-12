<?php
namespace AppBundle\Form\Model;

use Symfony\Component\Validator\Constraints as Assert;

class Pytania
{
    private $id;

    /**
     * @var string
     * @Assert\NotBlank(message="Pole nie może być puste.")
     * @Assert\Length(
     *     min="2",
     *     minMessage="Pole nie może mieć mniej niż 2 znaki.",
     *     max="128",
     *     maxMessage="Pole nie może mieć więcej niż 128 znaków."
     * )
     */
    private $imie;

    /**
     * @var string
     * @Assert\NotBlank(message="Pole nie może być puste.")
     * @Assert\Length(
     *     min="2",
     *     minMessage="Pole nie może mieć mniej niż 2 znaki.",
     *     max="128",
     *     maxMessage="Pole nie może mieć więcej niż 128 znaków."
     * )
     * @Assert\Email(message = "Błędny adres e-mail.",
     * checkMX = true
     * )
     */
    private $email;

    /**
     * @var string
     * @Assert\NotBlank(message="Pole nie może być puste.")
     * @Assert\Length(
     *     min="2",
     *     minMessage="Pole nie może mieć mniej niż 2 znaki.",
     *     max="128",
     *     maxMessage="Pole nie może mieć więcej niż 128 znaków."
     * )
     */
    private $telefon;

    /**
     * @var string
     * @Assert\NotBlank(message="Pole nie może być puste.")
     * @Assert\Length(
     *     min="2",
     *     minMessage="Pole nie może mieć mniej niż 2 znaki.",
     *     max="128",
     *     maxMessage="Pole nie może mieć więcej niż 128 znaków."
     * )
     */
    private $temat;

    /**
     * @var string
     * @Assert\NotBlank(message="Pole nie może być puste.")
     * @Assert\Length(
     *     min="2",
     *     minMessage="Pole nie może mieć mniej niż 2 znaki.",
     *     max="128",
     *     maxMessage="Pole nie może mieć więcej niż 128 znaków."
     * )
     */
    private $wiadomosc;

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
    public function getImie()
    {
        return $this->imie;
    }

    /**
     * @param string $imie
     */
    public function setImie($imie)
    {
        $this->imie = $imie;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getTelefon()
    {
        return $this->telefon;
    }

    /**
     * @param string $telefon
     */
    public function setTelefon($telefon)
    {
        $this->telefon = $telefon;
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
    public function getWiadomosc()
    {
        return $this->wiadomosc;
    }

    /**
     * @param string $wiadomosc
     */
    public function setWiadomosc($wiadomosc)
    {
        $this->wiadomosc = $wiadomosc;
    }
}