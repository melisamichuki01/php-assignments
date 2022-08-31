<?php

@include 'config\dbcon.php';

if(isset($_POST['submit'])){
    
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
         mysqli_query($con, $insert);
        
         //header('location:login.php');
      }
   }

};


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="form-container">

        <form action="" method="post">
                <h3>Sign Up</h3>
                <?php
                if(isset($error)){
                    foreach($error as $error){
                        echo '<span class="error-msg">'.$error.'</span>';
                    };
                };
                ?>
                <input type="text" name="UserName" required placeholder="Enter your User Name">
                <input type="email" name="Email" required placeholder="Enter your email">
                <input type="password" name="Password" required placeholder="Enter your password">
                <input type="password" name="CPassword" required placeholder="Confirm your password">
                <input type="submit" name="submit" value="register now" class="form-btn">
                <p>Already have an account? <a href="login.php">login now</a></p>
            </form>

    </div>
</body>
</html>