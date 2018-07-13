<?php
session_start();
include_once("inc/connect.php");
include_once("inc/note.php");

// creating object of Notes class for calling showNote`s fnction 

	$email = $_SESSION['UEmail'];
	$viewNote = new Notes();
	$allNotes = $viewNote->showNotes($email);
	if($allNotes){
	foreach($allNotes as $notes){
		echo "<strong>".$notes['note_subject']. "</strong><br />" .$notes['note_content']. "<br /><br />";
		}
	}
?>