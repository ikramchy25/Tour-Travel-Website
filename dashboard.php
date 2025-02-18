<?php
    include 'Admin_home.php';
    include 'connection.php';
    ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="style_ah.css">

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
</head>
<body>

            <section class="home">

                <div class="main-text">
                        <h3><b>Welcome Admin</b> </h3>
                </div>

                <div id="main-content" class="container allContent-section py-4">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="card">
                                <h4 style="color:black;"><b>Total Users</b></h4>
                                <h5 style="color:black;">
                                <?php
                                    $sql="SELECT * from users";
                                    $result=$con-> query($sql);
                                    $count=0;
                                    if ($result-> num_rows > 0){
                                        while ($row=$result-> fetch_assoc()) {
                                
                                            $count=$count+1;
                                        }
                                    }
                                    echo $count;
                                ?></h5>
                            </div>
                        </div> 

                        <div class="col-sm-3">
                            <div class="card">
                                <h4 style="color:black;"><b>Total Packages</b></h4>
                                <h5 style="color:black;">
                                <?php
                                
                                $sql="SELECT * from packages";
                                $result=$con-> query($sql);
                                $count=0;
                                if ($result-> num_rows > 0){
                                    while ($row=$result-> fetch_assoc()) {
                            
                                        $count=$count+1;
                                    }
                                }
                                echo $count;
                            ?>
                            </h5>
                            </div>
                        </div>

                        </div>
                    </div>
    </section>


</body>
</html>


