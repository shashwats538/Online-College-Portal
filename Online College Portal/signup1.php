<?php
require_once('config.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            Sign Up- Personal Details
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
            <form action="signup1.php" method="POST">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-3">
                    <h3> Personal Details</h3>
                    <p>Please Fill your Personal Details
                    <hr class="nb-3">
                    <label for="usn"><b>USN</b></label>
                    <input class="form-control" type="text" id="usn" name="usn" required>

                    <label for="firstname"><b>FIRST NAME</b></label>
                    <input class="form-control" type="text" id="firstname" name="firstname" required>

                    <label for="lastname"><b>LAST NAME</b></label>
                    <input class="form-control" type="text" id="lastname" name="lastname" required>

                    <label for="semester"><b>CURRENT SEMESTER</b></label>
                    <input class="form-control" type="text" id="semester" name="semester" required>

                    <label for="section"><b>SECTION</b></label>
                    <input class="form-control" type="text" id="section" name="section" required>

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

            var usn 	    = $('#usn').val();
            var firstname 	= $('#firstname').val();
			var lastname	= $('#lastname').val();
			var semester 	= $('#semester').val();
			var section     = $('#section').val();
            var branchid 	= $('#branchid').val();
            var contactno 	= $('#contactno').val();
            var email 	    = $('#email').val();
            
			

				e.preventDefault();	

				$.ajax({
					type: 'POST',
					url: 'process.php',
					data: {usn : usn, firstname: firstname,lastname: lastname,semester: semester,section: section,branchid: branchid,contactno:contactno, email:email },
					success: function(data){
					Swal.fire({
								'title': 'Successful',
								'text': data,
								'type': 'success'
								}).then(ok=> {
   if (ok) {
    window.location.href = "signup2.php";
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
