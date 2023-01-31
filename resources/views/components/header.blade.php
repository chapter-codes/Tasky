<header>
			<nav class="navbar navbar-expand-lg navbar-dark bg-dark"> 
			<div class="container-fluid"> 
				<a class="navbar-brand" href="#">Tasky</a>
				<ul class="navbar-na">
					<li class="nav-item droplet"> 
			  		<a class="nav-link dropdown-togle" data-bs-toggle="dropdwn" href="#" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa-solid fa-user"></i></a>
			  	 <div class="dropdon-menu">
			  	  <a class="dropdow-item" href="/">Home</a> 
			  	  <?php if (!isset($_SESSION['loggedIn'])){
			  	  	echo "<a class=\"dropdon-item\" href=\"login.php\">Login</a> ";
			  	  } 
			  	  ?>			  	
			  	  <a class="dropdow" href="signUp.php">Sign up</a>
			  	   <?php if (isset($_SESSION['loggedIn']) and $_SESSION['loggedIn']){
			  	  	echo "<a class=\"dropdown-item\" href=\"logout.php\">Logout</a>";
			  	  } 
			  	  ?>

				</ul> 
		</header>
		