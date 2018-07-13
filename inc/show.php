<?php

class ViewUsers extends Users{
	
	public function viewAllUsers($username,$password){
		$allUsers = $this->getAllUsers();
		foreach($allUsers as $users){
			$suser = $users['user_email'];
			$spassword = $users['user_password'];
			if(($suser === $username) && password_verify($password,$spassword)){
				return true;
				}else{
					return false;
					}
			}	
		}	
	}

?>