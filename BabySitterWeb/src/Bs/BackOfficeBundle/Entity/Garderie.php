<?php

namespace Bs\BackOfficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Garderie
 *
 * @ORM\Table(name="garderie", indexes={@ORM\Index(name="idUser", columns={"idUser"})})
 * @ORM\Entity
 */
class Garderie
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idGarderie", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idgarderie;

    /**
     * @var string
     *
     * @ORM\Column(name="nomGarderie", type="string", length=255, nullable=false)
     */
    private $nomgarderie;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=2000, nullable=false)
     */
    private $description;

    /**
     * @var float
     *
     * @ORM\Column(name="tarif", type="float", precision=10, scale=0, nullable=false)
     */
    private $tarif;

    /**
     * @var integer
     *
     * @ORM\Column(name="codePostale", type="integer", nullable=false)
     */
    private $codepostale;

    /**
     * @var string
     *
     * @ORM\Column(name="nomResponsable", type="string", length=255, nullable=false)
     */
    private $nomresponsable;

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
     * Get idgarderie
     *
     * @return integer 
     */
    public function getIdgarderie()
    {
        return $this->idgarderie;
    }

    /**
     * Set nomgarderie
     *
     * @param string $nomgarderie
     * @return Garderie
     */
    public function setNomgarderie($nomgarderie)
    {
        $this->nomgarderie = $nomgarderie;

        return $this;
    }

    /**
     * Get nomgarderie
     *
     * @return string 
     */
    public function getNomgarderie()
    {
        return $this->nomgarderie;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Garderie
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
     * Set tarif
     *
     * @param float $tarif
     * @return Garderie
     */
    public function setTarif($tarif)
    {
        $this->tarif = $tarif;

        return $this;
    }

    /**
     * Get tarif
     *
     * @return float 
     */
    public function getTarif()
    {
        return $this->tarif;
    }

    /**
     * Set codepostale
     *
     * @param integer $codepostale
     * @return Garderie
     */
    public function setCodepostale($codepostale)
    {
        $this->codepostale = $codepostale;

        return $this;
    }

    /**
     * Get codepostale
     *
     * @return integer 
     */
    public function getCodepostale()
    {
        return $this->codepostale;
    }

    /**
     * Set nomresponsable
     *
     * @param string $nomresponsable
     * @return Garderie
     */
    public function setNomresponsable($nomresponsable)
    {
        $this->nomresponsable = $nomresponsable;

        return $this;
    }

    /**
     * Get nomresponsable
     *
     * @return string 
     */
    public function getNomresponsable()
    {
        return $this->nomresponsable;
    }

    /**
     * Set iduser
     *
     * @param \Bs\BackOfficeBundle\Entity\User $iduser
     * @return Garderie
     */
    public function setIduser(\Bs\BackOfficeBundle\Entity\User $iduser = null)
    {
        $this->iduser = $iduser;

        return $this;
    }

    /**
     * Get iduser
     *
     * @return \Bs\BackOfficeBundle\Entity\User 
     */
    public function getIduser()
    {
        return $this->iduser;
    }
}
