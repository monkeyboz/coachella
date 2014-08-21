<?php

namespace Coachella\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;

use Coachella\UserBundle\Entity\Users;
use Coachella\UserBundle\Entity\Layouts;
use Coachella\UserBundle\Entity\Data;
use Symfony\Component\HttpFoundation\Response;

class CMSController extends Controller{
	private $dir;
	//create cms layout
	public function __constructor(){
		$this->dir = "/uploads/";
	}	
	
	public function createCMSAction(){
		
		$infoView['widgets'] = '{ render "CoachellaUserBundle:CMS:test.html.twig"}';
		$sess = $this->get('session');
		$sess = $sess->get('user');
		
		$pagesSearch = $this->getDoctrine()->getRepository('CoachellaUserBundle:Layouts');
		$pages = $pagesSearch->findAll();
				
		$data = $this->getDoctrine()->getEntityManager()->createQueryBuilder();
		$data = $data->select('d.id')
	        ->from('CoachellaUserBundle:Data', 'd')
	        ->addOrderBy('d.id', 'DESC')
			->setMaxResults(1)
			->getQuery();
		$data = $data->getResult();
		
		if(sizeof($data) < 1){
			$data[0]['id'] = 0;
		}
		
		$loginInfo = array('serverDir'=>$_SERVER['SERVER_NAME'], 'id'=>$sess['id'], 'widgetId'=>$data[0]['id'], 'dir'=>$_SERVER['DOCUMENT_ROOT']);
		$loginInfo['pages'] = $pages;
		return $this->render('CoachellaUserBundle:CMS:test.html.twig', $loginInfo);
	}
	
	//parses json string and creates a render view for the layout
	public function jsonControllerParser($string){
			$holder = explode('^', $string);
			$holder['controller'] = explode('|', $holder[0]);
			$holder['vals'] = array();
			if(isset($holder[1]))$holder['vals'] = explode('|', $holder[1]);
			$holderWidget = '';
			foreach($holder['controller'] as $h){
				if($h != ''){
					$holderWidget .= $h.':';
				}
			}
			$holderWidget = substr($holderWidget, 0, -1);
			$holderInfo = '';
			foreach($holder['vals'] as $v){
				$valHolder = explode(',', $v);
				if(isset($valHolder[1])){
					$holderInfo .= '"'.$valHolder[0].'":"'.$valHolder[1].'",';
				}
			}
			$vals = 'with {'.$holderInfo.'}';
			$holderWidget = '{% render "'.$holderWidget.'" '.$vals.' %}';
			return $holderWidget;
	}
	
	//adds the cms view to the database
	public function updateCMSAction(Request $request){
		$sess = $this->get('session');
		$sess = $sess->get('user');
		
		if($request->getMethod() == 'POST' && $request->get('name') != ''){
			$print = json_decode(str_replace('\\', "", $request->get('data')));
			$content = '';
			
			foreach($print->testing as $layout){
				switch(sizeof($layout->value)){
					case 1:
						$content .= '<div class="layoutSing">';
						break;
					case 2:
						$content .= '<div class="layoutDub">';
						break;
					case 3:
						$content .= '<div class="layoutTrip">';
						break;
				}
				$content .= "\r\n";
				foreach($layout->value as $key=>$v){
					$controllerInterface = $this->jsonControllerParser($v->widget);
					$content .= '<div class="holder position'.$key.'">'.$controllerInterface.'</div>';
					$content .= "\r\n";
				}
				$content .= '</div>';
				$content .= "\r\n";
			}
			
			if($request->get('name') != ''){
				$layout = new Layouts();
				$layout->setName($request->get('name'));
				
				$em = $this->getDoctrine()->getEntityManager();
				$em->persist($layout);
				$em->flush();
				
				$data = new Data();
				$data->setData($content);
				$data->setLayoutId($layout->getId());
				$data->setType('layout');
				$em->persist($data);
				$em->flush();
				
				return new Response($layout->getId());
			}
		}
		return $this->render('CoachellaUserBundle:Pages:test.html.twig');
	}

	//test for twig creation
	public function checkLayoutAction(){
		return $this->render('CoachellaUserBundle:Pages:test.html.twig');
	}
	
	//grabs layout from database and places into twig.  Used for dynamically creating twigs.
	public function getLayoutAction($id=null){
		$search = $this->getDoctrine()->getRepository('CoachellaUserBundle:Data');
		$content = $search->findOneBy(array('layout_id'=>$id, 'type'=>'layout'));
		
		$file = __DIR__.'/../Resources/views/Pages/testTemplate'.$id.'.html.twig';
		if(file_exists($file)){
			unlink($file);
		}
		$h = fopen($file, 'c');
		fwrite($h, $content->getData());
		fclose($h);
		
		$loginInfo['id'] = 'CoachellaUserBundle:Pages:testTemplate'.$id.'.html.twig';
		return $this->render('CoachellaUserBundle:Pages:data.html.twig', $loginInfo);
	}
	
	//used to list out layouts for the website
	public function showLayoutsAction(){
		$search = $this->getDoctrine()->getRepository('CoachellaUserBundle:Layouts');
		$content = $search->findBy(array('type'=>'layout'));
		
		$loginInfo['content'] = $content;
		return $this->render('CoachellaUserBundle:CMS:showlayouts.html.twig', $loginInfo);
	}
	
	public function dropEditAction(Request $request){
		$string = $this->jsonControllerParser($request->get('data'));
		
		$file = __DIR__.'/../Resources/views/Pages/dropedit.html.twig';
		if(file_exists($file)){
			unlink($file);
		}
		$h = fopen($file, 'c');
		fwrite($h, $string);
		fclose($h);
		
		$loginInfo['id'] = $request->get('id');
		return $this->render('CoachellaUserBundle:Pages:dropedit.html.twig', $loginInfo);
	}

	public function imageDropAction(Request $request, $id=null){
		$loginInfo['id'] = $id;
		return $this->render('CoachellaUserBundle:Pages:imagedrop.html.twig', $loginInfo);
	}
	
	public function imageDisplayAction($id=null){
		return new Response('<img src="/uploads/'.$id.'.jpg" style="width: 100%"/>');
	}
	
	public function imageUploadAction(Request $request, $id=null){
		if($request->getMethod() == 'POST'){
			move_uploaded_file($_FILES['Filedata']['tmp_name'], 'uploads/'.$request->get('id').'.jpg');
			echo 'uploads/'.$request->get('id').'.jpg';
			die();
		}
	}
	
	public function textDropAction(Request $request, $id=null){
		$text = new Data();
		
		if($request->getMethod() == 'POST'){
			switch($request->get('style')){
				case 'Title':
					$text->setData('<h1>'.$request->get('data').'</h1>');
					break;
				case 'Small Title':
					$text->setData('<h2>'.$request->get('data').'</h2>');
					break;
				default:
					$text->setData($request->get('data'));
					break;
			}
			$text->setLayoutId($request->get('id'));
			$text->setType('text');
			
			$em = $this->getDoctrine()->getEntityManager();
			$em->persist($text);
			$em->flush();
			
			return $this->redirect($this->generateUrl('_showText', array('id'=>$request->get('id'))));
		} else {
			$textHolder = $this->getDoctrine()->getRepository('CoachellaUserBundle:data');
			$text = $textHolder->findOneBy(array('id'=>$request->get('id')));
			
			if($text){
				$loginInfo['data'] = $text->getData();
			} else {
				$loginInfo['data'] = '';
			}
			
			$loginInfo['id'] = $id;
			return $this->render('CoachellaUserBundle:Pages:textdrop.html.twig', $loginInfo);
		}
		$loginInfo['form'] = $form->createView();
		$loginInfo['id'] = $this->get('id');
		return $this->render('CoachellaUserBundle:Pages:textdrop.html.twig', $loginInfo);
	}
	
	public function showTextAction($id){
		$search = $this->getDoctrine()->getRepository('CoachellaUserBundle:Data');
		$content = $search->findOneBy(array('layout_id'=>$id, 'type'=>'text'));
		
		return new Response($content->getData());
	}
	
	public function videoDropAction($id){
		$loginInfo['id'] = $id;
		return $this->render('CoachellaUserBundle:Pages:videodrop.html.twig', $loginInfo);
	}
}

?>