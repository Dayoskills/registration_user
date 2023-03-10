<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User registration system using PHP and MySQL</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
   <div class="header">
    <h2>Login</h2>
   </div> 

   <form action="login.php" method="POST" >
    <!-- display validation errors here  -->
    <?php include('errors.php'); ?>

    <div class="input_group">
        <label for="">Username</label>
        <input type="text" name="username">
    </div>
    <div class="input_group">
        <label for="">Password</label>
        <input type="password" name="password">
    </div>
    <div class="input_group">
        <button type="submit" name="login" class="btn" >Login</button>
    </div>
    <p>
        Not yet a member? <a href="register.php">Sign up</a>
    </p>
   </form>
</body>
</html>