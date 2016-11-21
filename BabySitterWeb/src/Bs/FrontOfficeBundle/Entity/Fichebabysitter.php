<?php

namespace Bs\FrontOfficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Fichebabysitter
 *
 * @ORM\Table(name="fichebabysitter", indexes={@ORM\Index(name="idUser", columns={"idUser"})})
 * @ORM\Entity
 */
class Fichebabysitter
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idFiche", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idfiche;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=50, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255, nullable=false)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="experience", type="string", length=2000, nullable=false)
     */
    private $experience;

    /**
     * @var string
     *
     * @ORM\Column(name="consigne", type="string", length=120, nullable=false)
     */
    private $consigne;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255, nullable=false)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="photo", type="blob", nullable=true)
     */
    private $photo;

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
     * Get idfiche
     *
     * @return integer 
     */
    public function getIdfiche()
    {
        return $this->idfiche;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Fichebabysitter
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set titre
     *
     * @param string $titre
     * @return Fichebabysitter
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
     * Set experience
     *
     * @param string $experience
     * @return Fichebabysitter
     */
    public function setExperience($experience)
    {
        $this->experience = $experience;

        return $this;
    }

    /**
     * Get experience
     *
     * @return string 
     */
    public function getExperience()
    {
        return $this->experience;
    }

    /**
     * Set consigne
     *
     * @param string $consigne
     * @return Fichebabysitter
     */
    public function setConsigne($consigne)
    {
        $this->consigne = $consigne;

        return $this;
    }

    /**
     * Get consigne
     *
     * @return string 
     */
    public function getConsigne()
    {
        return $this->consigne;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     * @return Fichebabysitter
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set photo
     *
     * @param string $photo
     * @return Fichebabysitter
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get photo
     *
     * @return string 
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Set iduser
     *
     * @param \Bs\FrontOfficeBundle\Entity\User $iduser
     * @return Fichebabysitter
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
