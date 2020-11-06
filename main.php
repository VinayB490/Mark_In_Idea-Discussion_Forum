<?php
session_start();

$conn=mysqli_connect("localhost","root","","ipproject") or die("connection not established with Database");


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="main.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<title>Homepage</title>
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
			         <a class="nav-link" href="qadis.php">Home<span class="sr-only"></span></a>
			      </li>
			      <li class="nav-item mr-5">
			        <a class="nav-link" href="search.php">Search</a>
			      </li>
			      <li class="nav-item mr-5">
			        <a class="nav-link" href="TandC.html">FAQs</a>
			      </li>
			      <li class="nav-item dropdown mr-5">
			        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			          <?php echo $uname=$_SESSION['Username']; ?>
			        </a>
			        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
			          <a class="dropdown-item" href="main.php">My Profile</a>
			          <div class="dropdown-divider"></div>
			          <a class="dropdown-item" href="login.html">Logout</a>
			        </div>
			      </li>

			    </ul>
			  </div>
	    </nav>
	</header>


<!-- SIDE NAV  -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- 
<div class="sidenav">
	 <div class="search-container">
    <form action="/action_page.php">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
    </div>
  <a href="newpost.php">Create new post</a>
  <a href="#services">Sort By</a>
  <ul>
  	<li><a href="#Newest">Newest</a></li>
  	<li><a href="Oldest">Oldest</a></li>
  </ul>
 
</div> -->




<!--MAIN BODY CONTENT-->

     <div id="grad1">
     	<div class="text-center text-uppercase form-header page-header" style="text-decoration-color: white;">	<br><br>    				
	    				<h4><b>Your Activity</b></h4>
	    			</div>
	    <div class="fluid-container row main-content justify-content-center" >
	    	
	    	<!--Center body content-->
	    	<div class="col-lg-6 col-md-8 col-12 ">	    		
	    		
	    		<div class="col-lg-12 col-12">
	    			<div class="text-white row info-header ">
	    				<div class="col-8 col-lg-8 ">Topic</div>	    				
	    				<div class="col-2 col-lg-2 ">Tags</div>
	    				<div class="col-2 col-lg-2 ">Likes</div>
	    			</div>

	    	<!--Individual post content-->
	    	 <?php 
      		$select="select * from query where uname='$uname' order by timestp desc;"; 
      		$run=mysqli_query($conn,$select);
      		while ($row=mysqli_fetch_assoc($run)){
      			?>
	    			<div class="text-black row bg-light ">
	    				<div class="col-8 col-lg-8 title border border-dark font-weight-bold"style="font-size: 15px;"><br>
	    					
	    					<?php echo $row['blk']; ?>
	    					<!-- <script type="text/javascript">
	    						console.log("<?php echo $row['blk']; ?>");</script> -->
	    					<div class="text-muted mt-5"style="text-align: right;">
	    						<?php echo $row['timestp']; ?>
	    					</div>
	    				</div>	    				
	    				<div class="col-2 col-lg-2 border border-dark outer">
	    				<span class="inner"><?php echo $row['tag']; ?></span>
	    				</div>
	    				<div class="col-2 col-lg-2 border border-dark outer">
	    				<span class="inner"><?php echo $row['llike']; ?></span>
	    				</div>
	    			</div>
	    			<?php
	    		}
	    			?>
	    	<!--This part gets repeated based on post data-->

				</div>
	    	
	    	</div>
	    
	    </div>
      </div>




	</div>





	<!--Bootstrap components-->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html>