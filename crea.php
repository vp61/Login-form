<?php
include 'conetion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  


    $firstname=$_POST["firstname"];
    $Lastname=$_POST["lastname"];
    $email=$_POST["email"]; 
    $password=$_POST["password"];
    $cpassword=$_POST["cpassword"];
    $user_type=$_POST["user_type"];

    $existsql = "SELECT * FROM rajsms where email = '$email'";
    $result = mysqli_query($conn, $existsql);
    $numExistRow = mysqli_num_rows($result);
    if($numExistRow > 0){
      $showError = "email aleready exists";
    }
    else{
    if($password == $cpassword){

      $sql="INSERT INTO rajsms(firstname,lastname,email,password,user_type) VALUES('$firstname','$Lastname','$email','$password','$user_type')";
      $result = mysqli_query($conn, $sql);
     
      if($result){
                 echo "the record has been inserted successfully <br>";
             }
             else{
                 echo "the record was not inserted successfully because of this error ---->". mysqli_error($conn);
     
             }
             
         }
        }
    }
   
    
    
    
   
    

?>


<!DOCTYPE html>

<html>

<head>
    <title>Login Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.3.1/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body,
html {
    height: 100%;
    font-family: 'Poppins', sans-serif;
}

a {
    font-size: 14px;
    line-height: 1.7;
    color: #fff;
    text-decoration: none;
    margin: 0;
    transition: all 0.4s;
}

a:focus {
    outline: none;
}

input {
    outline: none;
    border: none;
}

input::-webkit-input-placeholder {
    color: #8f8fa1;
}

.container-login100 {
    width: 100%;
    min-height: 100vh;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
    padding: 15px;
    background: url('cv.jpg');
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
    position: relative;
    z-index: 1;
}

.container-login100::before {
    content: '';
    display: block;
    position: absolute;
    z-index: -1;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    background-color: rgba(0, 0, 0, .6);
}

.wrap-login100 {
    width: 500px;
    background-color: rgba(255, 255, 255, 0.2);
    border-radius: 10px;
    position: relative;
}

.login100-form {
    width: 100%;
}

.login100-form-title {
    font-size: 25px;
    color: #403866;
    line-height: 1.2;
    text-transform: uppercase;
    text-align: center;
    width: 100%;
    display: block;
    margin-bottom: 40px;
}

.login100-form-title i {
    font-size: 50px;
    color: #fff;
    border: 1.5px solid #00b665;
    width: 100px;
    border-radius: 100%;
    height: 100px;
    line-height: 90px;
    transition: 0.5s ease-in-out;
}

.login100-form-title i:hover {
    background-color: #fff;
    color: #00b665;
    border-color: #fff;
}

.wrap-input100 {
    width: 100%;
    position: relative;
    background-color: #e6e6e6;
    border: 1px solid transparent;
    border-radius: 3px;
}

.input100 {
    color: #403866;
    line-height: 1.2;
    font-size: 16px;
    display: block;
    width: 100%;
    background-color: #f8f8f9;
    height: 52px;
    padding: 0px 20px 0px;
    border-radius: 6px;
}

.focus-input100 {
    position: absolute;
    display: block;
    width: calc(100% + 2px);
    height: calc(100% + 2px);
    top: -1px;
    left: -1px;
    pointer-events: none;
    border: 2px solid #00b665;
    border-radius: 3px;
    visibility: hidden;
    opacity: 0;
    -webkit-transition: all 0.4s;
    transition: all 0.4s;
    -webkit-transform: scaleX(1.1) scaleY(1.3);
    transform: scaleX(1.1) scaleY(1.3);
}

.input100:focus+.focus-input100 {
    visibility: visible;
    opacity: 1;
    -webkit-transform: scale(1);
    transform: scale(1);
}

.container-login100-form-btn {
    width: 100%;
    display: flex;
    flex-wrap: wrap;
}

.login100-form-btn {
    font-size: 16px;
    color: #fff;
    line-height: 1.2;
    text-transform: uppercase;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 0 20px;
    width: 100%;
    height: 52px;
    cursor: pointer;
    background-color: #00b665;
    border-radius: 6px;
    transition: all 0.4s;
    -webkit-transition: all 0.4s;
}

.login100-form-btn:hover {
    background-color: #00b665;
}

.p-t-50 {
    padding-top: 50px;
}

.p-b-90 {
    padding-bottom: 90px;
}

.p-l-50 {
    padding-left: 50px;
}

.p-r-50 {
    padding-right: 50px;
}

.m-t-17 {
    margin-top: 17px;
}

.m-b-16 {
    margin-bottom: 16px;
}

.w-full {
    width: 100%;
}

.m-auto {
    margin: auto;
}
</style>

<body>
    <?php require 'nav.php' ?>
    <div class="container-login100">
        <div class="wrap-login100 p-t-50 p-b-90 p-l-50 p-r-50">
            <form class="login100-form flex-sb flex-w" action="/CURD/pro/crea.php" method="post">
                <span class="login100-form-title">

                    <h3>Create Account</h3>
                </span>
                <div class=" wrap-input100  m-b-16">
                    <div class="">
                        <input class="input100" type="text" name="firstname" placeholder="firstname">
                        <span class="focus-input100"></span>
                    </div>

                </div>
                <div class="wrap-input100 m-b-16 ">
                    <input class="input100" type="text" name="lastname" placeholder="lastname">
                    <span class="focus-input100"></span>
                </div>
                <div class="wrap-input100 m-b-16">
                    <input class="input100" type="email" name="email" placeholder="Email">
                    <span class="focus-input100"></span>
                </div>
                <div class="wrap-input100 m-b-16">
                    <input class="input100" type="password" name="password" placeholder="Password">
                    <span class="focus-input100"></span>
                </div>
                <div class="wrap-input100 m-b-16">
                    <input class="input100" type="password" name="cpassword" placeholder="confirm Password">
                    <span class="focus-input100"></span>
                </div>
                <div>
                    <select id="inputState" class="form-select" name="user_type">
                        <option selected>user</option>
                        <option>admin</option>
                    </select>
                </div>
                <div class="container-login100-form-btn m-t-17">
                    <div class="w-full beforeNone text-center">
                        <input type="submit" class="nv-login-submit login100-form-btn" name="submit">
                    </div>
                </div>
                <div class="container-login100-form-btn m-t-17">
                    <a href="#">Forget Password?</a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>