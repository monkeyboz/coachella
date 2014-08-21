<?php

namespace Coachella\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Coachella\UserBundle\Entity\Layouts
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Coachella\UserBundle\Entity\LayoutsRepository")
 */
class Layouts
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
     * @var string $name
     *
     * @ORM\Column(name="name", type="string", length=200)
     */
    private $name;

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
     * Set name
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set data_id
     *
     * @param integer $dataId
     */
    public function setDataId($dataId)
    {
        $this->data_id = $dataId;
    }

    /**
     * Get data_id
     *
     * @return integer 
     */
    public function getDataId()
    {
        return $this->data_id;
    }

    /**
     * Set data
     *
     * @param Coachella\UserBundle\Entity\Data $data
     */
    public function setData(\Coachella\UserBundle\Entity\Data $data)
    {
        $this->data = $data;
    }

    /**
     * Get data
     *
     * @return Coachella\UserBundle\Entity\Data 
     */
    public function getData()
    {
        return $this->data;
    }
    public function __construct()
    {
        $this->artists = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add artists
     *
     * @param Coachella\UserBundle\Entity\Data $artists
     */
    public function addData(\Coachella\UserBundle\Entity\Data $artists)
    {
        $this->artists[] = $artists;
    }

    /**
     * Get artists
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getArtists()
    {
        return $this->artists;
    }
}