<?php  session_start(); ?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
     <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
    <!---- Registration ----->
    
  <form action="vendor/signup.php" method="post" enctype="multipart/form-data">
  <label for="">Name</label>
   <input type="text" name="full_name" placeholder="Write your name">
   <label for="">Login</label>
   <input type="text" name="login" placeholder="Write your login">
   <label for="">Email</label>
   <input type="email" name="email" placeholder="Write your email">
   <label for="">Proflile avatar</label>
   <input type="file" name="avatar">
   <label for="">Password</label>
   <input type="password" name="password" placeholder="Write password">
   <label for="">Password</label>
   <input type="password" name="password_confirm" placeholder="Write password">
   <button type="submit">Sign in</button>
   <p>
       You already have an accaunt? - <a href="index.php">Sign in</a>!
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