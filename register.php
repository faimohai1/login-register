    <!DOCTYPE html>
<html>
    <head>
        <title>Registration</title>


        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>

    <?php
    include 'inc/header.php';
    ?>

<div class="mr-auto ml-auto" style="max-width: 500px; margin: 50px 0px">
        <div class="panel panel-primary ">
            <div class="panel-heading bg-light">
                <h4>User Registration </h4>
            </div>	
            <div class="panel-body">
                
<form>
        <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputFirstName">First Name</label>
              <input type="text" class="form-control" id="inputFirstname" placeholder="first name" required="">
            </div>
            <div class="form-group col-md-6">
              <label for="inputLastname">Last Name</label>
              <input type="text" class="form-control" id="inputLastname" placeholder="last name" required="">
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputEmail">Email</label>
              <input type="email" class="form-control" id="inputEmail" placeholder="Email" required="">
            </div>
            <div class="form-group col-md-6">
              <label for="inputPassword">Password</label>
              <input type="password" class="form-control" id="inputPassword" placeholder="Password" required="">
            </div>
          </div>
          <div class="form-group">
            <label for="inputAddress">Address</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
          </div>
          
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputCity">City</label>
              <input type="text" class="form-control" id="inputCity">
            </div>
            <div class="form-group col-md-4">
              <label for="inputState">State</label>
              <select id="inputState" class="form-control">
                <option selected>Choose...</option>
                <option>...</option>
              </select>
            </div>
            <div class="form-group col-md-2">
              <label for="inputZip">Zip</label>
              <input type="text" class="form-control" id="inputZip">
            </div>
          </div>
          <div class="form-group">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="gridCheck" required="">
              <label class="form-check-label" for="exampleChec">Agree to our <a href="#">terms & conditions</a>
              </label>
            </div>
          </div>
          <button type="submit" class="btn btn-primary">Register</button>
</form>
                </div>
            </div>

        </div>
          <?php 
          include 'inc/footer.php';
          ?>