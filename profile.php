    <!DOCTYPE html>
<html>
    <head>
        <title>Profile</title>


        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>

    <?php
    include 'inc/header.php';
    ?>

<div class="mr-auto ml-auto" style="max-width: 650px; margin: 50px 0px">
        <div class="panel panel-light">
      
            <div class="panel-heading bg-light">
               <span><h4>User Profile </h4></span> <span class="ml-auto"><a  class="btn btn-primary " href="index.php">Back</a></span> 
            </div>	
            <div class="panel-body">
                
        <form>
          <div class="form-row">
            <div class="form-group col-6">
              <label for="inputFirstName">First Name</label>
              <input type="text" class="form-control" id="inputFirstName" placeholder="first name" value="Faisal">
            </div>
            <div class="form-group col-6">
              <label for="inputLastName">Last Name</label>
              <input type="text" class="form-control" id="inputLastName" placeholder="last name" value="Syed">
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-6">
              <label for="inputEmail">Email</label>
              <input type="email" class="form-control" id="inputEmail" placeholder="Email" value="faimohai@gmail.com">
            </div>
            <div class="form-group col-6">
              <label for="inputPassword">Password</label>
              <input type="password" class="form-control" id="inputPassword" placeholder="Password" required="">
            </div>
          </div>
          <div class="form-group">
            <label for="inputAddress">Address</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" value="Dhaka, Bangladesh">
          </div>
          <div class="form-group">
            <label for="inputAddress2">Address 2</label>
            <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor" value="N/A">
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputCity">City</label>
              <input type="text" class="form-control" id="inputCity" value="Dhaka">
            </div>
            <div class="form-group col-md-4">
              <label for="inputState">State</label>
              <select id="inputState" class="form-control">
                <option selected>Dhaka</option>
                <option>Choose...</option>
              </select>
            </div>
            <div class="form-group col-md-2">
              <label for="inputZip">Zip</label>
              <input type="text" class="form-control" id="inputZip" value="1209">
            </div>
          </div>
          
          <button type="submit" class="btn btn-primary">Update</button>
        </form>
                </div>
            </div>

        </div>
          <?php 
          include 'inc/footer.php';
          ?>