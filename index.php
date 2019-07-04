<!DOCTYPE html>
<html>
    <head>
        <title>home</title>


        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>

<?php
 include 'inc/header.php';
 include 'lib/User.php';
 $user= new User();
?>

            <div class="panel panel-light">
                <div class="panel-heading">
                    <h4>User List <span class="pull-right">Welcome Faisal!</span> </h4>
                </div>	
                <div class="panel-body">
                    <table class="table">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Username</th>
                                <th scope="col">Email</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <td>
                                    <span>
                                        <a href="index.php" class="btn btn-primary" style="color: white">Edit</a>
                                    </span>
                                    <span>
                                        <a href="#" class="btn btn-danger" style="color: white">Delete</a>
                                    </span>

                                </td>

                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                                <td>        
                                    <span>
                                        <a href="index.php" class="btn btn-primary" style="color: white">Edit</a>
                                    </span>
                                    <span>
                                        <a href="#" class="btn btn-danger" style="color: white">Delete</a>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                                <td><span>
                                        <a href="index.php" class="btn btn-primary" style="color: white">Edit</a>
                                    </span>
                                    <span>
                                        <a href="#" class="btn btn-danger" style="color: white">Delete</a>
                                    </span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
              <?php 
              include 'inc/footer.php';
              ?>