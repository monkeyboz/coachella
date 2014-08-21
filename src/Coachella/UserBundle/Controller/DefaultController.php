<?php

namespace Coachella\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;

use Coachella\UserBundle\Entity\Users;
use Coachella\UserBundle\Entity\MyLineup;
use Coachella\UserBundle\Entity\Artists;
use Coachella\UserBundle\Entity\Weekends;
use VBSSO\VBsignup;

class DefaultController extends Controller
{
    /**
     * @Route("/hello/{name}")
     * @Template()
     */
    public function createUserAction(Request $request){
    	//create user object to display user info
    	$user = new Users();
			
		//facebook api information for auto login
		$this->api_id = '193167388116';
		$this->app_secret = 'b44a3e944afa69330ba3d1826eec32ef';
			
		//create login information to display on login page
		$loginInfo = array('api_id'=>$this->api_id,'app_secret'=>$this->app_secret);
		
		//create form object to display on the login page
		$form = $this->createFormBuilder($user)
					->add('username', 'text')
					->add('password', 'password')
					->add('email', 'text')
					->add('fb_id', 'hidden')
					->add('vb_id', 'hidden')
					->getForm();
    	
		//check to see if the form is posted for processing
    	if($request->getMethod() == 'POST'){
    		//bind form information to user object
    		$form->bindRequest($request);
			
			//check to make sure the form information is valid
			if($form->isValid()){
				//search for user in database to make sure that the user isn't already created
				$em = $this->getDoctrine()->getRepository('CoachellaUserBundle:Users');
				$check = $em->findOneByUsername($user->getUsername());
				
				//if the user is not already created, insert into database
				if(sizeof($check) < 1){
					//create session for vbulletin SSO (single signon)
					/*$_SESSION['new_user'] = true;
					$_SESSION['symfony'] = true;
					
    				$signon = new \VBsignup();
					$vbid = $signon->createUser($user->getUsername(), $user->getPassword(), $user->getEmail());
					die();*/
					
					$user->setPassword(md5($user->getPassword()));
					$em = $this->getDoctrine()->getEntityManager();
					$em->persist($user);
					$em->flush();
					
					//get login information and display user info
					$loginInfo['name'] = $user->getUsername();
					return $this->render('CoachellaUserBundle:Default:success.html.twig',$loginInfo);
				} else {
					//if user does already exist return to creation form
					$loginInfo['form'] = $form->createView();
					$loginInfo['user'] = null;
					return $this->render('CoachellaUserBundle:Default:form.html.twig',$loginInfo);
				}
			}
		} else {
			//create cookie variable to store the cookie information
			$cookie;
			
			$args = array();
			//if cookie is available process for facebook cookie information
			if(isset($_COOKIE['fbs_' . $this->api_id])){
				
				$cookie = $this->checkFbLogin();
				//check to make sure cookie isn't null
				if($cookie != null){
					//get json information from the facebook graph url to display user information
					$fbuser = json_decode(file_get_contents('https://graph.facebook.com/me?access_token=' . $cookie['access_token']));
					$user->setFbId($fbuser->id);
					
					//store user information in loginInfo array to display on login page
					$loginInfo['user'] = $user;
					
					//create form object to display form information
					$form = $this->createFormBuilder($user)
						->add('username', 'text')
						->add('password', 'password')
						->add('email', 'text')
						->add('fb_id', 'hidden')
						->getForm();
					
					//create view for form to display on form page
					$loginInfo['form'] = $form->createView();
					return $this->render('CoachellaUserBundle:Default:facebooksignup.html.twig', $loginInfo);
				} else {
					//create form object to display form information
					$form = $this->createFormBuilder($user)
						->add('username', 'text')
						->add('password', 'password')
						->add('email', 'text')
						->getForm();
				
					//create view for form to display on form page
					$loginInfo['form'] = $form->createView();
					$loginInfo['user'] = null;
					return $this->render('CoachellaUserBundle:Default:form.html.twig', $loginInfo);
				}
			} else {
				//create form object to display form information
				$form = $this->createFormBuilder($user)
					->add('username', 'text')
					->add('password', 'password')
					->add('email', 'text')
					->add('fb_id', 'hidden')
					->add('vb_id', 'hidden')
					->getForm();
				
				//creat view for form to display on form page
				$loginInfo['form'] = $form->createView();
				$loginInfo['user'] = null;
				return $this->render('CoachellaUserBundle:Default:form.html.twig', $loginInfo);
			}
		}
		return false;
    }

	public function searchAction(Request $response){
		$searchTerm = $this->getDoctrine()->getRepository('CoachellaUserBundle:Artists');
		$artists = $searchTerm->createQueryBuilder('a');
		$artists = $artists->where($artists->expr()->like('a.name', $artists->expr()->literal('%' . $response->get('search') . '%')))
						->setMaxResults(10)
						->getQuery()->getResult();
		$searchTerm = $this->getDoctrine()->getRepository('CoachellaUserBundle:Data');
		$data = $searchTerm->createQueryBuilder('d');
		$data = $data->where($data->expr()->like('d.data', $data->expr()->literal('%' . $response->get('search') . '%')))
						->setMaxResults(10)
						->getQuery()->getResult();
		
		$loginInfo['searchterm'] = $response->get('search');
		$loginInfo['search']['artists'] = $artists;
		$loginInfo['search']['pages'] = $data;
		return $this->render('CoachellaUserBundle:Default:search.html.twig', $loginInfo);
	}

	public function weekendsAction(){
		$weekends = $this->getDoctrine()->getRepository('CoachellaUserBundle:Weekends');
		$daterange = '>'.date('Y-m-d h:i:s');
		$weekend = $weekends->findBy(array('date'=>$daterange));
		$loginInfo['weekends'] = $weekend;
		return $this->render('CoachellaUserBundle:Default:weekends.html.twig', $loginInfo);
	}
	
	public function countdownAction(){
		$weekends = $this->getDoctrine()->getRepository('CoachellaUserBundle:Weekends');
		$daterange = '>'.date('Y-m-d h:i:s');
		$weekend = $weekends->findOneBy(array('date'=>$daterange));
		$loginInfo['weekends'] = $weekend;
		return $this->render('CoachellaUserBundle:Default:countdown.html.twig', $loginInfo);
	}

	public function loginAction(){
		$sess = $this->get('session');
		
		if($sess->get('user')){
			$sess = $sess->get('user');
		}
		return $this->render('CoachellaUserBundle:Default:usernav.html.twig', array('user'=>$sess));
	}
	
	public function logoutAction(){
		
	}

	//Login Script for facebook, frontgate, and coachella basic login
	public function loginUserAction(Request $request){
		//create new user object to store user information
		$user = new Users();
			
		//facebook api information
		$this->api_id = '193167388116';
		$this->app_secret = 'b44a3e944afa69330ba3d1826eec32ef';
		
		//setup login information for the page
		$loginInfo = array('api_id'=>$this->api_id,'app_secret'=>$this->app_secret);
		$loginInfo['user'] = null;
		
		//create form for login
		$form = $this->createFormBuilder($user)
					->add('username', 'text')
					->add('password', 'password')
					->add('fb_id', 'hidden')
					->getForm();
		
		//check to make sure the form wasn't already posted
		if($request->getMethod() == 'POST'){
			//bind form request information to user object
			$form->bindRequest($request);
			
			//check to make sure the form is valid
			if($form->isValid()){
				//search for user information to make sure it exists in the database
				$em = $this->getDoctrine()->getRepository('CoachellaUserBundle:Users');
				$user->setPassword(md5($user->getPassword()));
				$holder = $em->findOneBy(array('username'=>$user->getUsername(), 'password'=>$user->getPassword()));
				
				//if there is an object present process and display login screen
				if(sizeof($holder)){
					$sess = $this->get('session');
					$sess->set('user', array('id'=>$holder->getId()));
					return $this->redirect($this->generateUrl('_userpage', array('id'=>$holder->getId())));
				} else {
					//otherwise return failed login information
					$loginInfo['user'] = $user;
					$loginInfo['form'] = $form->createView();
					return $this->render('CoachellaUserBundle:Default:form.html.twig', $loginInfo);
				}
			} else {
				
				//if no post information is posted then display blank form
				$loginInfo['user'] = $user;
				$loginInfo['form'] = $form->createView();
				return $this->render('CoachellaUserBundle:Default:form.html.twig', $loginInfo);
			}
		} else {
			//check to make sure user is or isn't connected via facebook
			$arg = array();
			$cookie = $this->checkFbLogin($arg);
			
			//if user is connected via facebook, check to make sure the fb id is in our system
			if($cookie != null){
				$fbuser = @json_decode(file_get_contents('https://graph.facebook.com/me?access_token=' . $cookie['access_token']));
				if($fbuser == null){
					$loginInfo['user'] = null;
					$loginInfo['form'] = $form->createView();
					return $this->render('CoachellaUserBundle:Default:form.html.twig', $loginInfo);
				}
				$em = $this->getDoctrine()->getRepository('CoachellaUserBundle:Users');
				$holder = $em->findOneBy(array('fb_id'=>$fbuser->id));
				
				//if the user is in the system, then send to userpage
				if(sizeof($holder) > 0){
					$sess = $this->get('session');
					$sess->set('user', array('id'=>$holder->getId()));
					//echo $this->generateUrl('_userpage', array('id'=>$holder->getId()));
					return $this->redirect($this->generateUrl('_userpage', array('id'=>$holder->getId())));
				} else {
					//otherwise forward user to create an account
					$request = $this->forward('CoachellaUserBundle:Default:createUser');
					return $request;
				}
			} else {
				$loginInfo['form'] = $form->createView();
				return $this->render('CoachellaUserBundle:Default:form.html.twig', $loginInfo);
			}
		}
	}

	//check facebook login
	private function checkFBlogin(){
		$arg = array();
		//parse cookie to get facebook arguments
		if(isset($_COOKIE['fbs_' . $this->api_id])){
			parse_str(trim($_COOKIE['fbs_' . $this->api_id], '\\"'), $args);
			ksort($args);
			$payload = '';
			//setup facebook arguments for processing in the graph url
			foreach ($args as $key => $value) {
				if ($key != 'sig') {
			      $payload .= $key . '=' . $value;
			    }
			}
			//double check to make sure the arguments match with the app secret to allow for access
			if (md5($payload . $this->app_secret) != $args['sig']) {
			    //if it doesn't matchup then cookie variable will be null
			    return null;
			} else {
				//otherwise cookie gets the argument variables
				return $args;
			}
		} else {
			return null;
		}
	}
	
	public function checkFrontgateAction(){
		$req_url = 'https://secure.independenttickets.com/backstage/auth/oauth/request_token.php';
		$authurl = 'https://secure.independenttickets.com/backstage/auth/oauth/authorize.php';
		$acc_url = 'https://secure.independenttickets.com/backstage/auth/oauth/access_token.php';
		$api_url = 'https://fgsapi.independenttickets.com/accessControl/site_ID/notes/range/start/stop/pagenumber';
		$conskey = '74b865a5319fa9ca85977d56f9cb07a704e0a27d1';
		$conssec = '603993c92df0b38d440c252a6d036756';

		include_once('../src/Coachella/UserBundle/oauth/library/OAuthStore.php');
		include_once('../src/Coachella/UserBundle/oauth/library/OAuthRequester.php');
		
		//  Init the OAuthStore
		$options = array(
			'consumer_key' => $conskey, 
			'consumer_secret' => $conssec,
			'server_uri' => $api_url,
			'request_token_uri' => $req_url,
			'authorize_uri' => $authurl,
			'access_token_uri' => $acc_url
		);
		
		$testing = new \OAuthStore;
		$testing->instance("Session", $options);
		$token = \OAuthRequester::requestRequestToken($conskey, 0);
		
		$test = new \OAuthRequester('/:label/account/login/*', 'POST', array('sessionId'=>$token['token']));
		$test->doRequest();

		return $this->render('CoachellaUserBundle:Default:index.html.twig');
	}
	
	public function checkVBAction(){
		require_once('../web/vbulletin/global.php');
		//require_once('../web/vbulletin/class_dm.php');
		//require_once('../web/vbulletin/class_dm_user.php');
		
		//$browser = new \LWP;
		//$browser->UserAgent();
		print_r($browser);
		//$response = $browser->post( $url, array(vb_login_username=>$user, vb_login_password=>$pass, do=>'login'));
		
	}

	private function curloauth($url, $method = 'GET', $headers = null, $postvals = null){
		$ch = curl_init($url);
		
		if ($method == 'GET'){
			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		} else {
			$options = array(
			CURLOPT_HEADER => true,
			CURLINFO_HEADER_OUT => true,
			CURLOPT_VERBOSE => true,
			CURLOPT_HTTPHEADER => $headers,
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_POSTFIELDS => $postvals,
			CURLOPT_CUSTOMREQUEST => $method,
			CURLOPT_TIMEOUT => 3
			);
			curl_setopt_array($ch, $options);
		}
		
		$response = curl_exec($ch);
		curl_close($ch);
		
		return $response;
	}

	//login to userpage
	public function userPageAction($id=null){
		if($this->get('session')->get('user')){
			$em = $this->getDoctrine()->getRepository('CoachellaUserBundle:Users');
			$sess = $this->get('session');
			$sessU = $sess->get('user');
			$user = $em->findOneBy(array('id'=>$sessU['id']));
			
			$loginInfo['user'] = $user;
			$loginInfo['id'] = $sessU['id'];
			$startdate = strtotime(date('2012-01-01 00:00:00'));
			$enddate = strtotime(date('2012-12-30 00:00:00'));
			
			$loginInfo['mylineup'] = array('startdate'=>$startdate, 'enddate'=>$enddate);
			return $this->render('CoachellaUserBundle:Default:userpage.html.twig', $loginInfo);
		} else {
			return $this->redirect($this->generateUrl('_login'));
		}
	}
	
	public function mytribeAction($id=null){
		
	}
}
