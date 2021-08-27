<?php

namespace Proxies\__CG__\Ct\Service\MetierManagerBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class CtImprimeTech extends \Ct\Service\MetierManagerBundle\Entity\CtImprimeTech implements \Doctrine\ORM\Proxy\Proxy
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
    public static $lazyPropertiesDefaults = [];



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
            return ['__isInitialized__', '' . "\0" . 'Ct\\Service\\MetierManagerBundle\\Entity\\CtImprimeTech' . "\0" . 'id', '' . "\0" . 'Ct\\Service\\MetierManagerBundle\\Entity\\CtImprimeTech' . "\0" . 'nomImprimeTech', '' . "\0" . 'Ct\\Service\\MetierManagerBundle\\Entity\\CtImprimeTech' . "\0" . 'uteImprimeTech', '' . "\0" . 'Ct\\Service\\MetierManagerBundle\\Entity\\CtImprimeTech' . "\0" . 'prttCreatedAt', '' . "\0" . 'Ct\\Service\\MetierManagerBundle\\Entity\\CtImprimeTech' . "\0" . 'prttUpdatedAt', '' . "\0" . 'Ct\\Service\\MetierManagerBundle\\Entity\\CtImprimeTech' . "\0" . 'ctUser'];
        }

        return ['__isInitialized__', '' . "\0" . 'Ct\\Service\\MetierManagerBundle\\Entity\\CtImprimeTech' . "\0" . 'id', '' . "\0" . 'Ct\\Service\\MetierManagerBundle\\Entity\\CtImprimeTech' . "\0" . 'nomImprimeTech', '' . "\0" . 'Ct\\Service\\MetierManagerBundle\\Entity\\CtImprimeTech' . "\0" . 'uteImprimeTech', '' . "\0" . 'Ct\\Service\\MetierManagerBundle\\Entity\\CtImprimeTech' . "\0" . 'prttCreatedAt', '' . "\0" . 'Ct\\Service\\MetierManagerBundle\\Entity\\CtImprimeTech' . "\0" . 'prttUpdatedAt', '' . "\0" . 'Ct\\Service\\MetierManagerBundle\\Entity\\CtImprimeTech' . "\0" . 'ctUser'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (CtImprimeTech $proxy) {
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
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
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
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setNomImprimeTech($nomImprimeTech)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNomImprimeTech', [$nomImprimeTech]);

        return parent::setNomImprimeTech($nomImprimeTech);
    }

    /**
     * {@inheritDoc}
     */
    public function getNomImprimeTech()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNomImprimeTech', []);

        return parent::getNomImprimeTech();
    }

    /**
     * {@inheritDoc}
     */
    public function setUteImprimeTech($uteImprimeTech)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUteImprimeTech', [$uteImprimeTech]);

        return parent::setUteImprimeTech($uteImprimeTech);
    }

    /**
     * {@inheritDoc}
     */
    public function getUteImprimeTech()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUteImprimeTech', []);

        return parent::getUteImprimeTech();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrttCreatedAt($prttCreatedAt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrttCreatedAt', [$prttCreatedAt]);

        return parent::setPrttCreatedAt($prttCreatedAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrttCreatedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrttCreatedAt', []);

        return parent::getPrttCreatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrttUpdatedAt($prttUpdatedAt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrttUpdatedAt', [$prttUpdatedAt]);

        return parent::setPrttUpdatedAt($prttUpdatedAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrttUpdatedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrttUpdatedAt', []);

        return parent::getPrttUpdatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setCtUser(\Ct\Service\UserBundle\Entity\User $ctUser = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCtUser', [$ctUser]);

        return parent::setCtUser($ctUser);
    }

    /**
     * {@inheritDoc}
     */
    public function getCtUser()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCtUser', []);

        return parent::getCtUser();
    }

}