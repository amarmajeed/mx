<?php
session_start();
include_once("inc/connect.php");
include_once("inc/note.php");	

$error = "";
$note_subject = "";
$note_content = "";
$email = $_SESSION['UEmail'];

if(empty($_POST['note_subject']) && empty($_POST['note_content'])){
	$error .= '<p class="text-danger">Fields must not be empty</p>';
	}
	else{
			$note_subject = $_POST['note_subject'];
			$note_content = $_POST['note_content'];
			$date = date('Y-m-d');
		}
	if($error == ""){
		$addnote = new Notes();
		$addnote->addNote($note_subject,$note_content,$email,$date);
		$error .= '<p class="text-success">Note is inserted successfully</p>';
		}
	$data = array(
		'error' => $error
	);	
	echo json_encode($data);
?>