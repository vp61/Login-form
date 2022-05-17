<?php
include 'conetion.php';
$login = false;
$showError = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email=$_POST["email"]; 
    $password=$_POST["password"];
      $sql="Select * from rajsms where email='$email' AND password='$password'";
	//   echo '<pre>';
	//   print_r($sql);
	//   echo '</pre>';
	//   exit;
      $result = mysqli_query($conn, $sql);
	  $row=mysqli_fetch_array($result);
	//   $num = mysqli_num_rows($result);

	  if($row["user_type"]=="user")
	  {
		header("location: user.php");
		//   echo "user";
		
	  }
	  elseif($row["user_type"]=="admin"){
		//   echo "admin";
		  header("location: wlcm.php"); 
	  }
	  else{
		  echo "email or password incorrect ";
	  }
	//   if($num == 1){
	// 		$login = true;
	// 		session_start();
	// 		$_SESSION['loggedin'] = true;
	// 		$_SESSION['email'] = $email;
	// 		$_SESSION['password'] = $password;
	// 		header("location: wlcm.php");
	//   }
	//   else{
	// 	  $showError = "invalid credentials";
	//   }
      

		}
   


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>login</title>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.3.1/css/all.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	
	<style type="text/css">
		body{
			margin: 0;
			padding: 0;
			font-family: sans-serif;
			 background:url('img/ab.jpg');
             background-repeat: none;
             background-attachment: fixed;
             background-size: 1400px;
             
        
		}
		.box{
			width: 300px;
			padding: 40px;
			position: absolute;
			top: 20%;
			left: 35%;
			
		   background-color: rgba(38, 218, 188, 0.5);
			text-align: center;
			border-radius: 15px;
            
		}
		.head h1{
			color: #000;
			text-transform: uppercase;
            opacity: 1;
		}
		 input[type="email"],.box input[type="password"]{
			background: none;
			display: block;
			margin: 20px auto;
			text-align: center;
			border: 2px solid blue;
			padding: 14px 10px;
			width: 200px ;
			outline: none;
            color: white;
            border-radius: 25px;
            transition: 0.25s;
		}
		 input[type="email"]:hover,.box input[type="password"]:hover{
			width: 280px;
			border-color: green;

		}
		 input[type=submit]{
			background: none;
			display: block;
			margin: 20px auto;
			text-align: center;
			border: 2px solid blue;
			padding: 14px 10px;
			width: 100px ;
			outline: none;
            color: white;
            border-radius: 25px;
            transition: 0.25s;

		}
		input[type="submit"]:hover{
			background: rgb(27, 129, 49);
		}
			
	</style>
</head>
<body>
<?php require 'nav.php' ?>
<?php
if($login){
	echo'<div class="alert alert-success alert-dismissible fade show" role="alert">
	<strong>Success!</strong> You are logged in.
	<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
}
if($showError){
	echo'<div class="alert alert-warning alert-dismissible fade show" role="alert">
	<strong>Error!</strong> '. $showError.';
	<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
}

?>
    <div class="box">
   <form action="/CURD/pro/login.php" method="post">
       <div class="head">
   	<h1>Login</h1>
</div>
   	<input type="email" name="email" placeholder="email" id="username">
   	<input type="password" name="password"placeholder="password" id="password">
   	<input type="submit" name="submit"value="Login">
       <a href="#">Create Account</a>
   </form>
</div>
</body>
</html>