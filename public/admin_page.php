<?php
   @include 'config.php';

   session_start();

   if(!isset($_SESSION['admin_name'])){
      header('location:login_form.php');
   }
?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Emily T'A|Admin Page </title>
      <link rel="icon" type="image/x-icon" href="assets/image/Emily Travel Agency.png">
      <link rel="stylesheet" href="css/style2.css">
   </head>
   <body>
      <div class="container2">
         <div class="content">
            <h1 class="title">welcome <span><?php echo $_SESSION['admin_name'] ?></span></h1>
            <a href="logout.php" class="btn ">logout</a>
         </div>
      </div>
      <div class="container3">
         <?php
               @include 'config.php';

               $sql = 'SELECT full_name, email_form, subjects, messages FROM user_contact_form';
               $result = mysqli_query($conn, $sql);

               if (!$result) {
                     die('Could not get data: ' . mysqli_error());}

               echo "<p><h3>Message Database</h3></p>";
               echo "<br>";
               echo "<table>
                        <thead>
                           <tr>
                                 <th>No.</th>
                                 <th>Name</th>
                                 <th>Email</th>
                                 <th>Subject</th>
                                 <th>Message</th>
                           </tr>
                        </thead>
                        <tbody>";

               $i = 1;
               while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                     echo "<tr>";
                     echo "<td> $i </td>";
                     echo "<td> {$row['full_name']} </td>";
                     echo "<td>{$row['email_form']} </td>";
                     echo "<td>{$row['subjects']} </td>";
                     echo "<td>{$row['messages']} </td>";
                     $i++;}
               
               echo "</tbody>";
               echo "</table>";
               mysqli_close($conn);
         ?>
      </div>
   </body>
</html>