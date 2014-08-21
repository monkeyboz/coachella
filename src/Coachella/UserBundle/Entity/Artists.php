<?php

namespace Coachella\UserBundle\Entity;


use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * Coachella\UserBundle\Entity\Artists
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Coachella\UserBundle\Entity\ArtistsRepository")
 */
class Artists
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
     * @var text $description
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;
	
	/**
     * @var integer $stage_id
     *
     * @ORM\Column(name="stage_id", type="integer")
     */
    private $stage_id;
	

    /**
     * @var datetime $start_time
     *
     * @ORM\Column(name="start_time", type="datetime")
     */
    private $start_time;

    /**
     * @var datetime $end_time
     *
     * @ORM\Column(name="end_time", type="datetime")
     */
    private $end_time;

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
     * @ORM\ManyToOne(targetEntity="Stages", inversedBy="Artists")
     */
	protected $stage;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
	
	public function getOptions(){
		$options = array('edit'=>array(
							'link'=>'_editArtists', 'id'=>$this->id), 
						'delete'=>array(
							'link'=>'_deleteArtists', 'id'=>$this->id)
						);
		return $options;
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
     * Set description
     *
     * @param text $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Get description
     *
     * @return text 
     */
    public function getDescription()
    {
        return $this->description;
    }
	
	/**
     * Set description
     *
     * @param integer $description
     */
    public function setStageId($stage_id)
    {
        $this->stage_id = $stage_id;
    }

    /**
     * Get description
     *
     * @return integer
     */
    public function getStageId()
    {
        return $this->stage_id;
    }

    /**
     * Set start_time
     *
     * @param datetime $startTime
     */
    public function setStartTime($startTime)
    {
        $this->start_time = $startTime;
    }

    /**
     * Get start_time
     *
     * @return datetime 
     */
    public function getStartTime()
    {
        return $this->start_time;
    }

    /**
     * Set end_time
     *
     * @param datetime $endTime
     */
    public function setEndTime($endTime)
    {
        $this->end_time = $endTime;
    }

    /**
     * Get end_time
     *
     * @return datetime 
     */
    public function getEndTime()
    {
        return $this->end_time;
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
     * Set stage
     *
     * @param Coachella\UserBundle\Entity\Stages $stage
     */
    public function setStage(\Coachella\UserBundle\Entity\Stages $stage)
    {
        $this->stage = $stage;
    }

    /**
     * Get stage
     *
     * @return Coachella\UserBundle\Entity\Stages 
     */
    public function getStage()
    {
        return $this->stage;
    }
	
	public function getAbsolutePath($type)
    {
        return null === $this->path ? null : $this->getUploadRootDir($type).'/'.$this->path;
    }

    public function getWebPath($type)
    {
        return null === $this->path ? null : $this->getUploadDir($type).'/'.$this->path;
    }

    protected function getUploadRootDir($type)
    {
        // the absolute directory path where uploaded documents should be saved
        return __DIR__.'/../../../../web/'.$this->getUploadDir($type);
    }

    protected function getUploadDir($type)
    {
        // get rid of the __DIR__ so it doesn't screw when displaying uploaded doc/image in the view.
        return 'uploads/'.$type;
	}
	
	public function upload(){
	    // the file property can be empty if the field is not required
	    if (null === $this->file) {
	        return;
	    }
	
	    // we use the original file name here but you should
	    // sanitize it at least to avoid any security issues
	
	    // move takes the target directory and then the target filename to move to
	    $this->file->move($this->getUploadRootDir(), $this->id);
	
	    // set the path property to the filename where you'ved saved the file
	    $this->setPath($id);
	
	    // clean up the file property as you won't need it anymore
	    $this->file = null;
	}
    public function __construct()
    {
        $this->mylineup = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add mylineup
     *
     * @param Coachella\UserBundle\Entity\Mylineup $mylineup
     */
    public function addMylineup(\Coachella\UserBundle\Entity\Mylineup $mylineup)
    {
        $this->mylineup[] = $mylineup;
    }

    /**
     * Get mylineup
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getMylineup()
    {
        return $this->mylineup;
    }
}