<?php

namespace Coachella\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Coachella\UserBundle\Entity\Photo
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Photo
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
     * @var integer $user_id
     *
     * @ORM\Column(name="user_id", type="integer")
     */
    private $user_id;

    /**
     * @var string $description
     *
     * @ORM\Column(name="description", type="string", length=200)
     */
    private $description;

    /**
     * @var integer $photogallery_id
     *
     * @ORM\Column(name="photogallery_id", type="integer")
     */
    private $photogallery_id;


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
     * Set user_id
     *
     * @param integer $userId
     */
    public function setUserId($userId)
    {
        $this->user_id = $userId;
    }

    /**
     * Get user_id
     *
     * @return integer 
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * Set description
     *
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
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
     * Set photogallery_id
     *
     * @param integer $photogalleryId
     */
    public function setPhotogalleryId($photogalleryId)
    {
        $this->photogallery_id = $photogalleryId;
    }

    /**
     * Get photogallery_id
     *
     * @return integer 
     */
    public function getPhotogalleryId()
    {
        return $this->photogallery_id;
    }
}