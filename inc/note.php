<?php 
class Notes extends Dbh{
	
	public function addNote($note_subject,$note_content,$user_email,$date){
		
		$sql = "INSERT into notes(note_subject,note_content,user_email,note_date)
				VALUES(
						'".$note_subject."',
						'".$note_content."',
						'".$user_email."',
						'".$date."'
					)";
		$query = $this->connect()->query($sql);
		$query = exec($query);
		return $query;
		}	
	public function showNotes($email){
		$sql = "SELECT note_subject, note_content from notes WHERE user_email = '".$email."' ";
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