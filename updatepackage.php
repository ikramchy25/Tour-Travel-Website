<?php

@include 'connection.php';

$id = $_GET['edit'];

$message = array(); // Initialize the message array

if (isset($_POST['updatepackage'])) {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $image = $_FILES['image']['name'];
    $image_tmp_name = $_FILES['image']['tmp_name'];
    $image_folder = 'uploaded_img/'.$image;

    if (empty($name) || empty($price) || empty($description) || empty($image)) {
        $message[] = 'Please fill out all fields';
    } else {
        // Use prepared statements to prevent SQL injection
        $update_data = "UPDATE packages SET name=?, price=?, description=?, image=? WHERE id=?";
        $stmt = mysqli_prepare($con, $update_data);
        if ($stmt) {
            mysqli_stmt_bind_param($stmt, 'sdssi', $name, $price, $description, $image, $id);
            mysqli_stmt_execute($stmt);

            // Check if the query was successful
            if (mysqli_affected_rows($con) > 0) {
                move_uploaded_file($image_tmp_name, $image_folder);
                $message[] = 'Package updated successfully';
            } else {
                $message[] = 'No changes made to the package';
            }
            mysqli_stmt_close($stmt);
        } else {
            $message[] = 'Could not update the package';
        }
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="style_new.css">

  
</head>
<body  style="background-image:url(./images_gal/12.jpg);">

<?php
   if(isset($message)){
      foreach($message as $msg){
         echo '<span class="message">'.$msg.'</span>';
      }
   }
?>

<div class="container">


<div class="admin-package-form-container centered">

   <?php
      $select = mysqli_query($con, "SELECT * FROM packages WHERE id = '$id'");
      while($row = mysqli_fetch_assoc($select)){
   ?>
   
   <form action="" method="post" enctype="multipart/form-data">
      <h3 class="title">Update the product</h3>
      <input type="text" class="box" name="name" value="<?php echo $row['name']; ?>" placeholder="Enter the name">
      <input type="number" min="0" class="box" name="price" value="<?php echo $row['price']; ?>" placeholder="Enter the price">
      <textarea class="box" name="description" placeholder="Enter the package description"><?php echo $row['description']; ?></textarea>
      <input type="file" class="box" name="image" accept="image/png, image/jpeg, image/jpg">
      <input type="submit" value="Update Package" name="updatepackage" class="btn">
      <a href="viewPackage.php" class="btn">Go back!</a>
   </form>
   
   <?php }; ?>
   
</div>

</div>

</body>
</html>