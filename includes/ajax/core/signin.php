<?php

/**
 * ajax -> core -> signin
 * 
 * @package Sngine
 * @author Zamblek
 */

// set override_shutdown
$override_shutdown = true;

// fetch bootstrap
require('../../../bootstrap.php');

// check AJAX Request
is_ajax();

// check user logged in
if ($user->_logged_in) {
  return_json(array('callback' => 'window.location.reload();'));
}

try {

  // signin
  $remember = (isset($_POST['remember'])) ? true : false;
  if ($_POST['sign_method'] == 'ByEmail') {
	  $user->sign_in($_POST['username_email'], $_POST['password'], $remember);
	  return_json(array('callback' => 'window.location.reload();'));
  }
  if ($_POST['sign_method'] == 'ByPhone') {
		$response = $user->sign_in_phone($_POST['phone'], $_POST['user_ph'], $_POST['otp'], $remember);
  }
  
  if($_GET['send_otp'] == 1){
	  $response = $user->sign_in_send_otp($_POST['phone']);
	  return_json($response);
  }



  // return
  return_json(array('callback' => 'window.location.reload();'));
} catch (Exception $e) {
  return_json(array('error' => true, 'message' => $e->getMessage()));
}
