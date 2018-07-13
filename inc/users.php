<?php

class Users extends Dbh{
	//fetching user email and password from database
	protected function getAllUsers(){
		$sql = "SELECT user_email,user_password from register";
		$result = $this->connect()->query($sql);
		$rows = $result->num_rows;
		
		if($rows > 0){
			
			while($row = $result->fetch_assoc()){
				$data[] = $row;
				}
				return $data;
			}	
		}	
	// inserting user into database
	public function registerUser($fname,$lname,$address,$zip,$city,$phonenr,$email,$password){
		$sql = "INSERT into register (user_firstname,user_lastname,user_address,user_zip,user_city,user_phonenr,user_email,user_password)
				VALUES(
					'".$fname."',
					'".$lname."',
					'".$address."',
					'".$zip."',
					'".$city."',
					'".$phonenr."',
					'".$email."',
					'".$password."' )";
				$query = $this->connect()->query($sql);
				$query = exec($query);
				return $query;
		}	
	}

?>