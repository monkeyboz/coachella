/*======================================================================*\
|| #################################################################### ||
|| # vBulletin 3.8.4
|| # ---------------------------------------------------------------- # ||
|| # Copyright �2000-2009 Jelsoft Enterprises Ltd. All Rights Reserved. ||
|| # This file may not be redistributed in whole or significant part. # ||
|| # ---------------- VBULLETIN IS NOT FREE SOFTWARE ---------------- # ||
|| # http://www.vbulletin.com | http://www.vbulletin.com/license.html # ||
|| #################################################################### ||
\*======================================================================*/
function vB_AJAX_NameVerify(C,A){var B=userAgent.match(/applewebkit\/([0-9]+)/);if(AJAX_Compatible&&!(is_saf&&!(B[1]>=412))){this.textobj=fetch_object(A);this.textobj.setAttribute("autocomplete","off");this.textobj.obj=this;this.varname=C;this.fragment="";this.timeout=null;this.ajax_req=null;this.get_text=function(){this.fragment=new String(this.textobj.value);this.fragment=PHP.trim(this.fragment)};this.key_event_handler=function(D){this.get_text();clearTimeout(this.timeout);this.timeout=setTimeout(this.varname+".name_verify();",500)};this.name_verify=function(){if(YAHOO.util.Connect.isCallInProgress(this.ajax_req)){YAHOO.util.Connect.abort(this.ajax_req)}this.ajax_req=YAHOO.util.Connect.asyncRequest("POST","ajax.php?do=verifyusername",{success:this.handle_ajax_request,failure:vBulletin_AJAX_Error_Handler,timeout:vB_Default_Timeout,scope:this},SESSIONURL+"securitytoken="+SECURITYTOKEN+"&do=verifyusername&username="+PHP.urlencode(this.fragment))};this.handle_ajax_request=function(G){if(G.responseXML&&(G.responseXML.getElementsByTagName("status").length>0)){var D=G.responseXML.getElementsByTagName("status")[0].firstChild.nodeValue;var H=G.responseXML.getElementsByTagName("image")[0].firstChild.nodeValue;var F=G.responseXML.getElementsByTagName("message")[0].firstChild.nodeValue;var I=document.getElementById("reg_verif_div");var E=document.getElementById("reg_verif_image");E.src=H;E.style.display="inline";if(D=="valid"){I.style.display="block";I.className="greenbox"}else{I.style.display="block";I.className="redbox"}I.innerHTML=F}};this.textobj.onkeyup=function(D){return this.obj.key_event_handler(D)}}};