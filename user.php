<!-- <?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    // header("location: crea.php");
   
}



// include 'conetion.php';

?> -->


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Welcome </title>
</head>

<style>
table,
thead,
tr,
th,
tbody {
    border: 1px solid black;
}
</style>
</head>

<body>

    <?php 
        
        include 'nav.php';
           if(isset($_POST['submit'])){
          $conn= mysqli_connect("localhost","root","","rsmt") or  die("connect faild");
           $email=$_POST['email'];
           $password=$_POST['password'];
         
            $sql = "SELECT* FROM rajsms WHERE email='$email' AND password='$password' ";
           
   
          $result = mysqli_query($conn,$sql) or die("Query unsucessfull");
        //   echo '<pre>';
        //     print_r($result);
        //     echo '</pre>';
        //     exit;
          if(mysqli_num_rows($result)>0){
         ?>





    <table class="my-4">
        <thead>
            <tr>
                <th>firstname</th>
                <th>lastname</th>
                <th>email</th>
                <th>password</th>

            </tr>
        </thead>
        <tbody>


            <?php

            
               while($row = mysqli_fetch_assoc($result)){
                       echo"<tr>
                       <th>". $row['firstname']."</th>
                       <td>". $row['lastname']."</td>
                       <td>". $row['email']."</td>
                       <td>". $row['password']."</td>
                     
                     </tr>";      
                 }
            ?>


    </table>
    <?php  }
                mysqli_close($conn);
            }

?>

    </tbody>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>