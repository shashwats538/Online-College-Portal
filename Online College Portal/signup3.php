<?php
require_once('config.php');
?>

<!DOCTYPE html>
<html>
    <head>
        <title>
            Sign Up- Login Credentials
        </title>
    </head>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/signup.css">

    <body>

    <img src="images/saitlogo.jpg" alt="logo" class="center">
            <br>
            <div class="navbar">
                        <a href="login.php" class="active">Home</a>
                        <a href="http://www.sambhram.org/about_us.html">About us</a>
                        <a href="http://www.sambhram.org/admissions.html">Admissions</a>
                        <a href="http://www.sambhram.org/sams_mca_overview.html">Courses</a>
                        <a href="http://www.sambhram.org/sparc.html">Placements</a>
                        <a href="http://www.sambhram.org/contact_us.html">Contact Us</a>
                        <a href="http://www.sambhram.org/" class="right">Sambhram Institutions</a>
            </div>
        
        <div class="sign">
            <form action="signup3.php" method="POST">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-3">
                    <h3> LOGIN CREDENTIALS</h3>
                    <p>Please Fill your LOGIN CREDENTIALS
                    <hr class="nb-3">
                    <label for="email"><b>EMAIL</b></label>
                    <input class="form-control" type="email" id="email" name="email" placeholder="Email" required>

                    <label for="usertype"><b>User-Type</b></label>
                    <input class="form-control" type="text" id="usertype" name="usertype" placeholder="Admin/Student/Faculty" required>

                    <label for="pswd"><b>PASSWORD</b></label>
                    <input class="form-control" type="password" id="password" name="password" placeholder="Password" required>
                    <hr class="nb-3">
                    <input class="btn btn-primary" type="submit" id="register" name="Create" value="Signup">
                         </div>
                </div>

                </div>
            </form>
            <?php
include_once 'footer.php';
?>
        </div>


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

        <script type="text/javascript">
        $(function(){
		$('#register').click(function(e){

			var valid = this.form.checkValidity();

			if(valid){

            var email 	    = $('#email').val();
            var usertype 	    = $('#usertype').val();
            var password 	    = $('#password').val();
            

            
			

				e.preventDefault();	

				$.ajax({
					type: 'POST',
					url: 'process2.php',
					data: {email: email, usertype: usertype, password: password },
                    success: function(data){
					Swal.fire({
								'title': 'Successful',
								'text': data,
								'type': 'success'
								}).then(ok=> {
   if (ok) {
    window.location.href = "login.php";
  }
});
							
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