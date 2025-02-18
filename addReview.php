<?php
@include 'connection.php';

// Fetch the data for editing
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $select = mysqli_query($con, "SELECT * FROM rating WHERE id = '$id'");
    $row = mysqli_fetch_assoc($select);
}

if (isset($_POST['addReview'])) {
    $name = $_POST['name'];
    $rate = $_POST['rate'];
    $review = $_POST['review'];
    $image = $_FILES['image']['name'];
    $image_tmp_name = $_FILES['image']['tmp_name'];
    $image_folder = 'uploaded/' . $image;

    if (empty($name) || empty($image) || empty($rate) || empty($review)) {
        $message[] = 'Please fill out all fields';
    } else {
        // Use prepared statements to prevent SQL injection
        $insert = "INSERT INTO rating (name, image, rate, review) VALUES (?, ?, ?, ?)";
        $stmt = mysqli_prepare($con, $insert);
        if ($stmt) {
            mysqli_stmt_bind_param($stmt, 'ssds', $name, $image, $rate, $review);
            if (mysqli_stmt_execute($stmt)) {
                move_uploaded_file($image_tmp_name, $image_folder);
                $message[] = 'New Review added successfully';
    
                // Redirect to viewReview.php after successful insertion
                header('Location: index.php');
                exit(); // Terminate the script after redirecting
            } else {
                $message[] = 'Could not add the product';
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
   <!-- Your existing head content -->
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="style_new1.css">

   <style>
      
      /* Add the background image to the container */
      .container {
         max-width: 1800px;
         padding: 2rem;
         margin: 0 auto;
         background-image: url('background.jpg');
         background-size: cover;
         background-position: center;
         width: 100%;
         height: 120vh;
         /* Add other background properties here if needed */
      }
   </style>
</head>
<body  style="background-image:url(./images_gal/12.jpg);">

<div class="container">
   <div class="admin-review-form-container centered">
   <form action="" method="post" enctype="multipart/form-data">
   <h3 class="title">Add Review</h3>
   <input type="text" class="box" name="name" value="<?php echo isset($row['name']) ? $row['name'] : ''; ?>" placeholder="Enter the name">
   <input type="file" class="box" name="image" accept="image/png, image/jpeg, image/jpg">
   <input type="number" min="0" class="box" name="rate" value="<?php echo isset($row['rate']) ? $row['rate'] : ''; ?>" placeholder="Enter the rate out of 5">
   <textarea class="box" name="review" placeholder="Enter the review"><?php echo isset($row['review']) ? $row['review'] : ''; ?></textarea>
   <input type="submit" value="Add Review" name="addReview" class="btn">
   <a href="index.php" class="btn">Go back!</a>
</form>

   </div>
</div>

</body>
</html>