
$(function(){
	$('#btnSubmit').on('click', function(e)
	{
		var username = $('#username').val(),
			pass = $('#password').val(),
			correct_user= 'admin',
			correct_pass= 'admin';
		 if (username === correct_user && pass === correct_pass)
		  {
			  e.preventDefault();				  	 
			  window.location.href = './user-info.php';
		  }
	  else
		  {
		  	e.preventDefault();
	 	 	swal("Error!", "Invalid password or username", "error");
		  }
	});

})
