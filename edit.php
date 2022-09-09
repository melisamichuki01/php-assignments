<?php

@include 'config\dbcon.php';

$id = $_GET['id'];
$sql = "SELECT * FROM users WHERE id = $id";
$result=mysqli_query($con, $sql);
$row= mysqli_fetch_assoc($result);
$UserName=$row['username'];
$Email=$row['Email'];
$Password=$row['password'];

if(isset($_POST['edit_user'])){
    
   $UserName =mysqli_real_escape_string($con,$_POST['Username']);
   $Email = mysqli_real_escape_string($con, $_POST['Email']);
   $Password = mysqli_real_escape_string($con,$_POST['Password']);
   

   $update = "UPDATE users SET id= $id, username= '$UserName',Email='$Email',password='$Password' WHERE id= $id";

   $result = mysqli_query($con, $update);

   if($result){
        header('location:index.php');
   }else{
       //$error[] = 
       echo 'could not update,try again';
       header('location:edit.php');
       die();
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <div class="container mt-5">
        <?php //include('message.php'); ?>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Register
                            <a href="index.php" class="btn btn-danger float-end">Back</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="" method="POST">

                            <div class="md-3">
                                <label>Username</label>
                                <input type="text" name="Username" class="form-control"value=<?php echo $UserName;?>>
                            </div>
                            <div class="md-3">
                                <label>User Email</label>
                                <input type="email" name="Email" class="form-control"value=<?php echo $Email;?>>
                            </div>
                            <div class="md-3">
                                <label>PASSWORD</label>
                                <input type="password" name="Password" class="form-control" value=<?php echo $Password;?>>
                            </div>
                            </div <div class="mb-3">

                                <button type="submit" name="edit_user" class="btn btn-primary">Update</button>
                                
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>


</body>

</html>
