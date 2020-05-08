<?php
include_once 'database.php';
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE iamarks set usn='" . $_POST['usn'] . "', subcode='" . $_POST['subcode'] . "', ssid='" . $_POST['ssid'] . "', test1='" . $_POST['test1'] . "' ,test2='" . $_POST['test2'] . "',test3='" . $_POST['test3'] . "',finalia='" . $_POST['finalia'] . "' WHERE usn='" . $_POST['usn'] . "'");

echo '<script type="text/javascript">alert("Details Updated Successfully")</script>';
echo '<script type="text/javascript">window.location.href = "iadetails.php";</script>';

}
$result = mysqli_query($conn,"SELECT * FROM iamarks WHERE usn='" . $_GET['usn'] . "'");
$row= mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            Update Internal Marks Details
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
                    <h3>Update IA Marks Details</h3>
                    <hr class="nb-3">
                    <label for="usn"><b>USN</b></label>
                    <input class="form-control" type="text" id="usn" name="usn" value="<?php echo $row['usn']?>" required>

                    <label for="subcode"><b>SUBCODE</b></label>
                    <input class="form-control" type="text" id="subcode" name="subcode" value="<?php echo $row['subcode']?>" required>

                    <label for="ssid"><b>SSID</b></label>
                    <input class="form-control" type="text" id="ssid" name="ssid" value="<?php echo $row['ssid']?>" required>

                    <label for="test1"><b>First Test</b></label>
                    <input class="form-control" type="text" id="test1" name="test1" value="<?php echo $row['test1']?>" required>

                    <label for="test2"><b>SECOND TEST</b></label>
                    <input class="form-control" type="text" id="test2" name="test2" value="<?php echo $row['test2']?>" required>

                    <label for="test3"><b>THIRD TEST</b></label>
                    <input class="form-control" type=text  id="test3" name= "test3" value="<?php echo $row['test3']?>" required>

                    <label for="finalia"><b>Final IA Marks</b></label>
                    <input class="form-control" type="text"  id="finalia" name= "finalia" value="<?php echo $row['finalia']?>" required>

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

