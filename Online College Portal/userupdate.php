<?php
include_once 'database.php';
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE users set id='" . $_POST['id'] . "', email='" . $_POST['email'] . "', usertype='" . $_POST['usertype'] . "'");
/*$message = "Record Modified Successfully";*/
echo '<script type="text/javascript"> alert("Details Updated Succesfully!!")</script>';
echo '<script type="text/javascript">window.location.href = "userdetails.php";</script>';
}
$result = mysqli_query($conn,"SELECT * FROM users WHERE id='" . $_GET['id'] . "'");
$row= mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            Update User Details
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
                    <h3>Update User's Details</h3>
                    <hr class="nb-3">
                    <label for="id"><b>ID</b></label>
                    <input class="form-control" type="text" id="id" name="id" value="<?php echo $row['id']?>" required>

                    <label for="email"><b>Email</b></label>
                    <input class="form-control" type="email" id="email" name="email" value="<?php echo $row['email']?>" required>

                    <label for="usertype"><b>User Type</b></label>
                    <input class="form-control" type="text" id="usertype" name="usertype" value="<?php echo $row['usertype']?>" required>
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
