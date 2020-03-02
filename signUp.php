<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>VMIS</title>
  <link rel="stylesheet" href="signup.css" />
  <link
    href="https://fonts.googleapis.com/css?family=Acme|Archivo+Narrow|Righteous|Source+Serif+Pro|Varela+Round&display=swap"
    rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Alef&display=swap" rel="stylesheet">
  <link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/glacial-indifference" type="text/css" />
  <script src="https://kit.fontawesome.com/2b9385dd69.js" crossorigin="anonymous"></script>
</head>

<body>
  <div class="container">
    <div class="textContent">
      <div class="titleText">
        <h1>RIV-TECHCREEK VMIS</h1>
        <div class="subText">
          <h3>VISITOR MANAGEMENT INFORMATION SYSTEM</h3>
        </div>
      </div>
      <nav>
        <ul>
          <li class="links"><a href="index.html"><i class="fas fa-home"></i></a></li>
          <li class="links"><a href="signIn.html">Sign In</a></li>
          <li class="links"><a href="signUp.html" class="active">Sign Up</a></li>
          <li class="links"><a href="events.html">Events</a></li>
        </ul>
      </nav>
      
    <form action="signUp.php" method="POST">
      <label>First Name</label>
      <input type="text" name="" id="firstN" placeholder="First Name" name="firstN" />
      <label>Last Name</label>
      <input type="text" name="" id="secondN" placeholder="Last Name" name="secondN" />
      <label for="">Phone</label>
      <input type="text" placeholder="Phone" id="phone" name="phoneNo" />
      <label>Email Address</label>
      <input type="email" name="" id="email" placeholder="Email" name="email" />
      <label>Password</label>
      <input type="password" name="" id="pass" placeholder="password" name="password" />
      <button type="submit" class="register">Register</button>
    </form>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
  <script type="text/javascript">
	$(function(){
		$('#register').click(function(e){

			var valid = this.form.checkValidity();

			if(valid){


			var firstname 	= $('#firstname').val();
			var lastname	= $('#lastname').val();
			var email 		= $('#email').val();
			var phonenumber = $('#phonenumber').val();
			var password 	= $('#password').val();
			

				e.preventDefault();	

				$.ajax({
					type: 'POST',
					url: 'process.php',
					data: {firstname: firstname,lastname: lastname,email: email,phonenumber: phonenumber,password: password},
					success: function(data){
					Swal.fire({
								'title': 'Successful',
								'text': data,
								'type': 'success'
								})
							
					},
					error: function(data){
						Swal.fire({
								'title': 'Errors',
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