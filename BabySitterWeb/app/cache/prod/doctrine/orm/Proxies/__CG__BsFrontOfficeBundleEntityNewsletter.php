<?php

namespace Proxies\__CG__\Bs\FrontOfficeBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Newsletter extends \Bs\FrontOfficeBundle\Entity\Newsletter implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'Bs\\FrontOfficeBundle\\Entity\\Newsletter' . "\0" . 'idnewsletter', '' . "\0" . 'Bs\\FrontOfficeBundle\\Entity\\Newsletter' . "\0" . 'addressdest', '' . "\0" . 'Bs\\FrontOfficeBundle\\Entity\\Newsletter' . "\0" . 'addresseexp', '' . "\0" . 'Bs\\FrontOfficeBundle\\Entity\\Newsletter' . "\0" . 'objet', '' . "\0" . 'Bs\\FrontOfficeBundle\\Entity\\Newsletter' . "\0" . 'contenu', '' . "\0" . 'Bs\\FrontOfficeBundle\\Entity\\Newsletter' . "\0" . 'file');
        }

        return array('__isInitialized__', '' . "\0" . 'Bs\\FrontOfficeBundle\\Entity\\Newsletter' . "\0" . 'idnewsletter', '' . "\0" . 'Bs\\FrontOfficeBundle\\Entity\\Newsletter' . "\0" . 'addressdest', '' . "\0" . 'Bs\\FrontOfficeBundle\\Entity\\Newsletter' . "\0" . 'addresseexp', '' . "\0" . 'Bs\\FrontOfficeBundle\\Entity\\Newsletter' . "\0" . 'objet', '' . "\0" . 'Bs\\FrontOfficeBundle\\Entity\\Newsletter' . "\0" . 'contenu', '' . "\0" . 'Bs\\FrontOfficeBundle\\Entity\\Newsletter' . "\0" . 'file');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Newsletter $proxy) {
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
    public function getIdnewsletter()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getIdnewsletter();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdnewsletter', array());

        return parent::getIdnewsletter();
    }

    /**
     * {@inheritDoc}
     */
    public function setAddressdest($addressdest)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAddressdest', array($addressdest));

        return parent::setAddressdest($addressdest);
    }

    /**
     * {@inheritDoc}
     */
    public function getAddressdest()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAddressdest', array());

        return parent::getAddressdest();
    }

    /**
     * {@inheritDoc}
     */
    public function setAddresseexp($addresseexp)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAddresseexp', array($addresseexp));

        return parent::setAddresseexp($addresseexp);
    }

    /**
     * {@inheritDoc}
     */
    public function getAddresseexp()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAddresseexp', array());

        return parent::getAddresseexp();
    }

    /**
     * {@inheritDoc}
     */
    public function setObjet($objet)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setObjet', array($objet));

        return parent::setObjet($objet);
    }

    /**
     * {@inheritDoc}
     */
    public function getObjet()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getObjet', array());

        return parent::getObjet();
    }

    /**
     * {@inheritDoc}
     */
    public function setContenu($contenu)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setContenu', array($contenu));

        return parent::setContenu($contenu);
    }

    /**
     * {@inheritDoc}
     */
    public function getContenu()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getContenu', array());

        return parent::getContenu();
    }

    /**
     * {@inheritDoc}
     */
    public function setFile($file)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFile', array($file));

        return parent::setFile($file);
    }

    /**
     * {@inheritDoc}
     */
    public function getFile()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFile', array());

        return parent::getFile();
    }

}
