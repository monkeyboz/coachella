<?php

namespace Coachella\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;

use Coachella\UserBundle\Entity\Users;
use Coachella\UserBundle\Entity\Layouts;
use Coachella\UserBundle\Entity\Gallery;
use VBSSO\VBsignup;

class PhotoGalleryController extends Controller{
	private $dir = 'uploads/gallery/';
	
	public function createGallery(Request $request){
		$gallery = $this->getDoctrine()->getRepository('CoachellaUserBundle:PhotoGallery');
		
		$form = $this->createFormBuiler($gallery)
			->add('name', 'text')
			->getForm();
		
		$loginInfo['form'] = $form->createView();
		
		if($request->getMethod() == 'POST'){
			$form->bindRequest($request);
			
			if($form->validate()){
				$em = $this->getDoctrine()->getEntityManager();
				$em->persist($photo);
				$em->flush();
				
				return $this->redirect($this->generateUrl('_showPhotos'));
			}
		}
		
		return $this->render('CoachellaUserBundle:Photo:createphoto.html.twig', $loginInfo);
	}
	
	public function createPhoto(Request $request){
		$photo = $this->getDoctrine()->getRepository('CoachellaUserBundle:Photo');
		
		$sess = $this->get('session');
		$sess = $sess->get('user');
		$photo->setUserId($sess->get('id'));
		
		$form = $this->createFormBuilder($photo)
			->add('user_id', 'hidden')
			->add('description', 'textarea')
			->add('gallery', 'entity', array(
					'class' => 'CoachellaUserBundle:PhotoGallery',
					'query_builder' => function($er) {
						return $er->createQueryBuilder('g')
						->orderBy('g.id', 'ASC');
					},
					'property'=>'name'
				))
			->getForm();
		
		$file = $this->createFormBuilder()
			->add('attachment', 'file')
			->getForm();
		
		$loginInfo['form'] = $form->createView();
		$loginInfo['attachment'] = $file->createView();
		
		if($request->getMethod() == 'POST'){
			$form->bindRequest($request);
			$file->bindRequest($request);
			
			if($form->validate()){
				$em = $this->getDoctrine()->getEntityManager();
				$em->persist($gallery);
				$em->flush();
				
				$file['attachment']->getData()->move(''.$this->dir, $artists->getId().'.jpg');
				return $this->redirect($this->generateUrl('_showGalleries'));
			} else {
				return $this->render('CoachellaUserBundle:PhotoGallery:create.html.twig', $loginInfo);
			}
		}
		return $this->render('CoachellaUserBundle:PhotoGallery:create.html.twig', $loginInfo);
	}	
	
	public function showGallery(){
		$em = $this->getDoctrine()->getRepository('CoachellaUserBundle:Gallery');
		$gallery = $em->findAll();
		
		$loginInfo['photoGallery'] = $gallery;
		return $this->render('CoachellaUserBundle:PhotoGallery:gallery.html.twig', $loginInfo);
	}
}	