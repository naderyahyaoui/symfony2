<?php

namespace Bs\FrontOfficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Evenement
 *
 * @ORM\Table(name="evenement")
 * @ORM\Entity
 */
class Evenement
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idEvenement", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idevenement;

    /**
     * @var string
     *
     * @ORM\Column(name="nomEvenement", type="string", length=255, nullable=false)
     */
    private $nomevenement;

    /**
     * @var string
     *
     * @ORM\Column(name="lieuEvenement", type="string", length=255, nullable=false)
     */
    private $lieuevenement;

    /**
     * @var string
     *
     * @ORM\Column(name="dateEvenement", type="string", length=50, nullable=false)
     */
    private $dateevenement;

    /**
     * @var string
     *
     * @ORM\Column(name="organisateur", type="string", length=255, nullable=false)
     */
    private $organisateur;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbreVisiteur", type="integer", nullable=false)
     */
    private $nbrevisiteur;



    /**
     * Get idevenement
     *
     * @return integer 
     */
    public function getIdevenement()
    {
        return $this->idevenement;
    }

    /**
     * Set nomevenement
     *
     * @param string $nomevenement
     * @return Evenement
     */
    public function setNomevenement($nomevenement)
    {
        $this->nomevenement = $nomevenement;

        return $this;
    }

    /**
     * Get nomevenement
     *
     * @return string 
     */
    public function getNomevenement()
    {
        return $this->nomevenement;
    }

    /**
     * Set lieuevenement
     *
     * @param string $lieuevenement
     * @return Evenement
     */
    public function setLieuevenement($lieuevenement)
    {
        $this->lieuevenement = $lieuevenement;

        return $this;
    }

    /**
     * Get lieuevenement
     *
     * @return string 
     */
    public function getLieuevenement()
    {
        return $this->lieuevenement;
    }

    /**
     * Set dateevenement
     *
     * @param string $dateevenement
     * @return Evenement
     */
    public function setDateevenement($dateevenement)
    {
        $this->dateevenement = $dateevenement;

        return $this;
    }

    /**
     * Get dateevenement
     *
     * @return string 
     */
    public function getDateevenement()
    {
        return $this->dateevenement;
    }

    /**
     * Set organisateur
     *
     * @param string $organisateur
     * @return Evenement
     */
    public function setOrganisateur($organisateur)
    {
        $this->organisateur = $organisateur;

        return $this;
    }

    /**
     * Get organisateur
     *
     * @return string 
     */
    public function getOrganisateur()
    {
        return $this->organisateur;
    }

    /**
     * Set nbrevisiteur
     *
     * @param integer $nbrevisiteur
     * @return Evenement
     */
    public function setNbrevisiteur($nbrevisiteur)
    {
        $this->nbrevisiteur = $nbrevisiteur;

        return $this;
    }

    /**
     * Get nbrevisiteur
     *
     * @return integer 
     */
    public function getNbrevisiteur()
    {
        return $this->nbrevisiteur;
    }
}
