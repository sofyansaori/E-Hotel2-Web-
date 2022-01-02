
<!DOCTYPE html>
<html>
<head>
	<title>Login Admin Hotel</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
  <link rel="icon" href="assets/img/hotel.png">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<img class="wave" src="assets/img/wave.png">
	<div class="container">
		<div class="img">
			<img src="assets/img/uwu.svg">
		</div>
		<div class="login-content">
			<form action="proses_login.php" method="post">
				<img src="assets/img/avatar.svg">
				<h2 class="title">E-Hotel</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Username</h5>
           		   		<input type="text" name="username" class="input" >
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input type="password" name="password" class="input">
            	   </div>
            	</div>
            	<a href="#"></a>
            <input type="submit" name="login" class="btn" value="Login">
            </form>
			<?php
			$notif = isset($_GET['notif']) ? $_GET['notif'] : false;

			if ($notif == true) {
				echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>Data tidak sesuai!
				  <button type='button' class='alert alert-danger' data-dismiss='alert' aria-label='Close'>
				    <span aria-hidden='true'>&times;</span>
				  </button>
				</div>";
			}
		?>
        </div>
    </div>
    <script type="text/javascript" src="assets/js/main.js"></script>
</body>
</html>
