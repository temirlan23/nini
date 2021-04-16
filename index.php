<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
     <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
    
  <form  action="vendor/signin.php" method="post">
   <label for="">Login</label>
   <input type="text" name="login"placeholder="Write login">
   <label for="">Password</label>
   <input type="password" name="password" placeholder="Write password">
   <button type="submit">Sign in</button>
   <p>
       You don't have an accaunt? - <a href="register.php">autorization</a>!
   </p>

   <?php  

if ($_SESSION['message']){
    echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
}
 unset($_SESSION['message']) ;
  
  ?>

  </form>


</body>
</html>