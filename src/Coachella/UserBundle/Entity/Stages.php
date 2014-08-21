<?php

namespace Coachella\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Coachella\UserBundle\Entity\Stages
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Coachella\UserBundle\Entity\StagesRepository")
 */
class Stages
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
     * @ORM\Column(name="name", type="string", length=100)
     */
    private $name;

    /**
     * @var integer $page_id
     *
     * @ORM\Column(name="page_id", type="integer")
     */
    private $page_id;

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
     * @ORM\OneToMany(targetEntity="Artists", mappedBy="stage_id")
     */
    protected $artists;


	public function getOptions(){
		
		$options = array('edit'=>array(
							'link'=>'_editStage', 'id'=>$this->id), 
						'delete'=>array(
							'link'=>'_deleteStage', 'id'=>$this->id),
						'create artist'=>array(
							'link'=>'_createArtists', 'id'=>$this->id),
						);
		return $options;
	}
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
     * Set page_id
     *
     * @param integer $pageId
     */
    public function setPageId($pageId)
    {
        $this->page_id = $pageId;
    }

    /**
     * Get page_id
     *
     * @return integer 
     */
    public function getPageId()
    {
        return $this->page_id;
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
    
    public function __construct()
    {
        $this->artists = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add artists
     *
     * @param Coachella\UserBundle\Entity\Artists $artists
     */
    public function addArtists(\Coachella\UserBundle\Entity\Artists $artists)
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