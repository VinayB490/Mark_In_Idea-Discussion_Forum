$(document).ready(function(){
		
		if($('#pwdcheck').val().length<=4)
		{
			$('#messa').html('Password length minimum 5 characters').css('color','red');
		}
		else
		{
			$('#messa').html('Password length satisfied').css('color','green');
		}
		
		if($('#password').val().length<=4)
		{
			$('#mlength').html('Password length minimum 5 characters').css('color','red');
		}
		else
		{
			$('#mlength').html('Password length satisfied').css('color','green');
		}
	
});