<?php
include_once 'database.php';
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE faculty set id='" . $_POST['id'] . "', firstname='" . $_POST['firstname'] . "', lastname='" . $_POST['lastname'] . "', designation='" . $_POST['designation'] . "' ,qualification='" . $_POST['qualification'] . "',branchid='" . $_POST['branchid'] . "',contactno='" . $_POST['contactno'] . "',email='" . $_POST['email'] . "' WHERE id='" . $_POST['id'] . "'");
/*$message = "Record Modified Successfully";*/
echo '<script type="text/javascript"> alert("Details Updated Succesfully!!")</script>';
echo '<script type="text/javascript">window.location.href = "facultydetails.php";</script>';
}
$result = mysqli_query($conn,"SELECT * FROM faculty WHERE id='" . $_GET['id'] . "'");
$row= mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            Update Faculty Details
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
                    <label for="id"><b>ID</b></label>
                    <input class="form-control" type="text" id="id" name="id" value="<?php echo $row['id']?>" required>

                    <label for="firstname"><b>FIRST NAME</b></label>
                    <input class="form-control" type="text" id="firstname" name="firstname" value="<?php echo $row['firstname']?>" required>

                    <label for="lastname"><b>LAST NAME</b></label>
                    <input class="form-control" type="text" id="lastname" name="lastname" value="<?php echo $row['lastname']?>" required>

                    <label for="designation"><b>DESIGNATION</b></label>
                    <input class="form-control" type="text" id="designation" name="designation" value="<?php echo $row['designation']?>" required>

                    <label for="qualification"><b>QUALIFICATION</b></label>
                    <input class="form-control" type="text" id="qualification" name="qualification" value="<?php echo $row['qualification']?>" required>

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
