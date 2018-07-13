<?php 
class Verify extends Dbh{
	
	public function emailVerifier($email){
		$sql = "SELECT user_email from register WHERE user_email = '".$email."' ";
		$result = $this->connect()->query($sql);
		$rows = $result->num_rows;
		
		if($rows > 0){
			
			while($row = $result->fetch_assoc()){
				$data[] = $row;
				}
				return $data;
			}		
		}
}
?>