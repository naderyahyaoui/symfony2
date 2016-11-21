<?php

namespace Bs\FrontOfficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Offremission
 *
 * @ORM\Table(name="offremission", indexes={@ORM\Index(name="idUser", columns={"idUser"})})
 * @ORM\Entity
 */
class Offremission
{
    /**
     * @var integer
     *
     * @ORM\Column(name="numOffre", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numoffre;

    /**
     * @var string
     *
     * @ORM\Column(name="date", type="string", length=255, nullable=false)
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=2000, nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=255, nullable=true)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="horaire", type="string", length=255, nullable=false)
     */
    private $horaire;

    /**
     * @var string
     *
     * @ORM\Column(name="typeUser", type="string", length=255, nullable=true)
     */
    private $typeuser;

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
     * Get numoffre
     *
     * @return integer 
     */
    public function getNumoffre()
    {
        return $this->numoffre;
    }

    /**
     * Set date
     *
     * @param string $date
     * @return Offremission
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return string 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Offremission
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     * @return Offremission
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string 
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set horaire
     *
     * @param string $horaire
     * @return Offremission
     */
    public function setHoraire($horaire)
    {
        $this->horaire = $horaire;

        return $this;
    }

    /**
     * Get horaire
     *
     * @return string 
     */
    public function getHoraire()
    {
        return $this->horaire;
    }

    /**
     * Set typeuser
     *
     * @param string $typeuser
     * @return Offremission
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
     * Set iduser
     *
     * @param \Bs\FrontOfficeBundle\Entity\User $iduser
     * @return Offremission
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
