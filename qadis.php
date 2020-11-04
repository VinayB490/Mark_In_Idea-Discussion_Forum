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
	<script src="js/jquery.js">
		
</script>
</head>
<body>
	<script>
		
		function like(val1,val2){
	// console.log(val1,val2);
	var hr = new XMLHttpRequest();
    var url = "llike.php";
    var vars = "uname="+val1+"&uactid="+val2;
    hr.open("POST", url, true);
    hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    hr.send(vars); // Actually execute the request
    // document.getElementByUname(val1).innerHTML = "";
    hr.onreadystatechange = function() {
	    if(hr.readyState == 4 && hr.status == 200) {
		    var return_data = hr.responseText;
			// console.log(return_data);
			window.location.href='./qadis.php';
	    }}

	} 
	function dlike(val1,val2){
	// console.log(val1,val2);
	var hr = new XMLHttpRequest();
    var url = "dlike.php";
    var vars = "uname="+val1+"&uactid="+val2;
    hr.open("POST", url, true);
    hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    hr.send(vars); // Actually execute the request
    // document.getElementByUname(val1).innerHTML = "";
    hr.onreadystatechange = function() {
	    if(hr.readyState == 4 && hr.status == 200) {
		    var return_data = hr.responseText;
			// console.log(return_data);
			window.location.href='./qadis.php';
	    }}

	} 
	</script>
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
			        <a class="nav-link" href="newpost.php">Ask Query?</a>
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
	<form method="GET" action="">
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
	    				<div class="container" >
	    					<div class="row">
		                      <div class="col-lg-12 Question a" style="color: black"><b>
								QUESTION From:<div style="text-align: right;"><?php echo ' @',$row['uname'],'  ',$row['timestp'],''; ?></div>
								<br>
			                       <?php echo $row['blk']; ?><br><br>
									
		                       	  Tags:	<?php echo $row['tag']; ?></b><br>

<br>
		                  <!-- <hr color=black border="1px">     	   -->
      <input type="button" name="btnlk" class="btn btn-primary" id="btnlk" uname="<?php echo $row['uname'].$row['uactid']; ?>" uactid="<?php echo $row['uactid']; ?>" value="LIKE<?php echo ' ',$row['llike']; ?>" onclick='like("<?php echo $row['uname']; ?>","<?php echo $row['uactid']; ?>")'>
      &nbsp;&nbsp;
      <input type="button" name="" class="btn btn-primary" id="btndlk" uname="<?php echo $row['uname']; ?>" uactid="<?php echo $row['uactid']; ?>" value="DISLIKE<?php echo ' ',$row['dlike']; ?>" onclick='dlike("<?php echo $row['uname']; ?>","<?php echo $row['uactid']; ?>")'>&nbsp;&nbsp;
	  <a href="QandA.php?edit=<?php echo $row['uname'];?>&edit1=<?php echo $row['uactid']; ?>" class="btn btn-primary">Would you like to answer this question</a>
	    				<!-- <hr color=black border="1px">  -->
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

 <!-- <hr color=black border="1px">     	 -->
		                       	   <!-- <div style="text-align: right;"><?php echo ' @',$row['uname'],'  ',$row['timestp']; ?></div> -->
	<input type="button" name="btnlk" class="btn btn-primary" id="btnlk" uname="<?php echo $row1['uname'].$row1['uactid']; ?>" uactid="<?php echo $row1['uactid']; ?>" value="LIKE<?php echo ' ',$row1['llike']; ?>" onclick='like("<?php echo $row1['uname']; ?>","<?php echo $row1['uactid']; ?>")'>
	&nbsp;&nbsp;
	<input type="button" name="" id="btndlk" class="btn btn-primary" uname="<?php echo $row1['uname']; ?>" uactid="<?php echo $row1['uactid']; ?>" value="DISLIKE<?php echo ' ',$row1['dlike']; ?>" onclick='dlike("<?php echo $row1['uname']; ?>","<?php echo $row1['uactid']; ?>")'>                        </div> </div>
                       
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
<script src="qadis_js.js"></script>
</body>
</html>