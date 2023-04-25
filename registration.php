<?php 
require_once('config.php');
?>
<!doctype html>
<html>
<head>
	<title>User Registration | PHP</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
	<style>
		@import "https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css";
		body{
			background-image: url(1.jpg);
			background-size: cover;
			background-repeat: no-repeat;
		}
		.container{
			border-radius: 20px 20px 0px 0px;
			overflow: hidden;
			border-bottom: 2px solid rgb(68, 190, 0);
			font-family: impact, fantasy;
			text-align: center;
			background: none;
			outline: none;
			overflow: hidden;
			border-bottom: 1px solid rgb(90,90,0);
			color: rgb(0, 189, 189);		
		}
		.firstname{
			font-family: impact, fantasy;
			border: none;
			outline: none;
			background: none;
			font-size: 190%;
			text-decoration: none;
			text-align: center;	
	}
		input{
			margin: 0;
			padding: 6px;
			text-align: center;
			font-size: 20px;
			border-radius: 20px 90px 80px 20px;	
				
		}
		label {
			border: none;
			outline: none;
			background: none;
			font-size: 190%;
			text-decoration: none;
			text-align: center;	
				
		}
		.label:hover {
			border: none;
			outline: none;
			background: none;
			font-size: 190%;
			text-decoration: none;
			text-align: center;	
				
		}

	</style>

<div>
	<?php
	
	?>
</div>

<div>
	<form action="registration.php" method="post">
		<div class="container">
			
			<div class="row">
				<div class="col-sm-3">
			<h1>Registration</h1>
			<p>Fill up the form with correct values.</p>
			<hr class="mb-3">
			<label for="firstname"><i class="fa fa-user-circle" aria-hidden="true"><b>First name</b></i></label>
			<input class ="form-control" id="register" type="text" name="firstname" required>

			<label for="lastname"><i class="fa fa-user-circle" aria-hidden="true"><b>Last name</b></i></label>
			<input class ="form-control" id="lastname" type="text" name="lastname" required>

			<label for="email"><i class="fa fa-envelope-o" aria-hidden="true"><b>Email Address</b></i></label>
			<input class ="form-control" id="email" type="email" name="email" required>

			<label for="phonenumber"><i class="fa fa-phone" aria-hidden="true"><b>Phone Number</b></i></label>
			<input class ="form-control" id="phonenumber" type="phonenumber" name="phonenumber" required>

			<label for="password"><i class="fa fa-lock" aria-hidden="true"><b>Password</b></i></label>
			<input class ="form-control" id="password" type="password" name="password" required>
			<hr class="mb-3">   
			<input class = "btn btn-primary" type="submit" id="register" name="create" value="Sing Up">
		</div>
		</div>
	</div>
	</form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script type="text/javascript"> 
	$(function(){
		$('#register').click(function(e){

			var valid = this.form.checkValidity();

		
			if(valid) {

			var firstname   = $('#firstname').val();
			var lastname    = $('#lastname').val();
			var email       = $('#email').val();
			var phonenumber = $('#phonenumber').val();
			var password    = $('#password').val();


				e.preventDefault();

				$.ajax({
					type: 'POST',
					url: 'process.php',
					data: {firstname: firstname, lastname: lastname,email: email,phonenumber: phonenumber,password: password},
					success: function(data){
					Swal.fire({
			                 'title': 'Successfull',
			                 'text': data,
			                 'type': 'success'
		                      })
					},

					error: function(data){
						Swal.fire({
			                 'title':'Errors',
			                 'text': 'There were errors while saving the data.',
			                 'type': 'error'
		                      })
						
					}
				});

				
			}else{
				
			}

			


		});
		
	     });
    				
</script>
	</body>
	</html>