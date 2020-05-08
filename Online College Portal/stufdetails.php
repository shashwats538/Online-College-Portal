<?php
include_once 'database.php';
include_once 'header.php';
$result = mysqli_query($conn,"SELECT * FROM student");
?>
<!DOCTYPE html>
<html>
 <head>
 <title> Student Details</title>
 </head>
<body>
<style>
    .previous {
  background-color: grey;
  color: aliceblue;
}

.logout {
  background-color: grey;
  color: aliceblue;
}
    table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;

}

tr:nth-child(even) {
    background-color: white;
}
tr:nth-child(odd) {
    background-color: aliceblue;
}
</style>
<?php
if (mysqli_num_rows($result) > 0) {
?>
<br>
<br>
<h1><b><u>Student Details</u></b></h1>
<br>

  <table>
  <tr>
    <td><b>USN</b></td>
    <td><b>First Name</b></td>
    <td><b>Last Name</b></td>
    <td><b>Semester</b></td>
    <td><b>Section</b></td>
    <td><b>Branch id</b></td>
    <td><b>Contact No</b></td>
    <td><b>Email</b></td>
    <td><b>Update</b></td>
    <td><b>Delete</b></td>
  </tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
    $i=0;

    if($i%2==0)
$classname="even";
else
$classname="odd";
?>
<tr>
    <td><?php echo $row["usn"]; ?></td>
    <td><?php echo $row["firstname"]; ?></td>
    <td><?php echo $row["lastname"]; ?></td>
    <td><?php echo $row["semester"]; ?></td>
    <td><?php echo $row["section"]; ?></td>
    <td><?php echo $row["branchid"]; ?></td>
    <td><?php echo $row["contactno"]; ?></td>
    <td><?php echo $row["email"]; ?></td>
    <td><a href="studfupdate.php?usn=<?php echo $row['usn']; ?>">Update</a></td>
    <td><a href="studentfdel.php?usn=<?php echo $row['usn']; ?>">Delete</a></td>
</tr>
<?php
$i++;
}
?>
</table>
 <?php
}
else{
    echo "No result found";
}
?>
<br>
<a href="faculty.php" class="previous">&laquo; Back to Dashboard</a>
<br>
<a href="logout.php" class="logout">Logout </a>
</body>
</html>
<?php
include_once 'footer.php';
?>