<?php
@include 'connection.php';

if (isset($_POST['addpackage'])) {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $image = $_FILES['image']['name'];
    $image_tmp_name = $_FILES['image']['tmp_name'];
    $image_folder = 'uploaded_img/' . $image;

    if (empty($name) || empty($price) || empty($description) || empty($image)) {
        $message[] = 'Please fill out all fields';
    } else {
        // Use prepared statements to prevent SQL injection
        $insert = "INSERT INTO packages (name, price, description, image) VALUES (?, ?, ?, ?)";
        $stmt = mysqli_prepare($con, $insert);
        if ($stmt) {
            mysqli_stmt_bind_param($stmt, 'sdss', $name, $price, $description, $image);
            if (mysqli_stmt_execute($stmt)) {
                move_uploaded_file($image_tmp_name, $image_folder);
                $message[] = 'New package added successfully';
            } else {
                $message[] = 'Could not add the package';
            }
            mysqli_stmt_close($stmt);
        } else {
            $message[] = 'Could not prepare the statement';
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
<body style="background-image:url(./images_gal/12.jpg);">

<?php
   if(isset($message)){
      foreach($message as $message){
         echo '<span class="message">'.$message.'</span>';
      }
   }
?>

<div class="container">


<div class="admin-package-form-container centered">
   <form action="" method="post" enctype="multipart/form-data">
      <h3 class="title">ADD Package</h3>
      <input type="text" class="box" name="name" placeholder="enter the package name">
      <input type="number" min="0" class="box" name="price" placeholder="enter the package price">
      <textarea class="box" name="description" placeholder="enter the package description"></textarea>
      <input type="file" class="box" name="image"  accept="image/png, image/jpeg, image/jpg">
      <input type="submit" class="btn" name="addpackage" value="Add Package">
      <a href="viewPackage.php" class="btn">go back!</a>
   </form>
</div>

</div>

</body>
</html>