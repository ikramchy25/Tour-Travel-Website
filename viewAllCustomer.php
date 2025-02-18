<?php
    include 'Admin_home.php';
    //include 'Admin_nav.php';
    ?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>All Package</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style_new.css">

</head>
<body>
<?php
@include 'connection.php'; // <-- Remove this line or uncomment if needed. It seems unnecessary in this context.

$select = mysqli_query($con, "SELECT * FROM users");
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <!-- Rest of your head content -->
</head>
<body>

<div class="container">

      <h1 style="margin-top:50px;">All Users</h1>

   <!-- Your existing product display table here -->
   <div class="package-display">
      <table class="package-display-table">
         <thead>
            <tr>
               <th width="10%" scope="col">id</th>
               <th width="20%" scope="col">username</th>
               <th width="40%" scope="col">email</th>
               <th width="20%" scope="col">password</th>
            </tr>
         </thead>
         <?php 
         $count = 1; 
         
         while ($row = mysqli_fetch_assoc($select)) { ?>
            <tr>
               <td><?php echo $count; ?></td>
               <td><?php echo $row['username']; ?></td>
               <td><?php echo $row['email']; ?></td>
               <td><?php echo $row['password']; ?></td>
            </tr>
         <?php 
          $count++;
        } 
        ?>
      </table>
   </div>
</div>

</body>
</html>