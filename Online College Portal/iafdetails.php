<?php
include_once 'database.php';
include_once 'header.php';
$result = mysqli_query($conn,"SELECT * FROM iamarks");
?>
<!DOCTYPE html>
<html>
 <head>
 <title> Faculty Details</title>
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
    $i=0;

    if($i%2==0)
$classname="even";
else
$classname="odd";
?>
<br>
<br>
<h1><b><u>Internal Marks Details</u></b></h1>
<br>
  <table>
  <tr>
    <td><b>USN</b></td>
    <td><b>Subcode/b></td>
    <td><b>SSID</b></td>
    <td><b>Test 1</b></td>
    <td><b>Test 2</b></td>
    <td><b>Test 3</b></td>
    <td><b>Final IA</b></td>
    <td><b>Update</b></td>
    <td><b>Delete</b></td>
  </tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
    <td><?php echo $row["usn"]; ?></td>
    <td><?php echo $row["subcode"]; ?></td>
    <td><?php echo $row["ssid"]; ?></td>
    <td><?php echo $row["test1"]; ?></td>
    <td><?php echo $row["test2"]; ?></td>
    <td><?php echo $row["test3"]; ?></td>
    <td><?php echo $row["finalia"]; ?></td>
    <td><a href="iafupdate.php?usn=<?php echo $row['usn']; ?>">Update</a></td>
    <td><a href="iafdel.php?usn=<?php echo $row['usn']; ?>">Delete</a></td>
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