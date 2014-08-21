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
class Weekends
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
     * @var datetime $date
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
	
	public function setId($id){
		$this->id = $id;
	}
	
	/**
     * Get datetime
     *
     * @return datetime
     */
    public function getDate()
    {
        return $this->date;
    }
	
	public function setDate($date){
		$this->date = $date;
	}
}