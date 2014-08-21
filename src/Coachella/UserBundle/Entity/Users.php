<?php

namespace Coachella\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Coachella\UserBundle\Entity\Users
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Coachella\UserBundle\Entity\UsersRepository")
 */
class Users
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string $username
     *
     * @ORM\Column(name="username", type="string", length=100)
     */
    private $username;
	
	/**
     * @var string $email
     *
     * @ORM\Column(name="email", type="string", length=100)
     */
    private $email;

    /**
     * @var string $password
     *
     * @ORM\Column(name="password", type="string", length=100)
     */
    private $password;

    /**
     * @var integer $fb_id
     *
     * @ORM\Column(name="fb_id", type="integer")
     */
    private $fb_id;

    /**
     * @var integer $vb_id
     *
     * @ORM\Column(name="vb_id", type="integer")
     */
    private $vb_id;

    /**
     * @var integer $fg_id
     *
     * @ORM\Column(name="fg_id", type="integer")
     */
    private $fg_id;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set username
     *
     * @param string $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }
    
	/**
     * Set username
     *
     * @param string $username
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set password
     *
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set fb_id
     *
     * @param integer $fbId
     */
    public function setFbId($fbId)
    {
        $this->fb_id = $fbId;
    }

    /**
     * Get fb_id
     *
     * @return integer 
     */
    public function getFbId()
    {
        return $this->fb_id;
    }

    /**
     * Set vb_id
     *
     * @param integer $vbId
     */
    public function setVbId($vbId)
    {
        $this->vb_id = $vbId;
    }

    /**
     * Get vb_id
     *
     * @return integer 
     */
    public function getVbId()
    {
        return $this->vb_id;
    }

    /**
     * Set fg_id
     *
     * @param integer $fgId
     */
    public function setFgId($fgId)
    {
        $this->fg_id = $fgId;
    }

    /**
     * Get fg_id
     *
     * @return integer 
     */
    public function getFgId()
    {
        return $this->fg_id;
    }
}