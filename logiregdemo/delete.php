<?php
@include 'config\dbcon.php';
if(isset($_GET['id'])){
    $id = $_GET['id'];

    $delete = "DELETE FROM users WHERE id = $id";
    $result =mysqli_query($con, $delete);

    if($result) {
        //echo"Deleted Successfully";
        header('location:index.php');
    }else{
        echo"An error occurred";
        header('location:index.php');
        die();
    }
}
?>
