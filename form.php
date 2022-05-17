<?php
include 'conetion.php';

if($_SERVER["REQUEST_METHOD"] == "POST"){
  

  $firstname=$_POST["firstname"];
  $lastname=$_POST["lastname"];
  $email=$_POST["email"];
  $password=$_POST["password"];
  $phone_no=$_POST["phone_no"];
  $address=$_POST["address"];
  $city=$_POST["city"];
  $state=$_POST["state"];
  $zip=$_POST["zip"];

  $sql="INSERT INTO vishal(firstname,lastname,email,password,address,city,state,zip) VALUES('$firstname','$lastname','$email','$password','$phone_no','$address','$city','$state',' $zip')";
  $result = mysqli_query($conn, $sql);
 
  if($result){
             echo "the record has been inserted successfully <br>";
         }
         else{
             echo "the record was not inserted successfully because of this error ---->". mysqli_error($conn);
 
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>form!</title>
    <style>
        body{
            background:url('.jpg');
            background-size: cover;
        }
        .container{
            border: 2px solid black;
            width: 60%;
            background-color: rgba(26, 207, 198, 0.4);
        }
    </style>
  </head>
  <body>
 <div class="container my-4">
    <form class="row g-3" action="/CURD/pro/form.php" method="post">
        <div class="col-md-6">
          <label for="inputEmail4" class="form-label">firstname</label>
          <input type="text" class="form-control" name="firstname" id="inputEmail4">
        </div>
        <div class="col-md-6">
          <label for="inputPassword4" class="form-label">lastname</label>
          <input type="text" class="form-control" name="lastname" id="inputPassword4">
        </div>
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" id="inputEmail4">
          </div>
          <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" id="inputPassword4">
          </div>
        <div class="col-6">
          <label for="inputAddress" class="form-label">phone_no</label>
          <input type="number" class="form-control" id="inputAddress" name="phone_no" >
        </div>
        <div class="col-6">
          <label for="inputAddress" class="form-label">address</label>
          <input type="text" class="form-control" id="inputAddress" name="address" placeholder="1234 Main St">
        </div>
       
        <div class="col-md-6">
          <label for="inputCity" class="form-label">City</label>
          <input type="text" class="form-control" name="city" id="inputCity">
        </div>
        <div class="col-md-4">
        <label for="inputCity" class="form-label">state</label>
          <input type="text" class="form-control" name="state" id="inputCity">
        </div>
        <div class="col-md-2">
          <label for="inputZip" class="form-label">Zip</label>
          <input type="text" class="form-control" name="zip" id="inputZip">
        </div>
        <div class="col-12">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">
              Check me out
            </label>
          </div>
        </div>
        <div class="col-12">
          <button type="submit" class="btn btn-primary" name="submit">Sign in</button>
        </div>
      </form>
 </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>