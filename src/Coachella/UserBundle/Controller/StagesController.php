<?php

namespace Coachella\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\File\UploadedFile;

use Coachella\UserBundle\Entity\Users;
use Coachella\UserBundle\Entity\MyLineup;
use Coachella\UserBundle\Entity\Artists;
use Coachella\UserBundle\Entity\Stages;
use Coachella\UserBundle\Entity\Document;

class StagesController extends Controller
{
	private $dir = 'uploads/documents/';
	
    /**
     * @Route("/hello/{name}")
     * @Template()
     */
    public function createStageAction(Request $request){
    	$stages = new Stages();
		$sessU = $this->get('session');
		$sessU = $sessU->get('user');
		
		$form = $this->createFormBuilder($stages)
					->add('name', 'text')
					->getForm();
		
		if($request->getMethod() == 'POST'){
			$form->bindRequest($request);
			
			if($form->isValid()){
                                $stages->setPageId(0);
                                $date = new \DateTime(date('Y-m-d h:m:i'));
                                $stages->setCreated($date);
                                $stages->setModified($date);
				$em = $this->getDoctrine()->getEntityManager();
				$em->persist($stages);
				$em->flush();
				
				return $this->redirect($this->generateUrl('_showStages'));
			} else {
				$form->getForm();
				$loginInfo['form'] = $form->createView();
				
				return $this->render('CoachellaUserBundle:Stages:createStages.html.twig', $loginInfo);
			}
		} else {
			$loginInfo['form'] = $form->createView();
			
			return $this->render('CoachellaUserBundle:Stages:createStages.html.twig', $loginInfo);
		}
	}
	
	public function editStageAction($id=null, Request $request){
    	$stages = $this->getDoctrine()->getRepository('CoachellaUserBundle:Stages');
		$stages = $stages->findOneById($id);
		$sessU = $this->get('session');
		$sessU = $sessU->get('user');
		
		$form = $this->createFormBuilder($stages)
					->add('name', 'text')
					->getForm();
		
		if($request->getMethod() == 'POST'){
			$form->bindRequest($request);
			
			if($form->isValid()){
				$em = $this->getDoctrine()->getEntityManager();
				$em->persist($stages);
				$em->flush();
				
				return $this->redirect($this->generateUrl('_showStages'));
			} else {
				$form->getForm();
				$loginInfo['form'] = $form->createView();
				
				return $this->render('CoachellaUserBundle:Stages:createStages.html.twig', $loginInfo);
			}
		} else {
			$loginInfo['form'] = $form->createView();
			
			return $this->render('CoachellaUserBundle:Stages:createStages.html.twig', $loginInfo);
		}
	}
	
	public function showStagesAction() {
		$stages = $this->getDoctrine()->getRepository('CoachellaUserBundle:Stages');
		$stages = $stages->findAll();
		
		$loginInfo['stages'] = array();
		$sess = $this->get('session');
		
		foreach($stages as $s){
			$artists = $this->getDoctrine()->getRepository('CoachellaUserBundle:Artists');
			$artists = $artists->findBy(array('stage_id'=>$s->getId()));
			$loginInfo['stages'][$s->getId()] = array('name'=>$s->getName(), 'artists'=>$artists, 'options'=>$s->getOptions());
		}
		
		return $this->render('CoachellaUserBundle:Stages:showStages.html.twig', $loginInfo);
	}

	public function deleteStageAction($id=null){
		$stages = $this->getDoctrine()->getRepository('CoachellaUserBundle:Stages');
		$stages = $stages->findOneById($id);
		
		if($stages != null){
			$artists = $this->getDoctrine()->getRepository('CoachellaUserBundle:Artists');
			$artists = $artists->findBy(array('stage_id'=>$id));
			
			foreach($artists as $a){
				$a->setStageId(null);
				$em = $this->getDoctrine()->getEntityManager();
				$em->persist($a);
				$em->flush();
			}
			
			$em = $this->getDoctrine()->getEntityManager();
			$em->remove($stages);
			$em->flush();
		}
		return $this->redirect($this->generateUrl('_showStages'));
	}
	
	public function updateStageAction($id, $artist){
		$artistHolder = $this->getDoctrine()->getRepository('CoachellaUserBundle:Artists');
		$artistHolder = $artistHolder->findOneById($artist);
		$artistHolder->setStageId($id);
		
		$em = $this->getDoctrine()->getEntityManager();
		$em->persist($artistHolder);
		$em->flush();
		
		return $this->redirect($this->generateUrl('_showStages'));
	}
	
	public function createArtistsAction($id=null, Request $request){
		$artists = new Artists();
		$artists->setStageId($id);
		
		$sessU = $this->get('session');
		$sessU = $sessU->get('user');
		
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
                            $created = new DateTime("Y-m-d");
                                $artists->setCreated($created);
				$em = $this->getDoctrine()->getEntityManager();
				$em->persist($artists);
				$em->flush();
				
				$file['attachment']->getData()->move($this->dir, $artists->getId().'.jpg');
				
				return $this->redirect($this->generateUrl('_showStages'));
			} else {
				
				return $this->render('CoachellaUserBundle:Artists:createArtists.html.twig', $loginInfo);
			}
		} else {
			
			
			return $this->render('CoachellaUserBundle:Artists:createArtists.html.twig', $loginInfo);
		}
	}
}