$(document).ready(function() {
    
	 "use strict";
	$("#reguser").validate({
		rules: {
			fname: {
				required: true,
				minlength: 3
				},
			lname: {
				required: true,
				minlength: 3
				},
			address: {
				required: true
				},
			zip: {
				required: true,
				number: true,
				minlength: 4,
				maxlength: 4
				},
			city: {
				required: true
				},
			phonenr: {
				required: true,
				number: true,
				minlength: 8,
				maxlength: 8
				},
			email: {
				required: true,
				email: true,
				remote: {url: "inc/checkEmail.php", type : "post"}
				},
			password: {
				required: true,
				minlength: 6
				},	
			rpassword: {
				required: true,
				equalTo: "#password"
				}			
			},
		messages: {
			fname: {
				required: "first name is required",
				minlength: "not valid name"
				},
			lname:{
				required: "last name is required",
				minlength: "not valid name"
				},
			address: {
				required: "address is required"
				},
			zip: {
				required: "required field",
				number: "not valid zip code",
				minlength: "not valid zip code",
				maxlength: "not valid zip code"
				},
			city: {
				required: "required field"
				},
			phonenr: {
				required: "phone nr. is required",
				number: "not valid phone number",
				minlength: "not valid phone number",
				maxlength: "not valid phone number"
				},
			email: {
				required: "email is required",
				email: "not valid email",
				remote: "email already exist"
				},
			password: {
				required: "required passowrd",
				minlength: "min allowed length is 6"
				},	
			rpassword: {
				required: "",
				equalTo: "password does't match"
				}				
		}
				
	});
	
	$("#fname").focusout(function() {
        check_fname();
    });
	$("#lname").focusout(function() {
        check_lname();
    });
	$("#address").focusout(function() {
        check_address();
    });
	$("#zip").focusout(function() {
        check_zip();
    });
	$("#city").focusout(function() {
        check_city();
    });
	$("#phonenr").focusout(function() {
        check_phonenr();
    });
	$("#email").focusout(function() {
        check_email();
    });
	$("#password").focusout(function() {
        check_password();
    });
	
	function check_fname(){
		var len = $('#fname').val().length;
		if(len < 3){
			$('#fname').css("border","1px solid #ff0000");
			}else{
				$('#fname').css("border","1px solid #ccc");
				}
		}
	function check_lname(){
		var len = $('#lname').val().length;
		if(len < 3){
			$('#lname').css("border","1px solid #ff0000");
			}else{
				$('#lname').css("border","1px solid #ccc");
				}
		}
		function check_address(){
		var len = $('#address').val().length;
		if(len < 5){
			$('#address').css("border","1px solid #ff0000");
			}else{
				$('#address').css("border","1px solid #ccc");
				}
		}
		function check_zip(){
		var len = $('#zip').val().length;
		if(len !== 4){
			$('#zip').css("border","1px solid #ff0000");
			}else{
				$('#zip').css("border","1px solid #ccc");
				}
		}
		function check_city(){
		var len = $('#city').val().length;
		if(len < 3){
			$('#city').css("border","1px solid #ff0000");
			}else{
				$('#city').css("border","1px solid #ccc");
				}
		}
		function check_phonenr(){
		var len = $('#phonenr').val().length;
		if(len !== 8){
			$('#phonenr').css("border","1px solid #ff0000");
			}else{
				$('#phonenr').css("border","1px solid #ccc");
				}
		}
		function check_email(){
		var len = $('#email').val().length;
		if(len < 6){
			$('#email').css("border","1px solid #ff0000");
			}else{
				$('#email').css("border","1px solid #ccc");
				}
		}
		function check_password(){
		var len = $('#password').val().length;
		if(len < 6){
			$('#password').css("border","1px solid #ff0000");
			}else{
				$('#password').css("border","1px solid #ccc");
				}
		}
});