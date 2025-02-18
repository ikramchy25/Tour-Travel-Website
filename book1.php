<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Tour & Travels - Booking</title>
   <link rel="shortcut icon" type="image" href="logo.png">

   <!-- Bootstrap Link -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Bootstrap Link -->

    <!-- Font Awesome Cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <!-- Font Awesome Cdn -->

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <!-- Google Fonts -->

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style_book1.css">


</head>
<body>
   
<!-- header section starts  -->

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg" id="navbar">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="logo.png" alt="" width="60" height="60">
            </a>
            <a class="navbar-brand" href="index.php" id="logo"><span>T</span>ravel</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                <span><i class="fa-solid fa-bars"></i></span>
            </button>
            <div class="collapse navbar-collapse" id="mynavbar">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about1.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="MainPackage.php">Packages</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="book1.php">Book</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="gallery.php">Gallary</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                    

                </ul>

            </div>
        </div>
    </nav>
    <!-- Navbar End -->

<!-- header section ends -->

<div class="heading" style="background:url(images_gal/new.jpg) no-repeat">
   <h1>book now</h1>
</div>

<!-- booking section starts  -->

<section class="booking">

   <h1 class="heading-title"><b>book your trip!</b></h1>

   <?php if (isset($_SESSION['success_message']) && !empty($_SESSION['success_message'])) { ?>
      <div class="success-message" style="margin-bottom: 20px;font-size: 20px;color: green;"><?php echo $_SESSION['success_message']; ?></div>
      <?php
      unset($_SESSION['success_message']);
   }
   ?>

   <form action="book_form.php" method="post" class="book-form">

      <div class="flex">
         <div class="inputBox">
            <span>name :</span>
            <input type="text" placeholder="enter your name" name="name">
         </div>
         <div class="inputBox">
            <span>email :</span>
            <input type="email" placeholder="enter your email" name="email">
         </div>
         <div class="inputBox">
            <span>phone :</span>
            <input type="number" placeholder="enter your number" name="phone">
         </div>
         <div class="inputBox">
            <span>address :</span>
            <input type="text" placeholder="enter your address" name="address">
         </div>
         <div class="inputBox">
            <span>where to :</span>
            <input type="text" placeholder="place you want to visit" name="location">
         </div>
         <div class="inputBox">
            <span>how many :</span>
            <input type="number" placeholder="number of guests" name="guests">
         </div>
         <div class="inputBox">
            <span>arrivals :</span>
            <input type="date" name="arrivals">
         </div>
         <div class="inputBox">
            <span>leaving :</span>
            <input type="date" name="leaving">
         </div>
         <div class="inputBox">
            <span>payment method :</span>
            <input type="text" placeholder="enter your payment method" name="payment">
         </div>
         <div class="inputBox">
            <span>description :</span>
            <input type="text" placeholder="enter your description" name="description">
         </div>
         
      </div>

      <input type="submit" value="submit" class="btn" name="send">

   </form>
</section>


    
   <!-- footer -->
   <footer id="footer">
    <h1 class="text-center">Social Media Accounts</h1>
    <p class="text-center">Contact Informations</p>
    <div class="social-links">
      <a href="linkedin.com/in/meherunnesa-hossain-ibnath-8a3237214" target="_blank">
        <i class="fa-brands fa-linkedin"></i>
      </a>

      <a href="https://mail.google.com/mail/u/1/#inbox" target="_blank">
        <i class="fa-solid fa-envelope"></i>
      </a>

      <a href="https://www.facebook.com/profile.php?id=100072985493083"  target="_blank">
        <i class="fa-brands fa-facebook"></i>
      </a>
      
      <a href="subscribe.php" target="_blank">
        <i class="fa-brands fa-microsoft"></i>
      </a>

      <a href="https://www.youtube.com/@meherunnesahossainibnath5217/community"  target="_blank">
        <i class="fa-brands fa-youtube"></i>
      </a>

    </div>
    <div class="credit">
      <p>Designed By Ibnath & Ekram</p>
    </div>
    <div class="copyright" style="color:white;  font-size: 150%; padding-bottom:10px;">
            © 2023 Copyright:
            <a href="Admin-login.php" style="color:white">Tour & Travels</a>
    </div>
    </div>
  </footer>
  <!-- footer -->

  <!-- footer -->



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>


</body>
</html>