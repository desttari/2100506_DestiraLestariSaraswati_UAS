<?php
@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}
?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Emily T'A|User Page</title>
      <link rel="icon" type="image/x-icon" href="assets/image/Emily Travel Agency.png">
      <link rel="stylesheet" href="css/style2.css">
   </head>
   <body>
      <div class="container">
         <div class="content">
            <h1>Hi, <span><?php echo $_SESSION['user_name'] ?></span></h1><br>
            <h2>Welcome to <span>Emily Travel Agency!</span></h2><br>
            <h4 class="px-5">Whether it’s to set sail, explore Mexico, or indulge in the Caribbean, </h4>
            <h4>at Emily Travel we make it easy to get you going on the best vacation... ever! From helping families </h4>
            <h4>make memories to romantic rendezvous our travel pros provide the expert guidance and superior service you need right now.</h4><br><br>
            <a href="/" class="btn">Home</a>
            <a href="logout.php" class="btn">logout</a>
            <a href="http://localhost:8080/products" class="btn">API</a>
         </div>
      </div>
   </body>
</html>