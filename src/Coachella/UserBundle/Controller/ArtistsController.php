<?php
namespace Coachella\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;

use Coachella\UserBundle\Entity\Users;
use Coachella\UserBundle\Entity\MyLineup;
use Coachella\UserBundle\Entity\Artists;
use Coachella\UserBundle\Entity\Document;

class ArtistsController extends Controller
{
	private $dir = 'uploads/documents/';
    /**
     * @Route("/hello/{name}")
     * @Template()
     */
    public function createArtistsAction(Request $request){
    	$artists = new Artists();
		$sessU = $this->get('session');
		$sessU = $sessU->get('user');
		
		$stages = $this->getDoctrine()->getRepository('CoachellaUserBundle:Stages');
		$stages = $stages->findAll();
		
		$stagesHolder = array();
		foreach($stages as $a){
			$stagesHolder[$a->getId()] = $a->getName();
		}
		
		$form = $this->createFormBuilder($artists)
					->add('name', 'text')
					->add('description', 'textarea')
					->add('stage', 'entity', array(
					    'class' => 'CoachellaUserBundle:Stages',
					    'query_builder' => function($er) {
					        return $er->createQueryBuilder('s')
					            ->orderBy('s.id', 'ASC');
					    },
					    'property'=>'name'
					))
					->add('start_time', 'datetime')
					->add('end_time', 'datetime')
					->getForm();
					
		$file = $this->createFormBuilder()
			->add('attachment', 'file')
			->getForm();
		
		$loginInfo['form'] = $form->createView();
		$loginInfo['attachment'] = $file->createView();
		
		if($request->getMethod() == 'POST'){
			$form->bindRequest($request);
			$file->bindRequest($request);
			
			$validator = $this->get('validator');
			$errors = $validator->validate($artists);
			
			if(count($errors) == 0){
                                $created = new Datetime("Y-m-d h:m:i");
                                $artists->setCreated($created);
				$em = $this->getDoctrine()->getEntityManager();
				$em->persist($artists);
				$em->flush();
				
				$file['attachment']->getData()->move($this->dir, $artists->getId().'.jpg');
				
				return $this->redirect($this->generateUrl('_showArtists'));
			} else {
				
				return $this->render('CoachellaUserBundle:Artists:createArtists.html.twig', $loginInfo);
			}
		} else {
			
			return $this->render('CoachellaUserBundle:Artists:createArtists.html.twig', $loginInfo);
		}
	}

	public function showArtistsAction(){
		$em = $this->getDoctrine()->getRepository('CoachellaUserBundle:Artists');
		$artists = $em->findAll();
		
		$loginInfo['artists'] = $artists;
		$user = $this->get('session');
		$loginInfo['user'] = $user->get('user');
		return $this->render('CoachellaUserBundle:Artists:showArtists.html.twig', $loginInfo);
	}

	public function editArtistsAction($id=null, Request $request){
		$artists = new Artists();
		$loginInfo['title'] = 'Edit Artists';
		
		$stages = $this->getDoctrine()->getRepository('CoachellaUserBundle:Stages');
		$stages = $stages->findAll();
		
		$stagesHolder = array();
		foreach($stages as $a){
			$stagesHolder[$a->getId()] = $a->getName();
		}
		
		$artists = $this->getDoctrine()->getRepository('CoachellaUserBundle:Artists');
		$artists = $artists->findOneById($id);
		
		$form = $this->createFormBuilder($artists)
			->add('name', 'text')
			->add('description', 'textarea')
			->add('stage_id', 'choice', array('choices' => $stagesHolder))
			->add('start_time', 'datetime')
			->add('end_time', 'datetime')
			->add('artist_id', 'hidden')
			->getForm();
		$file = $this->createFormBuilder()
			->add('attachment', 'file')
			->getForm();
			
		$loginInfo['form'] = $form->createView();
		$loginInfo['attachment'] = $file->createView();
		
		if($request->getMethod() == 'POST'){
			$form->bindRequest($request);
			$file->bindRequest($request);
			
			$validator = $this->get('validator');
			$errors = $validator->validate($artists);
			
			if(count($errors) == 0){
				$em = $this->getDoctrine()->getEntityManager();
				$em->persist($artists);
				$em->flush();
				
				$file['attachment']->getData()->move(''.$this->dir, $artists->getId().'.jpg');
				
				return $this->redirect($this->generateUrl('_showArtists'));
			} else {
				return $this->render('CoachellaUserBundle:Artists:createArtists.html.twig', $loginInfo);
			}
		} else {
			return $this->render('CoachellaUserBundle:Artists:createArtists.html.twig', $loginInfo);
		}
	}

	public function deleteArtistsAction($id){
		$ar = $this->getDoctrine()->getRepository('CoachellaUserBundle:Artists');
		$ar = $ar->findOneById($id);
		
		$em = $this->getDoctrine()->getEntityManager();
		$em->remove($ar);
		$em->flush();
		
		return $this->redirect($this->generateUrl('_showArtists'));
	}
	
	public function artistPageAction($id){
		$artists = $this->getDoctrine()->getRepository('CoachellaUserBundle:Artists');
		$artists = $artists->findOneBy(array('id'=>$id));
		
		$loginInfo['artist'] = $artists;
		return $this->render('CoachellaUserBundle:Artists:page.html.twig', $loginInfo);
	}
	
	public function addArtistsMylineupAction($id, $date){
		$loginInfo['id'] = $id;
		$loginInfo['date'] = $date;
		return $this->render('CoachellaUserBundle:Artists:myLineupLink.html.twig', $loginInfo);
	}
	
	public function showArtistsMyLineupAction($date){
		$artists = $this->getDoctrine()->getRepository('CoachellaUserBundle:Artists');
		$artists = $artists->createQueryBuilder('a')
			->where('a.start_time > :startdate AND a.start_time < :enddate')
			->setParameter('startdate', date(($date-1).'-12-31'))
			->setParameter('enddate', date($date.'-12-31'))
			->getQuery();
		
		$artists = $artists->getResult();
		$loginInfo['artists'] = $artists;
		$loginInfo['date'] = $date;
		
		return $this->render('CoachellaUserBundle:Artists:mylineup.html.twig', $loginInfo);
	}
}
?>