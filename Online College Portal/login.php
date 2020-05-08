<?php
session_start();
$conn=new mysqli("localhost","root","","finalproj");

/*$msg="USERNAME OR PASSWORD IS INCORRECT!!";*/

if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $usertype = $_POST['usertype'];

    $sql = "SELECT * FROM users WHERE  email=? AND password=? AND usertype=?";
    $stmt=$conn->prepare($sql);
    $stmt->bind_param("sss",$email,$password,$usertype);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();

    session_regenerate_id();
    $_SESSION['email'] = $row['email'];
    $_SESSION['role'] = $row['usertype'];
    session_write_close();

    if($result->num_rows==1 && $_SESSION['role']=="student"){
        header("location:student.php");
    }

    else if($result->num_rows==1 && $_SESSION['role']=="faculty"){
        header("location:faculty.php");
    }

    else if($result->num_rows==1 && $_SESSION['role']=="admin"){
        header("location: admin.php");
    }

    else{
        echo '<script type="text/javascript"> alert("incorrect username/password")</script>';
        /*$msg = "USERNAME OR PASSWORD IS INCORRECT!!";*/
        /*swal({
            title: "Good job!",
            text: "You clicked the button!",
            icon: "success",
          });*/
    }
}

?>





<html>
    <head>
        <title>
            Login
        </title>
    </head>
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
    

    <body>
            <img src="images/saitlogo.jpg" alt="logo" class="center">
            <br>
            <div class="navbar">
                        <a href="#" class="active">Home</a>
                        <a href="http://www.sambhram.org/about_us.html">About us</a>
                        <a href="http://www.sambhram.org/admissions.html">Admissions</a>
                        <a href="http://www.sambhram.org/sams_mca_overview.html">Courses</a>
                        <a href="http://www.sambhram.org/sparc.html">Placements</a>
                        <a href="http://www.sambhram.org/contact_us.html">Contact Us</a>
                        <a href="http://www.sambhram.org/" class="right">Sambhram Institutions</a>
            </div>
                  
                <div class="row"><br>
                    <div class="side">
                            <div class="loginbox">
                                    <img src="images/logo.jpg" class="avatar">
                                        <h1><u>Login Here</u></h1>
                                        <form action="<?= $_SERVER ['PHP_SELF'] ?>" method="POST" class="p-4">
                    <div class="form-group">
                        <input type="text" name="email" class="form-control form-control-lg" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control form-control-lg" placeholder="password" required>
                    </div>
                    <div class="form-group">
                        <label for="usertype">I am a: </label>
                        <input type="radio" name="usertype" value="student" class="custom-radio" required>&nbsp;Student
                        <input type="radio" name="usertype" value="faculty" class="custom-radio" required>&nbsp;Faculty
                        <input type="radio" name="usertype" value="admin" class="custom-radio" required>&nbsp;Admin
                    </div>
                    <div class="form-group">
                        <input type="submit" name="login" class="btn btn-danger btn-block">
                    </div>
                    <h5 class="text-danger text=-center  ">

                    </h5>
                    <div class="dropdown">
                    <button class="dropbtn">Signup</button>
                    <div class="dropdown-content">
                    <a href="signup4.php">Signup As Faculty</a>
                    <a href="signup1.php">Signup As Student</a>
                    </div>
                    </div>
                    <br>
                    <br>
                    <a href="comingsoon.html">Lost your password?</a><br>
                    <h5 class="text-danger text-center"></h5>
                     </form>
                            </div>
                    </div>
                
                    <div class="main">
                      <h2><u>About the Project</u></h2>
                      <div class="fakeimg">
                      </div> 
                      <p>Online College Portal (OCP) provides a simple interface for
                            maintenance of student–faculty information. It can be used by
                            educational institutes or colleges to maintain the records of
                            students easily.</p>
                      <br>
                      <h2><u>Objective of the Project</u></h2>
                      <div class="fakeimg1" ></div>
                      <p>The main objective of this system, is to reduce the consumption of
                            time during maintaining the records of college. Separate divisions
                            are providing to maintain the records of Faculties, Students,
                            Subjects and other important information. Our System also
                            provides an easy way not only to automate all functionalities of a
                            college, but also to provide full functional reports to top
                            management of college with the finest of details about any aspect
                            of college. In other words, our portal has, following objectives:
                            Simple database is maintained. Easy operations for the operator of
                            the system. User interfaces are user friendly and attractive. It takes
                            very less time for the operator to use the system.</p>
                    </div>
                </div>

    </body>
</html>
<?php
include_once 'footer.php';
?>