<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tour & Travels - Packages</title>
    <link rel="shortcut icon" type="image" href="logo.png">

    <link rel="stylesheet" href="style_pac.css">

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

    <style>
        .package-card {
        height: 100%;
        overflow: hidden;
    }

    .package-card img {
        transition: transform 0.3s ease;
    }

    .package-card:hover img {
        transform: scale(1.1);
    }

    .description {
        display: none;
    }

    .show-less-button {
        display: none;
    }

    .icon-container {
        display: flex;
        justify-content: left;
    }

    .icon-container i {
        margin: 5px;
        font-size: 24px;
       color:#12773e;
    }
</style>


</head>
<body>

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg" id="navbar">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="logo.png" alt="" width="60" height="60">
            </a>
            <a class="navbar-brand" href="MainPackage.php" id="logo"><span>T</span>ravel</a>
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
                        <a class="nav-link active" href="MainPackage.php">Packages</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="book11.php">Book</a>
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

    <!-- Home Section Start -->
    <section class="home">
        
    <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
        <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>

        <div class="carousel-inner">
        <div class="carousel-item active c-item">
            <img src="./images_gal/2.jpg" class="d-block w-100 c-img" alt="Slide 1">
            <div class="carousel-caption top-0 mt-4">
            <p class="mt-5 fs-3 text-uppercase">Discover the hidden world</p>
            <h1 class="display-1 fw-bolder text-capitalize">The Aurora Tours</h1>
            <a href="#package">
            <button class="btn btn-primary px-4 py-2 fs-5 mt-5">Package</button>
            </a>
            </div>
        </div>
        <div class="carousel-item c-item">
            <img src="./images_gal/3.jpg" class="d-block w-100 c-img" alt="Slide 2">
            <div class="carousel-caption top-0 mt-4">
            <p class="text-uppercase fs-3 mt-5">The season has arrived</p>
            <p class="display-1 fw-bolder text-capitalize">3 available tours</p>
            <a href="#package">
            <button class="btn btn-primary px-4 py-2 fs-5 mt-5">Package</button>
            </a>
            </div>
        </div>
        <div class="carousel-item c-item">
            <img src="./images_gal/1.jpg" class="d-block w-100 c-img" alt="Slide 3">
            <div class="carousel-caption top-0 mt-4">
            <p class="text-uppercase fs-3 mt-5">Destination activities</p>
            <p class="display-1 fw-bolder text-capitalize">Go glacier hiking</p>
            <a href="#package">
            <button class="btn btn-primary px-4 py-2 fs-5 mt-5">Package</button>
            </a>
            </div>
        </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#hero-carousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#hero-carousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
        </button>
    </div>
    </section>
    <!-- Home Section End -->

    
    <section class="package" id="package">
    <div class="container" style="padding-top: 30px; padding-bottom: 20px;" data-aos="fade-up" data-aos-duration="1500">
        <div class="main-txt">
            <h1 style="text-align: center;"><b style="color: white;"><span>P</span>ACKAGES</b></h1>
        </div>
        <div class="row" style="margin-top: 30px;">
            <?php
            require 'connection.php';
            $query = "select * from packages";
            $query_run = mysqli_query($con, $query);
            $check_package = mysqli_num_rows($query_run) > 0;
            if ($check_package) {
                $package_count = 0;
                while ($row = mysqli_fetch_array($query_run)) {
                    if ($package_count % 4 == 0) {
                        echo '<div class="w-100"></div>';
                    }
                    $package_count++;
                    ?>
                    <div class="col-md-3 mt-3">
                        <div class="card package-card">
                            <?php
                            $imagePath = 'uploaded_img/' . $row['image'];
                            if (file_exists($imagePath)) {
                                echo '<img src="' . $imagePath . '" class="card-img-top" alt="Package Image">';
                            } else {
                                echo "Image not found at: " . $imagePath;
                            }
                            ?>
                             <div class="d-flex border-bottom">
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-map-marker-alt text-success me-2"></i><?php
                                        echo $row['name'];
                                        ?></small>
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar-alt text-success me-2"></i>days</small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-user text-success me-2"></i>family</small>
                        </div>
                            <div class="card-body">
                                <h5 class="card-title"><b>
                                        <?php
                                        echo $row['name'];
                                        ?>
                                    </b></h5>
                                <h6 class="card-title">
                                    <b>TK.
                                        <?php
                                        echo $row['price'];
                                        ?>
                                    </b>
                                </h6>
                                <!--<div class="icon-container">
                                    <i class="fas fa-utensils"></i>
                                    <i class="fas fa-hotel"></i>
                                    <i class="fas fa-hiking"></i>
                                </div>-->
                                <div class="description" style="display: none;">
                                    <p class="card-text">
                                        <?php
                                        echo $row['description'];
                                        ?>
                                    </p>
                                </div>
                                <a href="https://www.w3schools.com/bootstrap5/bootstrap_buttons.php" class="btn btn-success">
                                    Book Now
                                </a>
                                <button class="btn btn-secondary show-more-button" onclick="showDescription(<?php echo $package_count; ?>)">Show More</button>
                                <button class="btn btn-secondary show-less-button" style="display: none;" onclick="hideDescription(<?php echo $package_count; ?>)">Show Less</button>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            } else {
                echo "no record found";
            }
            ?>
        </div>
    </div>
</section>

<!-- Add the Font Awesome library link -->
<script src="https://kit.fontawesome.com/your-font-awesome-key.js" crossorigin="anonymous"></script>

<script>
    function showDescription(packageId) {
        const description = document.getElementsByClassName('description')[packageId - 1];
        const showMoreButton = document.getElementsByClassName('show-more-button')[packageId - 1];
        const showLessButton = document.getElementsByClassName('show-less-button')[packageId - 1];

        description.style.display = 'block';
        showMoreButton.style.display = 'none';
        showLessButton.style.display = 'inline-block';
    }

    function hideDescription(packageId) {
        const description = document.getElementsByClassName('description')[packageId - 1];
        const showMoreButton = document.getElementsByClassName('show-more-button')[packageId - 1];
        const showLessButton = document.getElementsByClassName('show-less-button')[packageId - 1];

        description.style.display = 'none';
        showMoreButton.style.display = 'inline-block';
        showLessButton.style.display = 'none';
    }
</script>

      
   <!-- footer -->
   <footer id="footer" >
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
            <a href="Admin-login.php" style="color:white">Tour & Travels</a>
    </div>
    </div>
  </footer>
  <!-- footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    
</body>
</html>