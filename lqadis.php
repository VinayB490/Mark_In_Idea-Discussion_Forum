<!DOCTYPE html>
<?php
session_start();

$conn=mysqli_connect("localhost","root","","ipproject") or die("connection not established with Database");


?>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="qadis.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<title>Mark In Idea</title>
</head>
<body>
	<div class="fluid-container">
	<header>
	
	<!--Navbar-->
		<nav class="navbar navbar-expand-lg bg-primary navbar-dark py-3">
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
			         <a class="nav-link" href="login.html">Login<span class="sr-only"></span></a>
			      </li>
			      <li class="nav-item mr-5">
			        <a class="nav-link" href="TandC.html">FAQs</a>
			      </li>
			      <li class="nav-item dropdown mr-5">
			        <a class="nav-link dropdown-toggle" href="signup.html" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			          Signup
			        </a>
			        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
			          <a class="dropdown-item" href="login.html">Login</a>
			          <div class="dropdown-divider"></div>
			          <a class="dropdown-item" href="signup.html">Signup</a>
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
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- <div class="sidenav fluid-left">
	 <div class="search-container">
    <form action="/action_page.php">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
    </div>
  <a href="#Createnewpost">Create new post</a>
  <a href="#services">Sort By</a>
  <ul>
  	<li><a href="#Newest">Newest</a></li>
  	<li><a href="Oldest">Oldest</a></li>
  </ul>
 
</div> -->



<div id="grad1">
	<form>
	    <div class="container main-content fluid-right">
	    	<div class="row  form-wrapper">
	    		
	    		<div class="col-lg-10 col-sm-12 col-md-10 text-white form-container container">

	    			<div class="text-center text-uppercase form-header page-header">	    				<br><br>
	    				
	    			</div>

	    			<!--New post submission-->
	    			

	    			<!-- 	<div class="form-group">
	    					
	    					<textarea name="title" class="form-control " id="title" rows="2" required>
	    						
	    					</textarea>	 
                           
	    				</div>
 --> 						<?php 
      		$select="select * from query where actuname='' and actid='0' order by timestp desc;"; 
      		$run=mysqli_query($conn,$select);
      		while ($row=mysqli_fetch_assoc($run)){
      			
      			$actuname=$row['uname'];
      			$actid=$row['uactid'];
      			?><br>
	    				<div class="container" style="border: none;">
	    					<div class="row">
		                      <div class="col-lg-12 Question a" style="color: black"><b>
								QUESTION From:<div style="text-align: right;"><?php echo ' @',$row['uname'],'  ',$row['timestp'],''; ?></div>
								<br>
			                       <?php echo $row['blk']; ?><br><br>
									
		                       	  Tags:	<?php echo $row['tag']; ?></b><br>

<br>
		                       	  
                        <button class="btn btn-primary" >LIKE <?php echo " ".$row['llike']; ?></button>&nbsp;&nbsp;<button class="btn btn-primary" >DISLIKE<?php echo " ".$row['dlike']; ?></button>
	    					<a href="login.html" class="btn btn-primary">Would you like to answer this question</a>
	    				
                        </div> </div>
  	    				</div>
	    				
	    				<?php 
      		$select1="select * from query where actuname='$actuname' and actid='$actid' order by timestp desc;"; 
      		$run1=mysqli_query($conn,$select1);
      		if($run1){
      		while ($row1=mysqli_fetch_assoc($run1)){


      			?>
	    				<div class="container">
	    					<div class="row">
		                      <div class="col-lg-12 Answer a" style="color: grey"><b>
								ANSWER From:<div style="text-align: right;"><?php echo ' @',$row1['uname'],'  ',$row1['timestp'],''; ?></div>
								<br>
		                       	
			                      <?php echo $row1['blk']; ?><br>
									
		                       	  <br></b>


		                       	   <!-- <div style="text-align: right;"><?php echo ' @',$row['uname'],'  ',$row['timestp']; ?></div> -->
		                       	   <button class="btn btn-primary" >LIKE<?php echo " ".$row1['llike']; ?></button>&nbsp;&nbsp;<button class="btn btn-primary" >DISLIKE<?php echo " ".$row1['dlike']; ?></button>
                        </div> </div>
                       
  	    				</div>
  	    				<?php
	    		}}
	    			?>
  	    					<?php
	    		}
	    			?><br>
	    		</div>
	    	</div>
	    </div>

</form>
      </div>


	</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html>