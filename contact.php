<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tour & Travels - Contact</title>
    <link rel="shortcut icon" type="image" href="logo.png">

    <link rel="stylesheet" href="style_contact.css">
    <!-- Bootstrap Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Bootstrap Link -->
    <!-- Font Awesome Cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <!-- Font Awesome Cdn -->
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <!-- Google Fonts -->
</head>
<body>
    
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg" id="navbar">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="./images_gal/logo.png" alt="" width="60" height="60">
            </a>
            <a class="navbar-brand" href="contact.php" id="logo"><span>T</span>ravel</a>
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
                        <a class="nav-link" href="book1.php">Book</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="gallery.php">Gallary</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="contact.php">Contact</a>
                    </li>
                    

                </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->
    
    <!-- Home Section Start -->
    <div class="home">
        <div class="content">
            <h5>For Any Queries</h5>
            <p>Ask Us Any Question</p>
            <a href="#contact">contact</a>
        </div>
    </div>
    <!-- Home Section End -->


    
  <!-- Section contact Start -->
  <section class="contact" id="contact">
    <div class="container" style="padding-top: 30px;" data-aos="fade-up" data-aos-duration="1500">
      <div class="main-text">
        <h1><b style="color: white;"><span>C</span>ONTACT US</b></h1>
      </div>
      
      <div class="row">
        <div class="col-md-6 py-3 py-md-0">
          <div class="card">
          <img src="./images_gal/13.jpg" class="img-thumbnail"  alt="">
          </div>
        </div>
        <div class="col-md-6 py-3 py-md-0">
          <form action="https://formspree.io/f/xgejorrk" method="POST" >
            <input type="text" class="form-control" name="name" placeholder="Your Name" required><br>
            <input type="email" class="form-control" name="email" placeholder="Email Id" required><br>
            <input type="text" class="form-control" name="subject" placeholder="Subject" required><br>

            <textarea class="form-control" rows="4" name="text" placeholder="Write Your Message here" required></textarea>
            <button type="submit"class="submit">Send</button>
          </form>
        </div>
      </div>
    </div>
  </section>
  <!-- Section contact End -->


   
    
    
      
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
      <p>Designed By Meherunnesa Hossain Ibnath</p>
    </div>
    <div class="copyright" style="color:white">
            © 2020 Copyright:
            <a href="./login/Admin-login.php" style="color:white">Tour & Travels</a>
    </div>
    </div>
  </footer>
  <!-- footer -->
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>