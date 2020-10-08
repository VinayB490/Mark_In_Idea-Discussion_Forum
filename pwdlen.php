<?php 
	$str=$_POST['pwd'];
	// $str="Hel1lo_ .hi";
	
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
	

    if(strlen($str)>4 && $u==1 && $p==1 && $n==1){
    		echo '<font color="green">Password length satisfied</font><br>
    			  <font color="green">Used atleast 1  Uppercase letter</font><br>
    			  <font color="green">Used atleast 1 Digit</font><br>
    			  <font color="green">Used atleast 1 Special character</font>';
  	}elseif (strlen($str)>4 && $u==1 && $p==1 && $n==0) {
  			echo '<font color="green">Password length satisfied</font><br>
    			  <font color="green">Used atleast 1  Uppercase letter</font><br>
    			  <font color="red">Use atleast 1 Digit</font><br>
    			  <font color="green">Used atleast 1 Special character</font>';
  	}elseif (strlen($str)>4 && $u==1 && $p==0 && $n==1) {
  			echo '<font color="green">Password length satisfied</font><br>
    			  <font color="green">Used atleast 1  Uppercase letter</font><br>
    			  <font color="green">Used atleast 1 Digit</font><br>
    			  <font color="red">Use atleast 1 Special character</font>';
  	}elseif (strlen($str)>4 && $u==1 && $p==0 && $n==0) {
  			echo '<font color="green">Password length satisfied</font><br>
    			  <font color="green">Used atleast 1  Uppercase letter</font><br>
    			  <font color="red">Use atleast 1 Digit</font><br>
    			  <font color="red">Use atleast 1 Special character</font>';//--------------------------------
  	}elseif (strlen($str)>4 && $u==0 && $p==1 && $n==1) {
  			echo '<font color="green">Password length satisfied</font><br>
    			  <font color="red">Use atleast 1  Uppercase letter</font><br>
    			  <font color="green">Used atleast 1 Digit</font><br>
    			  <font color="green">Used atleast 1 Special character</font>';
  	}elseif (strlen($str)>4 && $u==0 && $p==1 && $n==0) {
  			echo '<font color="green">Password length satisfied</font><br>
    			  <font color="red">Use atleast 1  Uppercase letter</font><br>
    			  <font color="red">Use atleast 1 Digit</font><br>
    			  <font color="green">Used atleast 1 Special character</font>';
  	}elseif (strlen($str)>4 && $u==0 && $p==0 && $n==1) {
  			echo '<font color="green">Password length satisfied</font><br>
    			  <font color="red">Use atleast 1  Uppercase letter</font><br>
    			  <font color="green">Used atleast 1 Digit</font><br>
    			  <font color="red">Use atleast 1 Special character</font>';
  	}elseif (strlen($str)>4 && $u==0 && $p==0 && $n==0) {
  			echo '<font color="green">Password length satisfied</font><br>
    			  <font color="red">Use atleast 1  Uppercase letter</font><br>
    			  <font color="red">Use atleast 1 Digit</font><br>
    			  <font color="red">Use atleast 1 Special character</font>';//--------------------------------
  	}elseif(strlen($str)<5 && $u==1 && $p==1 && $n==1){
    		echo '<font color="red">Password length minimum 5 characters</font><br>
    			  <font color="green">Used atleast 1  Uppercase letter</font><br>
    			  <font color="green">Used atleast 1 Digit</font><br>
    			  <font color="green">Used atleast 1 Special character</font>';
  	}elseif (strlen($str)<5 && $u==1 && $p==1 && $n==0) {
  			echo '<font color="red">Password length minimum 5 characters</font><br>
    			  <font color="green">Used atleast 1  Uppercase letter</font><br>
    			  <font color="red">Use atleast 1 Digit</font><br>
    			  <font color="green">Used atleast 1 Special character</font>';
  	}elseif (strlen($str)<5 && $u==1 && $p==0 && $n==1) {
  			echo '<font color="red">Password length minimum 5 characters</font><br>
    			  <font color="green">Used atleast 1  Uppercase letter</font><br>
    			  <font color="green">Used atleast 1 Digit</font><br>
    			  <font color="red">Use atleast 1 Special character</font>';
  	}elseif (strlen($str)<5 && $u==1 && $p==0 && $n==0) {
  			echo '<font color="red">Password length minimum 5 characters</font><br>
    			  <font color="green">Used atleast 1  Uppercase letter</font><br>
    			  <font color="red">Use atleast 1 Digit</font><br>
    			  <font color="red">Use atleast 1 Special character</font>';//--------------------------------
  	}elseif (strlen($str)<5 && $u==0 && $p==1 && $n==1) {
  			echo '<font color="red">Password length minimum 5 characters</font><br>
    			  <font color="red">Use atleast 1  Uppercase letter</font><br>
    			  <font color="green">Used atleast 1 Digit</font><br>
    			  <font color="green">Used atleast 1 Special character</font>';
  	}elseif (strlen($str)<5 && $u==0 && $p==1 && $n==0) {
  			echo '<font color="red">Password length minimum 5 characters</font><br>
    			  <font color="red">Use atleast 1  Uppercase letter</font><br>
    			  <font color="red">Use atleast 1 Digit</font><br>
    			  <font color="green">Used atleast 1 Special character</font>';
  	}elseif (strlen($str)<5 && $u==0 && $p==0 && $n==1) {
  			echo '<font color="red">Password length minimum 5 characters</font><br>
    			  <font color="red">Use atleast 1  Uppercase letter</font><br>
    			  <font color="green">Used atleast 1 Digit</font><br>
    			  <font color="red">Use atleast 1 Special character</font>';
  	}else{
  			echo '<font color="red">Password length minimum 5 characters</font><br>
    			  <font color="red">Use atleast 1  Uppercase letter</font><br>
    			  <font color="red">Use atleast 1 Digit</font><br>
    			  <font color="red">Use atleast 1 Special character</font>';//--------------------------------
    }
?>