<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Jungle Quest</title>
	<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
	<div id="game">
		<h1 style="color:cornsilk;"><center>Jungle Quest</center></h1>		
	</div>
    <div class="container">
      <form action="server.php" method="POST">
        <label for="username">Username</label>
        <input type="text" id="username" name="un" placeholder="Enter your name" required >
        <label for="email">Email</label>
        <input type="email" id="email" name="em" placeholder="Enter your email address"required>
        <label for="password">Password</label>
        <input type="password" id="password" name="pwd" placeholder="enter your password"required>
        <label for="confirm-password">Confirm Password</label>
        <input type="password" id="confirm-password" name="confirmpwd" placeholder="Re-enter your password"required>
        <button type="submit">Sign Up</button>
        
      </form>
      <p>Already have an account? <a href="second.php">Login here</a></p>
	  </div>
      
</body>
</html>

