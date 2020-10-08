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
	<header>
	
	<!--Navbar-->
		
<!--MAIN BODY CONTENT-->
      <div id="grad1">
	    <div class="container">
	    	<div class="row  form-wrapper ">
	    	</div>
	    </div>
	</div>
</div>
</body>
</html>



<?php
$conn=mysqli_connect("localhost","root","","ipproject") or die("connection not established with Database");


  $email=$_POST['email'];
  $uname=$_POST['username'];
  $pwd=$_POST['password'];
  $str=$pwd;
  $sa=str_split($str);
	$u=0;
	$p=0;
	$n=0;
	foreach ($sa as $i ) {
		# code...
		if(ctype_upper($i)){
			$u=1;
		}
		if(ctype_digit($i)){
			$n=1;
		}
		if(ctype_punct($i)){
			$p=1;
		}
	}
$usa=str_split($uname);
	$uu=0;
	$up=0;
	foreach ($usa as $ui ) {
		# code...
		if($ui==" "){
			$uu=1;
		}
		if(ctype_punct($ui)){
			$up=1;
		}
	}

  $cnf=$_POST['pwdcheck'];
  	$query="select * from login where email='$email';";
	$run=mysqli_query($conn,$query);
    if(mysqli_num_rows($run)!=0)
    {
    		echo "<script>alert('Email already Exist!! you have a account.');</script>";
    		echo "<script>window.location.href='./signup.html';</script>"; 
  	}
	$query="select * from login where uname='$uname';";
	$run=mysqli_query($conn,$query);
    if(mysqli_num_rows($run)!=0)
    {
    		echo "<script>alert('Username already Exist!! Select new one.');</script>";
    		echo "<script>window.location.href='./signup.html';</script>"; 
  	}
  	if(mysqli_num_rows($run)==0 && ($uu==1 || $up==1))
    {
    		echo "<script>alert('No spacebar or special character allowed in username');</script>";
    		echo "<script>window.location.href='./signup.html';</script>"; 
 	}
  	if($pwd!=$cnf){
  		echo "<script>alert('Confirm password do not match !!');</script>";
    	echo "<script>window.location.href='./signup.html';</script>";
	}
	if(strlen($str)>4 && $u==1 && $p==1 && $n==1){
    		$pwd=md5($pwd);
	$query="insert into login(email,uname,pwd) values('$email','$uname','$pwd');";
	$run1=mysqli_query($conn,$query);
    if($run1)
    {
	echo "<script>alert('successful');</script>";
	echo "<script>window.location.href='login.html';</script>";
 	}else{
 	echo "<script>alert('tryagain');</script>";
	echo "<script>window.location.href='signup.html';</script>";	
 	}
  	}elseif (strlen($str)>4 && $u==1 && $p==1 && $n==0) {
  			echo '<script>alert("Use atleast 1 Digit in Password");</script>';
  			echo "<script>window.location.href='signup.html';</script>";
  	}elseif (strlen($str)>4 && $u==1 && $p==0 && $n==1) {
    		echo '<script>alert("Use atleast 1 Special character in Password");</script>';
  			echo "<script>window.location.href='signup.html';</script>";
  	}elseif (strlen($str)>4 && $u==1 && $p==0 && $n==0) {//--------------------------------
    		echo '<script>alert("Use atleast 1 Special character and atleast 1 Digit in Password");</script>';
  			echo "<script>window.location.href='signup.html';</script>";
  	}elseif (strlen($str)>4 && $u==0 && $p==1 && $n==1) {
    		echo '<script>alert("Use atleast 1  Uppercase letter in Password");</script>';
  			echo "<script>window.location.href='signup.html';</script>";
  	}elseif (strlen($str)>4 && $u==0 && $p==1 && $n==0) {
  			echo '<script>alert("Use atleast 1 Uppercase letter and atleast 1 Digit in Password");</script>';
  			echo "<script>window.location.href='signup.html';</script>";
  	}elseif (strlen($str)>4 && $u==0 && $p==0 && $n==1) {
  			echo '<script>alert("Use atleast 1 Uppercase letter and atleast 1 Special character in Password");</script>';
  			echo "<script>window.location.href='signup.html';</script>";
  	}else{
  			echo '<script>alert("Use atleast 1 Uppercase letter<br>Use atleast 1 Digit<br>Use atleast 1 Special character");</script>';
  			echo "<script>window.location.href='signup.html';</script>";//--------------------------------
    }
	


?>