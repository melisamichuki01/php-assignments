<?php
@include 'config\dbcon.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                      <h4>User Details 
                      <a href="create_user.php" class="btn btn-primary">Create New User</a>
                      </h4>  
                    </div>
                    <div class="card-body">
                      <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Username</th>
                            <th scope="col">Email</th>
                            <th scope="col">Password</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                            $sql = "SELECT * FROM users";
                            $result = mysqli_query($con,$sql);
                            if(mysqli_num_rows($result)>0){
                              foreach($result as $row){
                                ?>
                                <tr>
                                  <td><?=$row['id']?></td>
                                  <td><?=$row['username']?></td>
                                  <td><?=$row['Email']?></td>
                                  <td><?=$row['password']?></td>
                                  <td>
                                    <a href="view.php?id=<?=$row['id']?>" class="btn btn-info">View</a>
                                    <a href="edit.php?id=<?=$row['id']?>" class="btn btn-success">Edit</a>
                                    <a href="delete.php?id=<?=$row['id']?>" class="btn btn-danger">Delete</a>
                                  </td>
                                </tr>
                                <?php
                              }
                            }
                            else{
                              echo 'No users found!';
                            }

                          ?>
                        </tbody>
                      </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>
