<nav class="navbar navbar-default">
  <div class="container">
        <div class="row">
           <div class="col-md-2" align="center">
             <a href="index.php" class="navbar-brand" style="font-size:18px; font-weight:bold;">HOME</a>
            </div>
        <div class="col-md-10">			
        <ul class="nav navbar-nav list-group">
        <?php 
		if(func::is_logged_in()){
			echo '<li><a href="logout.php">Logout</a></li>';
		}else{
			echo '<li><a href="login.php">Signin</a></li>
			<li><a href="register.php">Signup</a></li>';
		} ?>
		</div>        
        </div>
	  </nav>