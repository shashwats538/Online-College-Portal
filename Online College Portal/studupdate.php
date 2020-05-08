<?php
include_once 'database.php';
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE student set usn='" . $_POST['usn'] . "', firstname='" . $_POST['firstname'] . "', lastname='" . $_POST['lastname'] . "', semester='" . $_POST['semester'] . "' ,section='" . $_POST['section'] . "',branchid='" . $_POST['branchid'] . "',contactno='" . $_POST['contactno'] . "',email='" . $_POST['email'] . "' WHERE usn='" . $_POST['usn'] . "'");

echo '<script type="text/javascript">alert("Details Updated Successfully")</script>';
echo '<script type="text/javascript">window.location.href = "studetails.php";</script>';

}
$result = mysqli_query($conn,"SELECT * FROM student WHERE usn='" . $_GET['usn'] . "'");
$row= mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            Update Student Details
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

                    <label for="firstname"><b>FIRST NAME</b></label>
                    <input class="form-control" type="text" id="firstname" name="firstname" value="<?php echo $row['firstname']?>" required>

                    <label for="lastname"><b>LAST NAME</b></label>
                    <input class="form-control" type="text" id="lastname" name="lastname" value="<?php echo $row['lastname']?>" required>

                    <label for="semester"><b>CURRENT SEMESTER</b></label>
                    <input class="form-control" type="text" id="semester" name="semester" value="<?php echo $row['semester']?>" required>

                    <label for="section"><b>SECTION</b></label>
                    <input class="form-control" type="text" id="section" name="section" value="<?php echo $row['section']?>" required>

                    <label for="branchid"><b>BRANCH-ID</b></label>
                    <input class="form-control" type=text  id="branchid" name= "branchid" value="<?php echo $row['branchid']?>" required>

                    <label for="contactno"><b>CONTACT NUMBER</b></label>
                    <input class="form-control" type="text"  id="contactno" name= "contactno" value="<?php echo $row['contactno']?>" required>

                    <label for="email"><b>EMAIL-ID</b></label>
                    <input class="form-control" type="email" id="email" name="email" value="<?php echo $row['email']?>" required>
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
