<?php

namespace Proxies\__CG__\Ct\Service\MetierManagerBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class CtGenre extends \Ct\Service\MetierManagerBundle\Entity\CtGenre implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'Ct\\Service\\MetierManagerBundle\\Entity\\CtGenre' . "\0" . 'id', '' . "\0" . 'Ct\\Service\\MetierManagerBundle\\Entity\\CtGenre' . "\0" . 'grLibelle', '' . "\0" . 'Ct\\Service\\MetierManagerBundle\\Entity\\CtGenre' . "\0" . 'grCode', '' . "\0" . 'Ct\\Service\\MetierManagerBundle\\Entity\\CtGenre' . "\0" . 'ctGenreCategorie'];
        }

        return ['__isInitialized__', '' . "\0" . 'Ct\\Service\\MetierManagerBundle\\Entity\\CtGenre' . "\0" . 'id', '' . "\0" . 'Ct\\Service\\MetierManagerBundle\\Entity\\CtGenre' . "\0" . 'grLibelle', '' . "\0" . 'Ct\\Service\\MetierManagerBundle\\Entity\\CtGenre' . "\0" . 'grCode', '' . "\0" . 'Ct\\Service\\MetierManagerBundle\\Entity\\CtGenre' . "\0" . 'ctGenreCategorie'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (CtGenre $proxy) {
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
    public function setGrLibelle($grLibelle)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGrLibelle', [$grLibelle]);

        return parent::setGrLibelle($grLibelle);
    }

    /**
     * {@inheritDoc}
     */
    public function getGrLibelle()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGrLibelle', []);

        return parent::getGrLibelle();
    }

    /**
     * {@inheritDoc}
     */
    public function setGrCode($grCode)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGrCode', [$grCode]);

        return parent::setGrCode($grCode);
    }

    /**
     * {@inheritDoc}
     */
    public function getGrCode()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGrCode', []);

        return parent::getGrCode();
    }

    /**
     * {@inheritDoc}
     */
    public function setCtGenreCategorie(\Ct\Service\MetierManagerBundle\Entity\CtGenreCategorie $ctGenreCategorie = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCtGenreCategorie', [$ctGenreCategorie]);

        return parent::setCtGenreCategorie($ctGenreCategorie);
    }

    /**
     * {@inheritDoc}
     */
    public function getCtGenreCategorie()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCtGenreCategorie', []);

        return parent::getCtGenreCategorie();
    }

}