<?php 
$conn=mysqli_connect("localhost","root","","ipproject") or die("connection not established with Database");
$uname=$_POST['uname'];
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

$query="select * from login where uname='$uname';";
	$run=mysqli_query($conn,$query);
    if(mysqli_num_rows($run)==0 && ($uu==1 || $up==1))
    {
    		echo '<font color="green">Username available</font><br>
    			  <font color="red">No spacebar or special character allowed</font>';
 	}
 	elseif(mysqli_num_rows($run)==0 && ($uu==0 && $up==0))
    {
    		echo '<font color="green">Username available</font>';
    			 
 	}
 	elseif(mysqli_num_rows($run)!=0 && ($uu==1 || $up==1))
    {
    		echo '<font color="red">Username not available</font><br>
    			  <font color="red">No spacebar or special character allowed</font>';
    			 
 	}
  	else{
  		echo '<font color="red">Username not available</font> ';
  	}
?>