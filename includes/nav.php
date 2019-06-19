<header>


	<nav>		

	<?php
		// login and logout link when logged in into account
		if(isset($_SESSION['loggedin'])) {
			$logger = '|&nbsp;&nbsp;<a href="logout.php" title="Logout">Logout</a>&nbsp;&nbsp;';
			
			if (isset($_SESSION['role']) && $_SESSION['role'] == "no"){
				$logger = $logger . '|&nbsp;&nbsp;<a href="admin.php" title="Admin">Admin</a>&nbsp;&nbsp;';
			}

		} else {
			$logger = '&nbsp;&nbsp;<a href="login.php" title="Login">Login</a>&nbsp;&nbsp;'; 
		}

		// review link shown only if logged in
		if(isset($_SESSION['loggedin'])) {
			$review = '&nbsp;&nbsp;<a href="review.php" title="Review">Review</a>&nbsp;&nbsp;';
		} else {
			$review = '';
		}
		?>






		<!-- ul style instead? -->

		<!-- links for losers (no account) -->
		<a href="home.php" title="Home">Home</a> <span class="bar">|</span>
		<a href="register.php" title="Register">Register</a> <span class="bar">|</span>
		<a href="survey.php" title="Survey">Survey</a> <span class="bar">|</span>
		<!-- <a href="admin.php" title="Admin">Admin</a> <span class="bar">|</span> -->
		<?php echo $review ?>
		<?php echo $logger ?> 
		
		

		<!-- <a class="navbar-brand">Navbar</a> -->
		<!-- <form class="form-inline float-right">
  	 	 	<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    		<button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Search</button>
		 </form>
		  -->
		



	</nav>
</header>