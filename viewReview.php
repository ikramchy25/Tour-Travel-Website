<?php
    include 'Admin_home.php';
    ?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>All Review</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style_new1.css">

   <!-- Add custom CSS for the pop-up and the product display table -->
   
</head>
<body>

<?php
@include 'connection.php';


$select = mysqli_query($con, "SELECT * FROM rating");

if (isset($_GET['delete'])) {
   $id = $_GET['delete'];
   mysqli_query($con, "DELETE FROM rating WHERE id = $id");
   header('location:viewReview.php');
}

if (isset($message)) {
   foreach ($message as $msg) {
      echo '<span class="message">' . $msg . '</span>';
   }
}
?>
<div class="container">
       

   <!-- Your existing product display table here -->
   <div class="review-display">
      <table class="review-display-table">
         <thead>
            <tr>
            <th  width="5%" scope="col">id</th>
               <th  width="20%" scope="col">image</th>
               <th  width="10%" scope="col">name</th>
               <th  width="10%" scope="col">rate</th>
               <th  width="30%" scope="col">review</th>
               <th  width="10%" scope="col">action</th>
            </tr>
         </thead>
         <?php 
         $count = 1; 
         
         while ($row = mysqli_fetch_assoc($select)) { ?>
            <tr>
            <td><?php echo $count;  ?></td>
               <td><img src="uploaded/<?php echo $row['image']; ?>" height="100" alt=""></td>
               <td><?php echo $row['name']; ?></td>
               <td><?php echo $row['rate']; ?> out of 5</td>
               <td><?php echo $row['review']; ?></td>
               
                <td>
                <div class="button-container">
                    <a href="viewReview.php?delete=<?php echo $row['id']; ?>" class="btn"> <i class="fas fa-trash"></i></a>
                </div>
                </td>
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