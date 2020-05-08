<?php
require_once('config.php');
?><!DOCTYPE html>
<html>
    <head>
        <title>
            Sign Up- Academic Details
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
            <form action="signup2.php" method="POST">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-3">
                    <h3> Academic Details</h3>
                    <p>Please Fill your Academic Details
                    <hr class="nb-3">
                    <label for="usn"><b>USN</b></label>
                    <input class="form-control" type="text" id="usn" name="usn" required>

                    <label for="ssc"><b>SSC MARKS</b></label>
                    <input class="form-control" type="text" id="ssc" name="ssc" required>

                    <label for="hsc"><b>HSC MARKS</b></label>
                    <input class="form-control" type="text" id="hsc" name="hsc" required>

                    <label for="first"><b>FIRST SEMESTER CGPA</b></label>
                    <input class="form-control" type="text" id="first" name="first">

                    <label for="second"><b>SECOND SEMESTER CGPA</b></label>
                    <input class="form-control" type="text" id="second" name="second">

                    <label for="third"><b>THIRD SEMESTER CGPA</b></label>
                    <input class="form-control" type="text" id="third" name="third">

                    <label for="fourth"><b>FOURTH SEMESTER CGPA</b></label>
                    <input class="form-control" type="text" id="fourth" name="fourth">

                    <label for="fifth"><b>FIFTH SEMESTER CGPA</b></label>
                    <input class="form-control" type="text" id="fifth" name="fifth">

                    <label for="sixth"><b>SIXTH SEMESTER CGPA</b></label>
                    <input class="form-control" type="text" id="sixth" name="sixth">

                    <label for="seventh"><b>SEVENTH SEMESTER CGPA</b></label>
                    <input class="form-control" type="text" id="seventh" name="seventh">

                    <label for="eighth"><b>EIGTH SEMESTER CGPA</b></label>
                    <input class="form-control" type="text" id="eighth" name="eighth">

                    

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
            var ssc 	= $('#ssc').val();
			var hsc	= $('#hsc').val();
			var first 	= $('#first').val();
            var second 	= $('#second').val();
            var third 	= $('#third').val();
            var fourth 	= $('#fourth').val();
            var fifth 	= $('#fifth').val();
            var sixth 	= $('#sixth').val();
            var seventh 	= $('#seventh').val();
            var eighth 	= $('#eighth').val();
            
			

				e.preventDefault();	

				$.ajax({
					type: 'POST',
					url: 'process1.php',
					data: {usn : usn,ssc : ssc,hsc : hsc,first : first,second : second,third : third,fourth : fourth,fifth : fifth,sixth : sixth,seventh : seventh,eighth : eighth, },
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