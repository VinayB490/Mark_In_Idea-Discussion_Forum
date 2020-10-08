<?php
session_start();

$conn=mysqli_connect("localhost","root","","ipproject") or die("connection not established with Database");

 if(isset($_GET['edit']))
    {
      $actuname=$_GET['edit'];
      $actid=$_GET['edit1'];
    	 
  }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="QandA.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<title>Mark In Idea</title>
</head>
<body>
	<div class="fluid-container">
	<header>
             <nav class="navbar fixed-top navbar-expand-md bg-primary navbar-dark py-3">
			  <!--Site name and Logo-->
			  <a class="navbar-brand ml-5" href="#">
   				 <img src="MIM.png" width="150" height="50" class="d-inline-block align-top mr-5" alt="LOGO">
    				
 			   </a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>

			 <div class="collapse navbar-collapse" id="navbarSupportedContent">
			    <ul class="navbar-nav ml-auto mr-2">			      
			      <li class="nav-item mr-5">
			         <a class="nav-link" href="qadis.php">Home<span class="sr-only"></span></a>
			      </li>
			      <li class="nav-item mr-5">
			        <a class="nav-link" href="TandC.html">FAQs</a>
			      </li>
			      <li class="nav-item dropdown mr-5">
			        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			          <?php echo $uname=$_SESSION['Username']; ?>
			        </a>
			        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
			          <a class="dropdown-item" href="main.php">Profile</a>
			          <div class="dropdown-divider"></div>
			          <a class="dropdown-item" href="login.html">Logout</a>
			        </div>
			      </li>

			    </ul>
			  </div>
	    </nav>
	</header>

<!-- <div class="col-md-3 col-xl-2 bd-sidebar">
	 
  <a href="#Username">Username</a>
  <a href="#MailID">Mail ID</a>
 
</div> -->

<div id="grad1">
	    <div class="container main-content">
	    	<div class="row  form-wrapper">
	    		
	    		<div class="col-lg-10 col-sm-12 col-md-10 text-white form-container container">

	    			<div class="text-center text-uppercase form-header page-header">	    				
	    				<h2><br><br><br><br></h2>
	    			</div>

	    			<!--New post submission-->
	    	<form action="" method="POST">

	    	<div class="form-group">
	    	<?php
	    		$select1="select * from query where uname='$actuname' and uactid='$actid' and actuname='' and actid='0'"; 
      			$runn=mysqli_query($conn,$select1);
      			$run1=mysqli_fetch_assoc($runn);
	    					?>
	    					<div class="form-group description">
	    					<label for="description"><b><?php echo $run1['blk'] ?>  
	    						</b> </label>
	    						<div style="text-align: right;"><?php echo ' @',$run1['uname'],'  ',$run1['timestp'],'  '; ?></div>
	    					<textarea name="blk" class="form-control" id="blk" rows="12" required="required" placeholder="Answer here" maxlength="8000" ></textarea>
	    					<div class="form-group text-center"><br>
	    					<input value="Submit" name="submit" type="submit" class="btn btn-primary">
	    				</div>	    					
	    				</div>	 
                        </div></form>		
</div>
</div>
</div>
</div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<?php
if(isset($_POST['submit'])){
  $blk=$_POST['blk'];
 	$query="insert into query(uname,blk,actuname,actid) values('$uname','$blk','$actuname','$actid');";
 
  $run=mysqli_query($conn,$query);
  if($run){

    echo "<script>alert('successful');</script>";
    echo "<script>window.location.href='./main.php';</script>"; 
  }else{
  	echo "<script>alert('TryAgain!!');</script>";
    echo "<script>window.location.href='';</script>"; 
}
}
?>
</body>
</html>