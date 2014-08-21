<?php

namespace Coachella\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Coachella\UserBundle\Entity\MyLineup
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Coachella\UserBundle\Entity\MyLineupRepository")
 */
class MyLineup
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
     * @var integer $artist_id
     *
     * @ORM\Column(name="artist_id", type="integer")
     */
    private $artist_id;

    /**
     * @var datetime $created
     *
     * @ORM\Column(name="created", type="datetime")
     */
    private $created;

    /**
     * @var datetime $modified
     *
     * @ORM\Column(name="modified", type="datetime")
     */
    private $modified;

    /**
     * @var datetime $date
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;
	
	/**
     * @ORM\ManyToMany(targetEntity="Artists", inversedBy="Users")
     */
	protected $artist;

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
     * Set artist_id
     *
     * @param integer $artistId
     */
    public function setArtistId($artistId)
    {
        $this->artist_id = $artistId;
    }

    /**
     * Get artist_id
     *
     * @return integer 
     */
    public function getArtistId()
    {
        return $this->artist_id;
    }

    /**
     * Set created
     *
     * @param datetime $created
     */
    public function setCreated($created)
    {
        $this->created = $created;
    }

    /**
     * Get created
     *
     * @return datetime 
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set modified
     *
     * @param datetime $modified
     */
    public function setModified($modified)
    {
        $this->modified = $modified;
    }

    /**
     * Get modified
     *
     * @return datetime 
     */
    public function getModified()
    {
        return $this->modified;
    }

    /**
     * Set date
     *
     * @param datetime $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * Get date
     *
     * @return datetime 
     */
    public function getDate()
    {
        return $this->date;
    }
    public function __construct()
    {
        $this->artist = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add artist
     *
     * @param Coachella\UserBundle\Entity\Artists $artist
     */
    public function addArtists(\Coachella\UserBundle\Entity\Artists $artist)
    {
        $this->artist[] = $artist;
    }

    /**
     * Get artist
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getArtist()
    {
        return $this->artist;
    }

    /**
     * Set artist
     *
     * @param Coachella\UserBundle\Entity\Artists $artist
     */
    public function setArtist(\Coachella\UserBundle\Entity\Artists $artist)
    {
        $this->artist = $artist;
    }
}