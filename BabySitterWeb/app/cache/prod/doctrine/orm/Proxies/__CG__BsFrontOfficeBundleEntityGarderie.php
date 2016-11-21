<?php

namespace Proxies\__CG__\Bs\FrontOfficeBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Garderie extends \Bs\FrontOfficeBundle\Entity\Garderie implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'Bs\\FrontOfficeBundle\\Entity\\Garderie' . "\0" . 'idgarderie', '' . "\0" . 'Bs\\FrontOfficeBundle\\Entity\\Garderie' . "\0" . 'nomgarderie', '' . "\0" . 'Bs\\FrontOfficeBundle\\Entity\\Garderie' . "\0" . 'description', '' . "\0" . 'Bs\\FrontOfficeBundle\\Entity\\Garderie' . "\0" . 'tarif', '' . "\0" . 'Bs\\FrontOfficeBundle\\Entity\\Garderie' . "\0" . 'codepostale', '' . "\0" . 'Bs\\FrontOfficeBundle\\Entity\\Garderie' . "\0" . 'nomresponsable', '' . "\0" . 'Bs\\FrontOfficeBundle\\Entity\\Garderie' . "\0" . 'iduser');
        }

        return array('__isInitialized__', '' . "\0" . 'Bs\\FrontOfficeBundle\\Entity\\Garderie' . "\0" . 'idgarderie', '' . "\0" . 'Bs\\FrontOfficeBundle\\Entity\\Garderie' . "\0" . 'nomgarderie', '' . "\0" . 'Bs\\FrontOfficeBundle\\Entity\\Garderie' . "\0" . 'description', '' . "\0" . 'Bs\\FrontOfficeBundle\\Entity\\Garderie' . "\0" . 'tarif', '' . "\0" . 'Bs\\FrontOfficeBundle\\Entity\\Garderie' . "\0" . 'codepostale', '' . "\0" . 'Bs\\FrontOfficeBundle\\Entity\\Garderie' . "\0" . 'nomresponsable', '' . "\0" . 'Bs\\FrontOfficeBundle\\Entity\\Garderie' . "\0" . 'iduser');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Garderie $proxy) {
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
    public function getIdgarderie()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getIdgarderie();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdgarderie', array());

        return parent::getIdgarderie();
    }

    /**
     * {@inheritDoc}
     */
    public function setNomgarderie($nomgarderie)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNomgarderie', array($nomgarderie));

        return parent::setNomgarderie($nomgarderie);
    }

    /**
     * {@inheritDoc}
     */
    public function getNomgarderie()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNomgarderie', array());

        return parent::getNomgarderie();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription($description)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', array($description));

        return parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', array());

        return parent::getDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setTarif($tarif)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTarif', array($tarif));

        return parent::setTarif($tarif);
    }

    /**
     * {@inheritDoc}
     */
    public function getTarif()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTarif', array());

        return parent::getTarif();
    }

    /**
     * {@inheritDoc}
     */
    public function setCodepostale($codepostale)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCodepostale', array($codepostale));

        return parent::setCodepostale($codepostale);
    }

    /**
     * {@inheritDoc}
     */
    public function getCodepostale()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCodepostale', array());

        return parent::getCodepostale();
    }

    /**
     * {@inheritDoc}
     */
    public function setNomresponsable($nomresponsable)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNomresponsable', array($nomresponsable));

        return parent::setNomresponsable($nomresponsable);
    }

    /**
     * {@inheritDoc}
     */
    public function getNomresponsable()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNomresponsable', array());

        return parent::getNomresponsable();
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
