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
     *     max="50",
     *     maxMessage="Pole nie może mieć więcej niż 50 znaków."
     * )
     */
    private $imie;

    /**
     * @var string
     * @Assert\NotBlank(message="Pole nie może być puste.")
     * @Assert\Length(
     *     min="2",
     *     minMessage="Pole nie może mieć mniej niż 2 znaki.",
     *     max="50",
     *     maxMessage="Pole nie może mieć więcej niż 50 znaków."
     * )
     * @Assert\Email(message = "Błędny adres e-mail.",
     * checkMX = true
     * )
     */
    private $email;

    /**
     * @var integer
     * @Assert\NotBlank(message="Pole musi zawierać numer telefonu w formacie xxxyyyzzz.")
     * @Assert\Length(
     *     min="9",
     *     minMessage="Pole nie może mieć mniej niż 9 znaków.",
     *     max="20",
     *     maxMessage="Pole nie może mieć więcej niż 20 znaków."
     * )
     */
    private $telefon;

    /**
     * @var string
     * @Assert\NotBlank(message="Pole nie może być puste.")
     * @Assert\Length(
     *     min="2",
     *     minMessage="Pole nie może mieć mniej niż 2 znaki.",
     *     max="50",
     *     maxMessage="Pole nie może mieć więcej niż 50 znaków."
     * )
     */
    private $temat;

    /**
     * @var string
     * @Assert\NotBlank(message="Pole nie może być puste.")
     * @Assert\Length(
     *     min="2",
     *     minMessage="Pole nie może mieć mniej niż 2 znaki.",
     *     max="256",
     *     maxMessage="Pole nie może mieć więcej niż 256 znaków."
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
     * @return int
     */
    public function getTelefon()
    {
        return $this->telefon;
    }

    /**
     * @param int $telefon
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