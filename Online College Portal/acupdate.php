<?php
include_once 'database.php';
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE academics set usn='" . $_POST['usn'] . "', ssc='" . $_POST['ssc'] . "', hsc='" . $_POST['hsc'] . "', first='" . $_POST['first'] . "' ,second='" . $_POST['second'] . "',third='" . $_POST['third'] . "',fourth='" . $_POST['fourth'] . "',fifth='" . $_POST['fifth'] . "',sixth='" . $_POST['sixth'] . "',seventh='" . $_POST['seventh'] . "',eighth='" . $_POST['eighth'] . "' WHERE usn='" . $_POST['usn'] . "'");

echo '<script type="text/javascript">alert("Details Updated Successfully")</script>';
echo '<script type="text/javascript">window.location.href = "acdetails.php";</script>';

}
$result = mysqli_query($conn,"SELECT * FROM academics WHERE usn='" . $_GET['usn'] . "'");
$row= mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            Update Student's Academics Details
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
           
            <form action="" method="POST">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-3">
                    <h3>Update Student's Details</h3>
                    <hr class="nb-3">
                    <label for="usn"><b>USN</b></label>
                    <input class="form-control" type="text" id="usn" name="usn" value="<?php echo $row['usn']?>" required>

                    <label for="ssc"><b>SSC Marks</b></label>
                    <input class="form-control" type="text" id="ssc" name="ssc" value="<?php echo $row['ssc']?>" required>

                    <label for="hsc"><b>HSC Marks</b></label>
                    <input class="form-control" type="text" id="hsc" name="hsc" value="<?php echo $row['hsc']?>" required>

                    <label for="first"><b>FIRST SEMESTER CGPA</b></label>
                    <input class="form-control" type="text" id="first" name="first" value="<?php echo $row['first']?>" >

                    <label for="second"><b>SECOND SEMESTER CGPA</b></label>
                    <input class="form-control" type="text" id="second" name="second" value="<?php echo $row['second']?>" >

                    <label for="third"><b>THIRD SEMESTER CGPA</b></label>
                    <input class="form-control" type=text  id="third" name= "third" value="<?php echo $row['third']?>" >

                    <label for="fourth"><b>FOURTH SEMESTER CGPA</b></label>
                    <input class="form-control" type="text"  id="fourth" name= "fourth" value="<?php echo $row['fourth']?>" >

                    <label for="fifth"><b>FIFTH SEMESTER CGPA</b></label>
                    <input class="form-control" type="text" id="fifth" name="fifth" value="<?php echo $row['fifth']?>" >

                    <label for="sixth"><b>SIXTH SEMESTER CGPA</b></label>
                    <input class="form-control" type="text" id="sixth" name="sixth" value="<?php echo $row['sixth']?>" >

                    <label for="seventh"><b>SEVENTH SEMESTER CGPA</b></label>
                    <input class="form-control" type="text" id="seventh" name="fiftseventhh" value="<?php echo $row['seventh']?>" >

                    <label for="eighth"><b>EIGHTH SEMESTER CGPA</b></label>
                    <input class="form-control" type="text" id="eighth" name="eighth" value="<?php echo $row['eighth']?>" >
                    <hr class="nb-3">


                    <input class="btn btn-primary" type="submit" name="submit" value="Update"  />
                         </div>
                </div>

                </div>
            </form>
        </div>
    </body>
</html>
<?php
include_once 'footer.php';
?>
