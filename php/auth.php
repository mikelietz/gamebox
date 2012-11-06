<?php
	//Start session
	session_start();
	
	//Check whether the session variable SESS_MEMBER_ID is present or not
	if(!isset($_SESSION['SESS_PLAYER_ID']) || 
          (trim($_SESSION['SESS_PLAYER_ID']) == '')) {
		header("location: access-denied.html");
		exit();
	} else {
    $loggedinplayer = $_SESSION['SESS_PLAYER_ID'];
    $welcomename = $_SESSION['SESS_FIRST_NAME'];
    $headermessage = $_SESSION['SESS_HEADER_MESSAGE'];
    $_SESSION['SESS_HEADER_MESSAGE'] = '';
  }
?>
