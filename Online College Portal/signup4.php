<?php
require_once('config.php');
?>

<!DOCTYPE html>
<html>
    <head>
        <title>
            Sign Up-Faculty Details
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
            <form action="signup4.php" method="POST">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-3">
                    <h3> FACULTY SIGNUP</h3>
                    <p>Please Fill your Details
                    <hr class="nb-3">
                    <label for="id"><b>Faculty ID</b></label>
                    <input class="form-control" type="text" id="id" name="id" required>

                    <label for="firstname"><b>FIRST NAME</b></label>
                    <input class="form-control" type="text" id="firstname" name="firstname" required>

                    <label for="lastname"><b>LAST NAME</b></label>
                    <input class="form-control" type="text" id="lastname" name="lastname" required>

                    <label for="designation"><b>DESIGNATION</b></label>
                    <input class="form-control" type="text" id="designation" name="designation" required>

                    <label for="qualification"><b>QUALIFICATION</b></label>
                    <input class="form-control" type="text" id="qualification" name="qualification" required>

                    <label for="branchid"><b>BRANCH-ID</b></label>
                    <input class="form-control" type=text  id="branchid" name= "branchid" required>

                    <label for="contactno"><b>CONTACT NUMBER</b></label>
                    <input class="form-control" type="text"  id="contactno" name= "contactno" required>

                    <label for="email"><b>EMAIL-ID</b></label>
                    <input class="form-control" type="email" id="email" name="email" required>
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

            var id 	    = $('#id').val();
            var firstname 	= $('#firstname').val();
			var lastname	= $('#lastname').val();
			var designation 	= $('#designation').val();
			var qualification     = $('#qualification').val();
            var branchid 	= $('#branchid').val();
            var contactno 	= $('#contactno').val();
            var email 	    = $('#email').val();
            
			

				e.preventDefault();	

				$.ajax({
					type: 'POST',
					url: 'process3.php',
					data: {id : id, firstname: firstname,lastname: lastname,designation: designation,qualification: qualification,branchid: branchid,contactno:contactno, email:email },
                    success: function(data){
					Swal.fire({
								'title': 'Successful',
								'text': data,
								'type': 'success'
								}).then(ok=> {
   if (ok) {
    window.location.href = "signup3.php";
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