<!DOCTYPE html>  
 <html>  
      <head>  
           <title>Fashion World</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="register.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head> 
	<script type="text/javascript">  
	function validateform(){  
	var name=document.myform.first_name.value;  
	var x=document.myform.email.value;  
	var atposition=x.indexOf("@");  
	var dotposition=x.lastIndexOf(".");  
	var password=document.myform.password.value;  
	
	if (name==null || name==""){  
		alert("Name can't be blank");  
		return false;  
	}if (atposition<1 || dotposition<atposition+2 || dotposition+2>=x.length) {  
		alert("Please enter a valid e-mail address ");  
		return false;  
	}if (password.length<6){  
		alert("Password must be at least 6 characters long.");  
		return false;  
	} 
	alert("successfull registeration...");
	

}  

function ajax_post(){
    // Create our XMLHttpRequest object
    var hr = new XMLHttpRequest();
    // Create some variables we need to send to our PHP file
    var url = "my_parse_file.php";
    var fn = document.getElementById("first_name").value;
    var ln = document.getElementById("last_name").value;
    var vars = "firstname="+fn+"&lastname="+ln;
    hr.open("POST", url, true);
    // Set content type header information for sending url encoded variables in the request
    hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	// Send the data to PHP now... and wait for response to update the status div
    hr.send(vars); // Actually execute the request
    document.getElementById("status").innerHTML = "processing...";
    // Access the onreadystatechange event for the XMLHttpRequest object
    hr.onreadystatechange = function() {
	    if(hr.readyState == 4 && hr.status == 200) {
		    var return_data = hr.responseText;
			document.getElementById("status").innerHTML = return_data;
	    }
    }
    
}
	
	</script>  
      <body>  
		<img src="sale5.jpg" alt="home" width="900" height="600" align="left">
		<h1 align="center">Register</h1>  
                <br />  
                <form name="myform" method="post" class="container" >  
                     <label>Enter First Username</label>  
                     <input type="text" id="first_name" name="first_name" class="form-control" />  
                     <br /> 
					  <label>Enter last Username</label>  
                     <input type="text" id="last_name" name="last_name" class="form-control" />  
                     <br />
					<div id="demo">
					 <label>Enter Email</label> 
					<input type="text" name="email" class="form-control" required/>  
					</div>
                     <br /> 
                     <label>Enter Password</label>  
                     <input type="password" name="password" class="form-control" required/>  
                     <br />  
                     <input type="button"  name="myBtn" name="register" value="Register" class="btn btn-info" onclick="ajax_post()"  />  
                     <br />
                     <p align="center"><a href="log.php?action=login">Login</a></p>  
					 <div id="status"></div>
                </form>  
		</body>
</html>		