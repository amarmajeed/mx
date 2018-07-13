<?php
class func{	
	public function loggedin($useremail){
		$_SESSION['UEmail'] = $useremail;
		header("location: index.php");
		exit();
		}		
	public function sanitize($dirty){
		return htmlentities($dirty,ENT_QUOTES,"UTF-8");
	}
	public function is_logged_in(){
		if(isset($_SESSION['UEmail'])){
			return true;
		}else{
			return false;
		}
	}
}
?>