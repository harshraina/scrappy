<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Pickup</title>
<link rel="stylesheet" href="css/style2.css" />
</head>
<body>
<?php
require('db.php');
// If form submitted, insert values into the database.
if (isset($_REQUEST['name'])){
        // removes backslashes
 $name = stripslashes($_REQUEST['name']);
        //escapes special characters in a string
 $name = mysqli_real_escape_string($con,$name); 
 $email = stripslashes($_REQUEST['email']);
 $email = mysqli_real_escape_string($con,$email);

 $number = stripslashes($_REQUEST['number']);
        //escapes special characters in a string
 $number = mysqli_real_escape_string($con,$number); 
 $location = stripslashes($_REQUEST['location']);
        //escapes special characters in a string
 $location = mysqli_real_escape_string($con,$location); 
 $trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `users` (name, email, number,location, trn_date)
VALUES ('$name', '$number','$email','$location,  '$trn_date')";
        $result = mysqli_query($con,$query) ;
 
      if($result){
            echo "<div class='form'>
<h3>You are registered successfully.</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";
      }else{
           header("Location:index1.php");
        }
        }
 else{
?>
<div class="form">
<h1>Schedule your pickup </h1>
<form name="pickup" action="" method="post">
<input type="text" name="name" placeholder="Name" required />
<input type="email" name="email" placeholder="Email" required />
<input type="text" name="number" placeholder="Contact number" required />
<input type="text" name="location" placeholder="Location" required />
<input type="submit" name="submit" value="Submit" />
</form>
</div>
<?php } ?>
</body>
</html>