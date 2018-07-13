<?php
include_once('core/functions.php');
include_once("includes/header.php");
include_once("includes/navigation.php");
if(func::is_logged_in()){
?>	
<div class="container">
    <span id="error_message" style="padding-bottom:10px;"></span>
    <form action="" method="post" name="submit_note" id="submit_note">
    	<div class="form-group row">
        	<div class="col-md-8">
            <input type="text" name="note_subject" id="note_subject" class="form-control" placeholder="*add subject" /><br />
            <textarea cols="100px" rows="10px" name="note_content" id="note_content" class="form-control" placeholder="*please write some text" ></textarea><br />
            <button type="submit" name="submit" id="submit" class="btn btn-primary">Post note</button>
    	</div>
        </div>
    </form>   
</div>
<div class="container">
	<div class="row">
    	<div class="col-md-8">
        <div id="display_note"></div>
        </div>
    </div>
</div>

<!-- inserting note via ajax call -->
<script>
$(document).ready(function() {
    $('#submit_note').on('submit',function(event){
		event.preventDefault();
		var note_data = $(this).serialize();
		$.ajax({
				url: "insert_note.php",
				method: "POST",
				data: note_data,
				dataType:"JSON",
				success: function(data){
					if(data.error!= ""){
						$('#submit_note').get(0).reset();
						$('#error_message').html(data.error);
						}
					}
			});
		});
<!-- loading notes via ajax call -->
	load_notes();		
	function load_notes(){
		$.ajax({
				url: "fetch_note.php",
				method: "POST",
				success: function(data){
					$('#display_note').html(data);
					}
			});
		}
});
</script>



<script>
		var app = angular.module('myApp',[]);
		app.controller('myCtrl',function($scope){
			$scope.name = "Hello"; 
			});
		</script>
<?php
}else{
	header("location: login.php");
	}
include_once('includes/footer.php');

?>