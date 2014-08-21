<?php
namespace Coachella\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityRepository;

use Coachella\UserBundle\Entity\Users;
use Coachella\UserBundle\Entity\MyLineup;
use Coachella\UserBundle\Entity\Artists;

class MylineupController extends Controller
{
    /**
     * @Route("/hello/{name}")
     * @Template()
     */
    public function createMylineupAction(Request $request){
    	$lineup = new MyLineup();
		$sessU = $this->get('session');
		$sessU = $sessU->get('user');
		
		$loginInfo['user'] = array('id'=>$sessU['id']);
		$startdate = strtotime(date('2012-01-01 00:00:00'));
		$enddate = strtotime(date('2012-12-30 00:00:00'));
		$loginInfo['mylineup'] = array('startdate'=>$startdate, 'enddate'=>$enddate);
		$loginInfo['date'] = date('2011-01-01');
		
		$artist = $this->getDoctrine()->getRepository('CoachellaUserBundle:Artists');
		$artist = $artist->findAll();
			
		$artistHolder = array(''=>'select');
		foreach($artist as $a){
			$artistHolder[$a->getId()] = $a->getName();
		}
		
		$form = $this->createFormBuilder($lineup)
				->add('artist_id', 'choice', array('choices' => $artistHolder))
				->getForm();
				
		$loginInfo['form'] = $form->createView();
		
		if($request->getMethod() == 'POST'){
			$form->bindRequest($request);
			
			if($form->isValid()){
				$check = $this->getDoctrine()->getRepository('CoachellaUserBundle:Mylineup');
				$check = $check->findBy(array('artist_id'=>$lineup->getArtistId(), 'user_id'=>$sessU['id']));
				
				if(sizeof($check) == 0){
					$em = $this->getDoctrine()->getEntityManager();
					$lineup->setUserId($sessU['id']);
					$em->persist($lineup);
					$em->flush();
					
					return $this->redirect($this->generateUrl('_userpage', array('id'=>$sessU['id'])));
				} else {
					return $this->render('CoachellaUserBundle:Mylineup:create.html.twig', $loginInfo);
				}
			} else {
				
				return $this->render('CoachellaUserBundle:Mylineup:create.html.twig', $loginInfo);
			}
		} else {
			
			return $this->render('CoachellaUserBundle:Mylineup:create.html.twig', $loginInfo);
		}
	}

	public function removeMylineupAction($id){
		$myLineup = $this->getDoctrine()->getRepository('CoachellaUserBundle:Mylineup');
		$sess = $this->get('session')->get('user');
		$myLineup = $myLineup->findOneBy(array('artist_id'=>$id, 'user_id'=>$sess['id']));
		
		if($myLineup != null){
			$em = $this->getDoctrine()->getEntityManager();
			$em->remove($myLineup);
			$em->flush();
		}
		
		return $this->redirect($this->generateUrl('_userpage', array('id'=>$sess['id'])));
	}
	
	public function mylineupAction($id=null,$startdate=null,$enddate=null){
		$al = $this->getDoctrine()->getRepository('CoachellaUserBundle:MyLineup');
		$mylineup = $al->findBy(array('user_id'=>$id));
		
		$loginInfo['artists'] = array();
		$loginInfo['mylineup'] = array();
		foreach($mylineup as $info){
			$em = $this->getDoctrine()->getRepository('CoachellaUserBundle:Artists');
			$artist = $em->findOneBy(array('id'=>$info->getArtistId()));
			
			if($artist != null){
				$stage = $artist->getStage()->getName();
				$loginInfo['mylineup'][$stage][] = $artist;
			}
		}
		return $this->render('CoachellaUserBundle:Mylineup:mylineup.html.twig', $loginInfo);
	}
	
	public function getTopArtistsAction(){
		$em = $this->getDoctrine()->getEntityManager();
                $artists = $em->createQuery('SELECT m.artist_id, COUNT(m.artist_id) AS idCount FROM CoachellaUserBundle:MyLineup m WHERE m.date > :date GROUP BY m.artist_id ORDER BY idCount DESC ')->setParameter('date', '2010-12-31')->getResult();
		
		foreach($artists as $a){
			$em = $this->getDoctrine()->getRepository('CoachellaUserBundle:Artists');
			$loginInfo['artists'][$a['artist_id']]['artist'] = $em->findOneBy(array('id'=>$a['artist_id']));
			$loginInfo['artists'][$a['artist_id']]['count'] = $a['idCount'];
		}
		
		return $this->render('CoachellaUserBundle:Mylineup:topArtists.html.twig', $loginInfo);
	}

	public function coachellamylineupAction(){
		$sess = $this->get('session');
		$user = $sess->get('user');
		$loginInfo['id'] = $user['id'];
		return $this->render('CoachellaUserBundle:Mylineup:facebooklineup.html.twig', $loginInfo);
	}
	
	public function addToMylineupAction($id,$date){
		$sess = $this->get('session')->get('user');
		if($sess){
			$em = $this->getDoctrine()->getRepository('CoachellaUserBundle:MyLineup');
			$em = $em->findBy(array('user_id'=>$sess['id'], 'artist_id'=>$id));
			
			if(sizeof($em) == 0){
				$mylineup = new MyLineup();
				$mylineup->setUserId($sess['id']);
				$mylineup->setArtistId($id);
				$mylineup->setDate(date_create($date));
				
				$em = $this->getDoctrine()->getEntityManager();
				$em->persist($mylineup);
				$em->flush();
			}
			return $this->redirect($this->generateUrl('_userpage', array('id'=>$sess['id'])));
		}
		return $this->redirect($this->generateUrl('_login'));
	}
}