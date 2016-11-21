<?php

namespace Bs\BackOfficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Newsletter
 *
 * @ORM\Table(name="newsletter")
 * @ORM\Entity
 */
class Newsletter
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idNewsLetter", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idnewsletter;

    /**
     * @var string
     *
     * @ORM\Column(name="addressDest", type="string", length=255, nullable=false)
     */
    private $addressdest;

    /**
     * @var string
     *
     * @ORM\Column(name="addresseExp", type="string", length=255, nullable=false)
     */
    private $addresseexp;

    /**
     * @var string
     *
     * @ORM\Column(name="objet", type="string", length=255, nullable=false)
     */
    private $objet;

    /**
     * @var string
     *
     * @ORM\Column(name="contenu", type="string", length=2000, nullable=false)
     */
    private $contenu;

    /**
     * @var string
     *
     * @ORM\Column(name="file", type="blob", nullable=true)
     */
    private $file;



    /**
     * Get idnewsletter
     *
     * @return integer 
     */
    public function getIdnewsletter()
    {
        return $this->idnewsletter;
    }

    /**
     * Set addressdest
     *
     * @param string $addressdest
     * @return Newsletter
     */
    public function setAddressdest($addressdest)
    {
        $this->addressdest = $addressdest;

        return $this;
    }

    /**
     * Get addressdest
     *
     * @return string 
     */
    public function getAddressdest()
    {
        return $this->addressdest;
    }

    /**
     * Set addresseexp
     *
     * @param string $addresseexp
     * @return Newsletter
     */
    public function setAddresseexp($addresseexp)
    {
        $this->addresseexp = $addresseexp;

        return $this;
    }

    /**
     * Get addresseexp
     *
     * @return string 
     */
    public function getAddresseexp()
    {
        return $this->addresseexp;
    }

    /**
     * Set objet
     *
     * @param string $objet
     * @return Newsletter
     */
    public function setObjet($objet)
    {
        $this->objet = $objet;

        return $this;
    }

    /**
     * Get objet
     *
     * @return string 
     */
    public function getObjet()
    {
        return $this->objet;
    }

    /**
     * Set contenu
     *
     * @param string $contenu
     * @return Newsletter
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;

        return $this;
    }

    /**
     * Get contenu
     *
     * @return string 
     */
    public function getContenu()
    {
        return $this->contenu;
    }

    /**
     * Set file
     *
     * @param string $file
     * @return Newsletter
     */
    public function setFile($file)
    {
        $this->file = $file;

        return $this;
    }

    /**
     * Get file
     *
     * @return string 
     */
    public function getFile()
    {
        return $this->file;
    }
}
