<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" type="text/css" href="signup.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

  <title>Signup</title>
  <script src="js/jquery.js">
</script>
</head>
<body>
  <div class="fluid-container">
 

<!--MAIN BODY CONTENT-->
      <div id="grad1">
      <div class="container">
        <div class="row  form-wrapper ">
          <div class="col-lg-10 col-sm-12 col-md-10 text-white form-container container"></div>
        </div>
      </div>
  </div>
</div>
</body>
</html>



<?php
$conn=mysqli_connect("localhost","root","","ipproject") or die("connection not established with Database");

session_start();
$_SESSION['Username']='';

  $uname=$_POST['username'];
  $pwd=$_POST['password'];
  $pwd=md5($pwd);
	$query="select * from login where uname='$uname';";
	$run=mysqli_query($conn,$query);
  $run1=mysqli_fetch_assoc($run);
    if($run1['pwd']==$pwd)
    {
    		echo "<script>window.location.href='./qadis.php';</script>"; 

    $_SESSION['Username']=$uname;
  	}
  	else{
 	echo "<script>alert('Username or Password Invalid tryagain');</script>";
	echo "<script>window.location.href='login.html';</script>";	
 	}


?>