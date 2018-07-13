<?php
include_once('includes/header.php');
include_once('core/functions.php');
include_once('includes/navigation.php');

if(!func::is_logged_in()){	
	if(isset($_POST['username']) && isset($_POST['password'])){
		
		$username = sanitize($_POST['username']);
		$username = trim($username);
		$password = sanitize($_POST['password']);
		$password = trim($password);		
			
		// verify post data with data stored in database - return true or false 	
        $users = new ViewUsers();
		if($users->viewAllUsers($username,$password)){
			func::loggedin($username);
			}else{
				header("location: login.php");
				}
	}else{
?>
		<div class="container">
			<div class="row">
				<div class="col-md-12 loginform">
            <h4 style="padding-bottom:30px;">Not registered yet? please <a href="register.php" style="font-style:italic;">click here </a>to register</h4>
					<form action="" method="post" id="loginform" name="loginform" class="form-group">
						<label for="username">User Email</label>
						<input type="email" ng-model="username" name="username" id="username" class="form-control" required />
                        <span class="text-danger" ng-show="loginform.username.$touched && loginform.username.$invalid">email is reuired</span><br />
						<label for="password">Password</label>
						<input type="password" ng-model="password" name="password" id="password" class="form-control" required />
                        <span class="text-danger" ng-show="loginform.password.$touched && loginform.password.$invalid">password is required.</span><br />
						<button type="submit" name="submit" class="btn btn-primary">Login</button>
						<a href="forgot.php">forgot password?</a>
 					</form> 
				</div>
			</div>
		</div>
<?php		
		}
	}else{
		header("location: index.php");
	}
include_once('includes/footer.php');	
?>