<?php 
$conn=mysqli_connect("localhost","root","","ipproject") or die("connection not established with Database");
$uname=$_POST['email'];

$query="select * from login where email='$uname';";
	$run=mysqli_query($conn,$query);
    if(mysqli_num_rows($run)==0)
    {
    		echo '<font color="green"></font> ';
  	}
  	else{
  		echo '<font color="red">You have already Registered using this mail. </font> ';
  	}
?>