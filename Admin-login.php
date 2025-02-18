<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style1.css">
</head>
<body>

    <?php
    include 'connection.php';
    ?>

    <div class="container">
        <div class="head">

            <div class="col-md-4 offset-md-4 form login-form">

            <form action="Admin-login.php" method="POST" >
            <h2 class="text-center" style="color: white;">Admin Login</h2>
                    <p class="text-center" style="color: white;">Login with your username and password.</p>
                    <div class="form-group">

                    <label for="exampleInputEmail1">Username</label>
                    <input type="text" name="uname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter user">
                    </div>
            <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" name="pwd" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
    <div class="link forget-pass text-left"><a href="forget_pass.php">Forgot password?</a></div>
 
    <button  class="form-control button" type="submit" name="submit" class="btn btn-primary">Submit</button>
            </form>                      
            </div>
        </div>
    </div>

    <?php
    if(isset($_POST['submit']))
    {
        $user=$_POST['uname'];
        $pwd=$_POST['pwd'];
        $query="Select * from admin where uname ='$user' and pwd='$pwd' ";
        $run=mysqli_query($con, $query);
        $row=mysqli_num_rows($run);
        if($row==1)
        {
            $_SESSION['login Successfully']=1;
            echo "<script>alert('Logged in');</script>";
            header("Location: Admin_bar.php");
            die();

        }
        else{
            echo "<script>alert('wrong id password');</script>";
        }
      
    }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>