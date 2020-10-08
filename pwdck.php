<?php 

   if(strlen($_POST['cwd'])>0){ 
   	if($_POST['pwd']==$_POST['cwd']){
    		echo '<font color="green">Password Matched</font> ';
  	}
  	else{
  		echo '<font color="red">Password not Matched</font> ';
  	}
  }
?>