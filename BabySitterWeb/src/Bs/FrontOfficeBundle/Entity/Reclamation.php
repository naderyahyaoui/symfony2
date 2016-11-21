<?php

namespace Bs\FrontOfficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reclamation
 *
 * @ORM\Table(name="reclamation", indexes={@ORM\Index(name="idUser", columns={"idUser"})})
 * @ORM\Entity
 */
class Reclamation
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idReclamation", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idreclamation;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255, nullable=false)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="message", type="string", length=255, nullable=false)
     */
    private $message;

    /**
     * @var string
     *
     * @ORM\Column(name="typeUser", type="string", length=255, nullable=false)
     */
    private $typeuser;

    /**
     * @var string
     *
     * @ORM\Column(name="dateReclamation", type="string", length=50, nullable=false)
     */
    private $datereclamation;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idUser", referencedColumnName="idUser")
     * })
     */
    private $iduser;



    /**
     * Get idreclamation
     *
     * @return integer 
     */
    public function getIdreclamation()
    {
        return $this->idreclamation;
    }

    /**
     * Set titre
     *
     * @param string $titre
     * @return Reclamation
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string 
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set message
     *
     * @param string $message
     * @return Reclamation
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message
     *
     * @return string 
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set typeuser
     *
     * @param string $typeuser
     * @return Reclamation
     */
    public function setTypeuser($typeuser)
    {
        $this->typeuser = $typeuser;

        return $this;
    }

    /**
     * Get typeuser
     *
     * @return string 
     */
    public function getTypeuser()
    {
        return $this->typeuser;
    }

    /**
     * Set datereclamation
     *
     * @param string $datereclamation
     * @return Reclamation
     */
    public function setDatereclamation($datereclamation)
    {
        $this->datereclamation = $datereclamation;

        return $this;
    }

    /**
     * Get datereclamation
     *
     * @return string 
     */
    public function getDatereclamation()
    {
        return $this->datereclamation;
    }

    /**
     * Set iduser
     *
     * @param \Bs\FrontOfficeBundle\Entity\User $iduser
     * @return Reclamation
     */
    public function setIduser(\Bs\FrontOfficeBundle\Entity\User $iduser = null)
    {
        $this->iduser = $iduser;

        return $this;
    }

    /**
     * Get iduser
     *
     * @return \Bs\FrontOfficeBundle\Entity\User 
     */
    public function getIduser()
    {
        return $this->iduser;
    }
}
