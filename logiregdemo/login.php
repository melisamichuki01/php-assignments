<?php
@include 'config\dbcon.php';
if(isset($_POST['login'])) {
    $Email = mysqli_real_escape_string($con,$_POST['Email']);
    $password = mysqli_real_escape_string($con,$_POST['password']);
    $sql = "SELECT * FROM `users` WHERE `Email` = '$Email' AND `password` = '$password'";

    $result = mysqli_query($con, $sql);

    if(mysqli_num_rows($result) > 0) {
        echo "Login Successful";
        header('location:index.php');
    } else {
        echo "Login Failed";
        header('location:login.php)
    }
}

?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4">
                <div class="card mt-5">
                    <div class="card-header">
                        <h3 class="text-center">Login</h3>
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="mb-3">
                                <label for="useremail">Email</label>
                                <input type="email" name="Email"  class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="password">Password</label>
                                <input type="password" name="password" class="form-control">
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary" value="login" name="login" >Login</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
            
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>
