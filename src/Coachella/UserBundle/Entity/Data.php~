<?php

namespace Coachella\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Coachella\UserBundle\Entity\Data
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Coachella\UserBundle\Entity\DataRepository")
 */
class Data
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
     * @var text $data
     *
     * @ORM\Column(name="data", type="text")
     */
    private $data;
	
	/**
     * @var integer $layout_id
     *
     * @ORM\Column(name="layout_id", type="integer")
     */
    private $layout_id;
	
	/**
     * @var string $type
     *
     * @ORM\Column(name="type", type="string")
     */
    private $type;
	
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
     * Set data
     *
     * @param text $data
     */
    public function setData($data)
    {
        $this->data = $data;
    }

    /**
     * Get data
     *
     * @return text 
     */
    public function getData()
    {
        return $this->data;
    }
	
	/**
     * Set data
     *
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * Get data
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set layout
     *
     * @param Coachella\UserBundle\Entity\Layouts $layout
     */
    public function setLayout(\Coachella\UserBundle\Entity\Layouts $layout)
    {
        $this->layout = $layout;
    }

    /**
     * Get layout
     *
     * @return Coachella\UserBundle\Entity\Layouts 
     */
    public function getLayout()
    {
        return $this->layout;
    }
    public function __construct()
    {
        $this->layout = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add layout
     *
     * @param Coachella\UserBundle\Entity\Layouts $layout
     */
    public function addLayouts(\Coachella\UserBundle\Entity\Layouts $layout)
    {
        $this->layout[] = $layout;
    }

    /**
     * Set layout_id
     *
     * @param integer $layoutId
     */
    public function setLayoutId($layoutId)
    {
        $this->layout_id = $layoutId;
    }

    /**
     * Get layout_id
     *
     * @return integer 
     */
    public function getLayoutId()
    {
        return $this->layout_id;
    }

    /**
     * Set layouts
     *
     * @param Coachella\UserBundle\Entity\Layouts $layouts
     */
    public function setLayouts(\Coachella\UserBundle\Entity\Layouts $layouts)
    {
        $this->layouts = $layouts;
    }

    /**
     * Get layouts
     *
     * @return Coachella\UserBundle\Entity\Layouts 
     */
    public function getLayouts()
    {
        return $this->layouts;
    }

    /**
     * Set checkout
     *
     * @param Coachella\UserBundle\Entity\Layouts $checkout
     */
    public function setCheckout(\Coachella\UserBundle\Entity\Layouts $checkout)
    {
        $this->checkout = $checkout;
    }

    /**
     * Get checkout
     *
     * @return Coachella\UserBundle\Entity\Layouts 
     */
    public function getCheckout()
    {
        return $this->checkout;
    }
}