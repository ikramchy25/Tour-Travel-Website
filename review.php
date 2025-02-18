<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tour & Travels</title>
    <link rel="stylesheet" href="style_review.css">

    <!-- Bootstrap Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Bootstrap Link -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    


</head>

<body>

    
<section class="rating" id="rating">
        <div class="container" style="padding-top: 30px; padding-bottom: 20px;" data-aos="fade-up" data-aos-duration="1500">
            <div class="main-txt">
                <h1 style="text-align: center;"><b style="color: white;"><span>R</span>EVIEWS</b></h1>
            </div>
            <div class="row" style="margin-top: 30px;">
                <div class="col-12">
                    <div class="reviews-container">
                        <?php
                        include 'connection.php';

                        $query = "SELECT * FROM rating";
                        $query_run = mysqli_query($con, $query);
                        $check_rating = mysqli_num_rows($query_run) > 0;

                        if ($check_rating) {
                            while ($row = mysqli_fetch_array($query_run)) {
                                $rate = $row['rate'];
                                ?>
                                <div class="col-md-2 mt-3 py-3 py-md-0">
                                    <div class="card" style="display: flex; justify-content: center; align-items: center;">
                                        <?php
                                        $imagePath = 'uploaded/' . $row['image'];
                                        if (file_exists($imagePath)) {
                                            echo '<img src="' . $imagePath . '" class="rounded-circle" width="100px" height="100px" style="margin-top:10px;" alt="review Image">';
                                        } else {
                                            echo "Image not found at: " . $imagePath;
                                        }
                                        ?>
                                        <div class="card-body">
                                            <h6 class="card-title" style="text-align:center;"><?php echo $row['name']; ?></h6>
                                            <h6 class="card-title" style="text-align:center;">
                                                <?php
                                                $start=1;
                                                while($start<=5)
                                                {
                                                        if ($row['rate'] < $start) 
                                                        {
                                                        ?>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                        <?php
                                                        }else{
                                                        ?>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <?php
                                                        }
                                                $start++;
                                                }
                                                ?>
                                            </h6>
                                            <p class="card-text" style="text-align:center;"><?php echo $row['review']; ?></p>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                        } else {
                            echo "No records found";
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>