<?php
/*======================================================================*\
|| #################################################################### ||
|| # vBulletin 3.8.4
|| # ---------------------------------------------------------------- # ||
|| # Copyright ©2000-2009 Jelsoft Enterprises Ltd. All Rights Reserved. ||
|| # This file may not be redistributed in whole or significant part. # ||
|| # ---------------- VBULLETIN IS NOT FREE SOFTWARE ---------------- # ||
|| # http://www.vbulletin.com | http://www.vbulletin.com/license.html # ||
|| #################################################################### ||
\*======================================================================*/

// ######################## SET PHP ENVIRONMENT ###########################
error_reporting(E_ALL & ~E_NOTICE & ~8192);

// ##################### DEFINE IMPORTANT CONSTANTS #######################
define('CVS_REVISION', '$RCSfile$ - $Revision: 31381 $');

// #################### PRE-CACHE TEMPLATES AND DATA ######################
$phrasegroups = array();

$specialtemplates = array();

// ########################## REQUIRE BACK-END ############################
require_once('./global.php');
require_once(DIR . '/includes/class_rss_poster.php');

header('Content-Type: text/xml; charset=utf-8');

echo 'Error';


/*======================================================================*\
|| ####################################################################
|| # 
|| # CVS: $RCSfile$ - $Revision: 31381 $
|| ####################################################################
\*======================================================================*/
?>