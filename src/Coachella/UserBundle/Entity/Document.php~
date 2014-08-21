<?php
// src/Coachella/UserBundle/Entity/Document.php
namespace Coachella\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 */
class Document
{
	/**
     * @Assert\File(maxSize="6000000")
     */
	public $file;
	
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    public $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank
     */
    public $name;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    public $path;

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
	    $this->file->move($this->getUploadRootDir(), $this->file->getClientOriginalName());
	
	    // set the path property to the filename where you'ved saved the file
	    $this->setPath($this->file->getClientOriginalName());
	
	    // clean up the file property as you won't need it anymore
	    $this->file = null;
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
     * Set path
     *
     * @param string $path
     */
    public function setPath($path)
    {
        $this->path = $path;
    }

    /**
     * Get path
     *
     * @return string 
     */
    public function getPath()
    {
        return $this->path;
    }
}