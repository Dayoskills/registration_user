<?php
include('server.php');
?>
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
    <h2>Register</h2>
   </div> 

   <form action="register.php" method="POST" >
    <!-- display validation errors here  -->
    <?php include('errors.php'); ?>

    <div class="input_group">
        <label for="">Username</label>
        <input type="text" name="username" value="<?php echo $username; ?>">
    </div>
    <div class="input_group">
        <label for="">Email</label>
        <input type="text" name="email" value="<?php echo $email; ?>">
    </div>
    <div class="input_group">
        <label for="">Password</label>
        <input type="password" name="password_1">
    </div>
    <div class="input_group">
        <label for="">Confirm Password</label>
        <input type="password" name="password_2">
    </div>
    <div class="input_group">
        <button type="submit" name="register" class="btn" >Register</button>
    </div>
    <p>
        Already a member? <a href="login.php">Sign in</a>
    </p>
   </form>
</body>
</html>