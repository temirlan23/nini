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
    
  <form  >
    <img src="<?= $_SESSION['user']['avatar']?>" width="100" alt="">
    <h2><?= $_SESSION['user']['full_name']?></h2>
    <a href=""><?= $_SESSION['user']['email']?></a>

  </form>


</body>
</html>