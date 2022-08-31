<?php
session_start();
@include 'config\dbcon.php';

if(isset($_POST['save_user'])){
  $UserName =mysqli_real_escape_string($con,$_POST['UserName']);
  $Email = mysqli_real_escape_string($con, $_POST['Email']);
  $Password = mysqli_real_escape_string($con,$_POST['Password']);
  $CPassword = mysqli_real_escape_string($con,$_POST['CPassword']);

  $select = " SELECT * FROM users WHERE Email = '$Email'";

   $result = mysqli_query($con, $select);

   if(mysqli_num_rows($result) > 0){
    $error[] = 'user already exist!';

   }
   else{
       if($Password != $CPassword){
         $error[] = 'Password not matched!';
      }else{
         $insert = "INSERT INTO `users` (`username`, `email`, `password`) VALUES ('$UserName','$Email','$Password')";
         $query_run = mysqli_query($con, $insert);
         if($query_run){
          $_SESSION['alert'] = 'User added successfully!';
          header('location:login.php');
          exit(0);
         }
          else{
            $_SESSION['alert'] = 'User not added!';
            header('location:login.php');
            exit(0);
          }
           
         

      }
   }

}

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container mt-5">
      <?php
        if(isset($_SESSION['alert'])):
      ?>
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Hello there</strong><?= $_SESSION['alert'];?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <?php
        unset($_SESSION['alert']);
        endif;
      ?>
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h4>Add User
                <a href="" class="btn btn-danger float-end">Back</a>
              </h4>
            </div>
            <div class="card-body">
              <form action ="" method="POST">

              <div class="md-3">
                <label >Username</label>
                <input type="text" name="UserName" class="form-control">
              </div>
              <div class="md-3">
                <label >User Email</label>
                <input type="email" name="Email" class="form-control">
              </div>
              <div class="md-3">
                <label >PASSWORD</label>
                <input type="password" name="Password" class="form-control">
              </div>
              <div class="md-3">
                <label >Confirm PASSWORD</label>
                <input type="password" name="CPassword" class="form-control">
              </div
              <div class="mb-3">
                <button type="submit" name="save_user" class="btn btn-primary">Save</button>
              </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    
  
  
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
  </body>
</html>