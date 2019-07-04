
<!DOCTYPE html>
<html>
    <head>
        <title>Log In</title>


        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
        <?php
        include 'inc/header.php';
        ?>

<div class="mr-auto ml-auto" style="max-width: 500px; margin: 50px 0px">
            <div class="panel panel-primary ">
                <div class="panel-heading bg-light">
                    <h4>User Log In </h4>
                </div>	
                <div class="panel-body">
                    
                    <form action="" method="POST" >
                        <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required="">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required="">
                        </div>
                        <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Remember me</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    </div>
                </div>

            </div>
              <?php 
              include 'inc/footer.php';
              ?>