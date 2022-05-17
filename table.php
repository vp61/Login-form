<?php
include 'conetion.php';
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
   
    exit();
}




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
        table,thead,tr,th,tbody{
            border: 1px solid black;
        }
    </style>
</head>
<body>
<?php require 'nav.php' ?>

<?php echo $_SESSION['password'] ?>

<center>
<table class="my-4">
        <thead>
            <tr>
                <th >firstname</th>
                <th >lastname</th>
                <th >email</th>
                <th >password</th>
               
              </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM `rajsms`";
               
               $result = mysqli_query($conn, $sql);
               while($row = mysqli_fetch_assoc($result)){
                       echo"<tr>
                       <th>". $row['firstname']."</th>
                       <td>". $row['lastname']."</td>
                       <td>". $row['email']."</td>
                       <td>". $row['password']."</td>
                     
                     </tr>";
                  
               } 
            ?>
        </tbody>

    </table>
</center>
   
</body>
</html>