<?php
	namespace VBSSO;
	
	require_once(__DIR__.'/global.php');
	require_once(__DIR__.'/includes/class_dm.php');
	require_once(__DIR__.'/includes/class_dm_user.php');

/**
 * Request object.
 *
 * @author Taurean Wooley <taurean.wooley@heavenspot.com>
 *
 * @api
 */
class VBsignup{
	public function login(){
		define('THIS_SCRIPT', 'login');
		define('CSRF_PROTECTION', true);
		define('CSRF_SKIP_LIST', 'login');
		
		/*$_POST['vb_login_username'] = $_POST['username'];
		$_POST['vb_login_password'] = $_POST['password'];
		$_POST['securitytoken'] = 'guest';
		$_POST['do'] = 'login';
		$_POST['vb_login_md5password'] = '';
		$_POST['vb_login_md5password_utf'] = '';
		$_POST['cookieuser'] = '';
		$_POST['s'] = '';*/
		
		$userdm = new vB_DataManager_User($vbulletin, ERRTYPE_ARRAY);
		
		require_once(CWD.'/includes/functions_login.php');
		
		$vbulletin->input->clean_array_gpc('p', array(
			'vb_login_username'        => TYPE_STR,
			'vb_login_password'        => TYPE_STR,
			'vb_login_md5password'     => TYPE_STR,
			'vb_login_md5password_utf' => TYPE_STR,
			'postvars'                 => TYPE_BINARY,
			'cookieuser'               => TYPE_BOOL,
			'logintype'                => TYPE_STR,
			'cssprefs'                 => TYPE_STR,
		));
		
		// can the user login?
		$strikes = verify_strike_status($vbulletin->GPC['vb_login_username']);;
		
		$original_userinfo = $vbulletin->userinfo;
		
		// check password
		if(!verify_authentication($vbulletin->GPC['vb_login_username'], $vbulletin->GPC['vb_login_password'], $vbulletin->GPC['vb_login_md5password'], $vbulletin->GPC['vb_login_md5password_utf'], $vbulletin->GPC['cookieuser'], true)){
			($hook = vBulletinHook::fetch_hook('login_failure')) ? eval($hook) : false;
			// check password
			echo exec_strike_user($vbulletin->userinfo['username']);
			return false;
		}
		echo exec_unstrike_user($vbulletin->GPC['vb_login_username']);
		
		// create new session
		process_new_login($vbulletin->GPC['logintype'], $vbulletin->GPC['cookieuser'], $vbulletin->GPC['cssprefs']);
		$vbulletin->db->explain;
		exec_shut_down();
		
		return true;
	} 
	
	public function createUser($username, $password, $email) {
		$usserdm = new vB_DataManager_User();
		
		$userdm->set('username', $username);
		$userdm->set('password', $password);
		$userdm->set('email', $email);
		
		return $userdbm->save();
	}
}
?>