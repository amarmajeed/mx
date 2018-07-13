<?php

session_start();
include_once("connect.php");
include_once("verify.php");

// check if email already exist 
if(isset($_REQUEST['email'])){
	$email = $_REQUEST['email'];
	$verifier = new Verify();
	$exist = $verifier->emailVerifier($email);
	if($exist){
		echo "false";
		}else{
			echo "true";
	}
}

?>