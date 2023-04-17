<?php include('verify.php') ?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style1.css">
        

    </head>
    <body>
        <div class="login">
            <form action="login.php" method="post">
            <?php include('errors.php') ?>
                <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Enter your registered email address"required>
        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="enter your password" required>
        <button type="submit">Login</button>
        <p>Not have an Account?<a href="first.php">Sign Up Here</a></p>

            </form>
        </div>
        
    </body>
</html>