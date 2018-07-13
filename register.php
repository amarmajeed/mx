<?php
include_once('core/functions.php');
include_once('includes/header.php');
include_once('includes/navigation.php');

// check if user is already loggedin - return true or false - declared in functions.php
if(func::is_logged_in()){
	header("location: index.php");
}else{
?>

<div class="container col-container">
	<div class="row">
    	<div class="col-md-4">
    		<h2>User Registration</h2>
    	</div>
    <div class="col-md-8">
    <!-- registration form -->
        <form action="" method="post" name="reguser" id="reguser" class="form-group" style="padding:10px 50px;">
	        <div class="form-group row">
            	<label for="fname" class="col-md-2 col-form-label">First Name</label>
                <div class="col-md-10">
		        <input type="text" name="fname" id="fname" placeholder="*First Name" class="form-control"  required />
				</div>
            </div>
        	<div class="form-group row">
				<label for="lname" class="col-md-2">Last Name</label>
                <div class="col-md-10">
                	<input type="text" name="lname" id="lname" placeholder="*Last Name" class="form-control" required />
				</div> 
 	       </div>
       	<div class="form-group row">
	        <label for="address" class="col-md-2">Address</label>
            <div class="col-md-10">
		        <input type="text" name="address" id="address" placeholder="Address" class="form-control" required />  
        	</div>
        </div>
        <div class="form-group row">
            	<label for="zip" class="col-md-2">Zip</label>
                <div class="col-md-3">
                	<input type="text" name="zip" id="zip" placeholder="*Zip" class="form-control" required />
                </div>
                <label for="city" class="col-md-2">City</label>
                <div class="col-md-5">
	                <input type="text" name="city" id="city" placeholder="*City" class="form-control" required />
                </div>
         </div>
		<div class="form-group row">
             <label for="cell" class="col-md-2">Phone Nr.</label>
             <div class="col-md-10">
		         <input type="tel" name="phonenr" id="phonenr" placeholder="*phone number" class="form-control" required />
              </div>
         </div>
         <div class="form-group row">
         	<label for="email" class="col-md-2">Email</label>
         	<div class="col-md-10">
		        <input type="email" name="email" id="email" placeholder="*Email" class="form-control" required />
              </div>
         </div>
         <div class="form-group row">
	         <label for="password" class="col-md-2">Password</label>
             <div class="col-md-10">
		         <input type="password" name="password" id="password" placeholder="*Password" class="form-control" required />
             </div>
         </div>
         <div class="form-group row">
        	<label for="rpassword" class="col-md-2">Repeat Password</label>
 			<div class="col-md-10">
		         <input type="password" name="rpassword" id="rpassword" placeholder="*Repeat password" class="form-control" required />
             </div>
        </div>
         <br />
        <button type="submit" name="submit" id="submit" class="btn btn-primary" style="float:right; margin-bottom:20px;" >Register</button>
        </form>
        </div>
    </div>
 </div>
 <!-- registration form validation through jQuary - registrationform.js -->
 <script src="js/registrationform.js" type="text/javascript"></script>
<!-- submitting registration form -->
<?php



if(isset($_POST['submit'])){

	$fname = sanitize($_POST['fname']);
	$lname = sanitize($_POST['lname']);
	$address = sanitize($_POST['address']);
	$zip = sanitize($_POST['zip']);
	$city = sanitize($_POST['city']);
	$phonenr = sanitize($_POST['phonenr']);
	$email = sanitize($_POST['email']);
	$password = sanitize($_POST['password']);
	$options = ['cost' => 12];
	// password encryption 
	$password = password_hash($password, PASSWORD_BCRYPT, $options);
	// calling registerUser() through object of Users class -->
	$registerUser = new Users();
	$registerUser->registerUser($fname,$lname,$address,$zip,$city,$phonenr,$email,$password);
	if($registerUser){
		func::loggedin($email);
		}
	}
}
include_once('includes/footer.php');
?>