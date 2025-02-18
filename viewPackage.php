<?php
    include 'Admin_home.php';
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

   <!-- Add custom CSS for the pop-up and the product display table -->
   <style>

      /* Style the "Add package" button */
      .btn-add-package {
         display: block;
         width: 100%;
         cursor: pointer;
         border-radius: .5rem;
         margin-top: 1rem;
         font-size: 1.7rem;
         padding: 1rem 3rem;
         background: var(--green);
         color: var(--white);
         text-align: center;
      }

      .btn-add-package:hover {
         background: var(--black);
      }

        .btn-add-package a {
            text-decoration: none;
        }
        
   </style>
</head>
<body>

<?php
@include 'connection.php';


$select = mysqli_query($con, "SELECT * FROM packages");


if (isset($_GET['delete'])) {
   $id = $_GET['delete'];
   mysqli_query($con, "DELETE FROM packages WHERE id = $id");
   header('location:viewPackage.php');
}

?>
<div class="container">
        <button class="btn-add-package" id="btnOpenAddPackageForm" style="width:220px;">
            <a href="addpackage.php">
                <h3 style="color:white;"><i class="fa-solid fa-plus"></i>Add Package</h3>
            </a>
        </button>

   <!-- Your existing product display table here -->
   <div class="package-display">
      <table class="package-display-table">
         <thead>
            <tr>
            <th  width="5%" scope="col">id</th>
               <th  width="20%" scope="col">image</th>
               <th  width="10%" scope="col">name</th>
               <th  width="10%" scope="col">price</th>
               <th  width="30%" scope="col">description</th>
               <th  width="10%" scope="col">action</th>
            </tr>
         </thead>
         <?php 
         $count = 1; 
         
         while ($row = mysqli_fetch_assoc($select)) { ?>
            <tr>
            <td><?php echo $count;  ?></td>
               <td><img src="uploaded_img/<?php echo $row['image']; ?>" height="100" alt=""></td>
               <td><?php echo $row['name']; ?></td>
               <td>TK<?php echo $row['price']; ?></td>
               <td><?php echo $row['description']; ?></td>
               
                <td>
                <div class="button-container">
                    <a href="updatepackage.php?edit=<?php echo $row['id']; ?>" class="btn"><i class="fas fa-edit"></i></a>
                    <a href="viewpackage.php?delete=<?php echo $row['id']; ?>" class="btn"> <i class="fas fa-trash"></i></a>
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

