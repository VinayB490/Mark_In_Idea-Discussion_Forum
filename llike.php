<?php
session_start(); 
$conn=mysqli_connect("localhost","root","","ipproject") or die("connection not established with Database");
$uname=$_SESSION['Username'];
$auname=$_POST['uname'];
$auactid=$_POST['uactid'];
// $uname='vinay';
// $auname='vinay';
// $auactid=3;
$s="select * from query where uname='$auname' and uactid='$auactid';";
$r=mysqli_query($conn,$s);
$w=mysqli_fetch_assoc($r);
$tlike=$w['llike'];
$d=1;
echo $tlike." <br>";
$select1="select * from tlike where actuname='$auname' and actid='$auactid' and uname='$uname' ;"; 
$run1=mysqli_query($conn,$select1);
    if(mysqli_num_rows($run1)!=0){
    	$row1=mysqli_fetch_assoc($run1);
    	if ($row1['llike']==0 && $row1['dlike']==1){
      		$l=1;
      		$dd=0;
      		$query="update tlike set llike='$l', dlike='$dd' where actuname='$auname' and actid='$auactid' and uname='$uname' ;";
      		$run=mysqli_query($conn,$query);
      		$tlike=$w['llike']+$d;
      		$tplike=$w['dlike']-$d;
      		echo $tlike." <br>";
      		$query2="update query set llike='$tlike',dlike='$tplike' where uname='$auname' and uactid='$auactid';";
      		$run2=mysqli_query($conn,$query2);
      		if($run2){
      		echo "updted";
      		}else{
      			echo "err";
      		}
      	}else if ($row1['llike']==0){
      		$l=1;
      		$query="update tlike set llike='$l' where actuname='$auname' and actid='$auactid' and uname='$uname' ;";
      		$run=mysqli_query($conn,$query);
      		$tlike=$w['llike']+$d;
      		echo $tlike." <br>";
      		$query2="update query set llike='$tlike' where uname='$auname' and uactid='$auactid';";
      		$run2=mysqli_query($conn,$query2);
      		if($run2){
      		echo "updted";
      		}else{
      			echo "err";
      		}
      	}else{
      		$l=0;
      		$query="update tlike set llike='$l' where actuname='$auname' and actid='$auactid' and uname='$uname' ;";
      		$run=mysqli_query($conn,$query);
      		$tlike=$w['llike']-$d;
      		echo $tlike." <br>";
      		$query2="update query set llike='$tlike' where uname='$auname' and uactid='$auactid';";
      		$run2=mysqli_query($conn,$query2);
      		if($run2){
      		echo "updated";
      		}else{
      			echo "error";
      		}
		}
    }else{
    	$l=1;
    	$dd=0;
      	$query="insert into tlike(actuname,uname,actid,llike,dlike) values('$auname','$uname','$auactid','$l','$dd');";
      	$run=mysqli_query($conn,$query);
      	$tlike=$w['llike']+$d;
      		echo $tlike." <br>";
      		$query2="update query set llike='$tlike' where uname='$auname' and uactid='$auactid';";
      		$run2=mysqli_query($conn,$query2);
      		if($run2){
      			echo "inserted";
      		}else{
      			echo "e";
      		}
    }

echo $auname."+".$auactid;


?>