<?php

namespace Proxies\__CG__\Bs\FrontOfficeBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Fichebabysitter extends \Bs\FrontOfficeBundle\Entity\Fichebabysitter implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array();



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return array('__isInitialized__', '' . "\0" . 'Bs\\FrontOfficeBundle\\Entity\\Fichebabysitter' . "\0" . 'idfiche', '' . "\0" . 'Bs\\FrontOfficeBundle\\Entity\\Fichebabysitter' . "\0" . 'nom', '' . "\0" . 'Bs\\FrontOfficeBundle\\Entity\\Fichebabysitter' . "\0" . 'titre', '' . "\0" . 'Bs\\FrontOfficeBundle\\Entity\\Fichebabysitter' . "\0" . 'experience', '' . "\0" . 'Bs\\FrontOfficeBundle\\Entity\\Fichebabysitter' . "\0" . 'consigne', '' . "\0" . 'Bs\\FrontOfficeBundle\\Entity\\Fichebabysitter' . "\0" . 'prenom', '' . "\0" . 'Bs\\FrontOfficeBundle\\Entity\\Fichebabysitter' . "\0" . 'photo', '' . "\0" . 'Bs\\FrontOfficeBundle\\Entity\\Fichebabysitter' . "\0" . 'iduser');
        }

        return array('__isInitialized__', '' . "\0" . 'Bs\\FrontOfficeBundle\\Entity\\Fichebabysitter' . "\0" . 'idfiche', '' . "\0" . 'Bs\\FrontOfficeBundle\\Entity\\Fichebabysitter' . "\0" . 'nom', '' . "\0" . 'Bs\\FrontOfficeBundle\\Entity\\Fichebabysitter' . "\0" . 'titre', '' . "\0" . 'Bs\\FrontOfficeBundle\\Entity\\Fichebabysitter' . "\0" . 'experience', '' . "\0" . 'Bs\\FrontOfficeBundle\\Entity\\Fichebabysitter' . "\0" . 'consigne', '' . "\0" . 'Bs\\FrontOfficeBundle\\Entity\\Fichebabysitter' . "\0" . 'prenom', '' . "\0" . 'Bs\\FrontOfficeBundle\\Entity\\Fichebabysitter' . "\0" . 'photo', '' . "\0" . 'Bs\\FrontOfficeBundle\\Entity\\Fichebabysitter' . "\0" . 'iduser');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Fichebabysitter $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getIdfiche()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getIdfiche();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdfiche', array());

        return parent::getIdfiche();
    }

    /**
     * {@inheritDoc}
     */
    public function setNom($nom)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNom', array($nom));

        return parent::setNom($nom);
    }

    /**
     * {@inheritDoc}
     */
    public function getNom()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNom', array());

        return parent::getNom();
    }

    /**
     * {@inheritDoc}
     */
    public function setTitre($titre)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTitre', array($titre));

        return parent::setTitre($titre);
    }

    /**
     * {@inheritDoc}
     */
    public function getTitre()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTitre', array());

        return parent::getTitre();
    }

    /**
     * {@inheritDoc}
     */
    public function setExperience($experience)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setExperience', array($experience));

        return parent::setExperience($experience);
    }

    /**
     * {@inheritDoc}
     */
    public function getExperience()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getExperience', array());

        return parent::getExperience();
    }

    /**
     * {@inheritDoc}
     */
    public function setConsigne($consigne)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setConsigne', array($consigne));

        return parent::setConsigne($consigne);
    }

    /**
     * {@inheritDoc}
     */
    public function getConsigne()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getConsigne', array());

        return parent::getConsigne();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrenom($prenom)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrenom', array($prenom));

        return parent::setPrenom($prenom);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrenom()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrenom', array());

        return parent::getPrenom();
    }

    /**
     * {@inheritDoc}
     */
    public function setPhoto($photo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPhoto', array($photo));

        return parent::setPhoto($photo);
    }

    /**
     * {@inheritDoc}
     */
    public function getPhoto()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPhoto', array());

        return parent::getPhoto();
    }

    /**
     * {@inheritDoc}
     */
    public function setIduser(\Bs\FrontOfficeBundle\Entity\User $iduser = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIduser', array($iduser));

        return parent::setIduser($iduser);
    }

    /**
     * {@inheritDoc}
     */
    public function getIduser()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIduser', array());

        return parent::getIduser();
    }

}
