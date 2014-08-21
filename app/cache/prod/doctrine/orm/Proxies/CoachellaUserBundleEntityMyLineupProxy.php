<?php

namespace Proxies;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class CoachellaUserBundleEntityMyLineupProxy extends \Coachella\UserBundle\Entity\MyLineup implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;

            if (method_exists($this, "__wakeup")) {
                // call this after __isInitialized__to avoid infinite recursion
                // but before loading to emulate what ClassMetadata::newInstance()
                // provides.
                $this->__wakeup();
            }

            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }
    
    
    public function getId()
    {
        $this->__load();
        return parent::getId();
    }

    public function setUserId($userId)
    {
        $this->__load();
        return parent::setUserId($userId);
    }

    public function getUserId()
    {
        $this->__load();
        return parent::getUserId();
    }

    public function setArtistId($artistId)
    {
        $this->__load();
        return parent::setArtistId($artistId);
    }

    public function getArtistId()
    {
        $this->__load();
        return parent::getArtistId();
    }

    public function setCreated($created)
    {
        $this->__load();
        return parent::setCreated($created);
    }

    public function getCreated()
    {
        $this->__load();
        return parent::getCreated();
    }

    public function setModified($modified)
    {
        $this->__load();
        return parent::setModified($modified);
    }

    public function getModified()
    {
        $this->__load();
        return parent::getModified();
    }

    public function setDate($date)
    {
        $this->__load();
        return parent::setDate($date);
    }

    public function getDate()
    {
        $this->__load();
        return parent::getDate();
    }

    public function addArtists(\Coachella\UserBundle\Entity\Artists $artist)
    {
        $this->__load();
        return parent::addArtists($artist);
    }

    public function getArtist()
    {
        $this->__load();
        return parent::getArtist();
    }

    public function setArtist(\Coachella\UserBundle\Entity\Artists $artist)
    {
        $this->__load();
        return parent::setArtist($artist);
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'user_id', 'artist_id', 'created', 'modified', 'date', 'artist');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields AS $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}