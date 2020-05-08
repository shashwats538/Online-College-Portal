<?php
include_once 'database.php';
include_once 'header.php';
$result = mysqli_query($conn,"SELECT * FROM academics");
?>
<!DOCTYPE html>
<html>
 <head>
 <title> Student's Academics Details</title>
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
<h1><b><u>Student's Academics Details</u></b></h1>
<br>

  <table>
  <tr>
    <td><b>USN</b></td>
    <td><b>SSC Marks</b></td>
    <td><b>HSC Marks</b></td>
    <td><b>First Sem Marks</b></td>
    <td><b>Second Sem Marks</b></td>
    <td><b>Third Sem Marks id</b></td>
    <td><b>Fourth Sem Marks</b></td>
    <td><b>Fifth Sem Marks</b></td>
    <td><b>Sixth Sem Marks</b></td>
    <td><b>Seventh Sem Marks</b></td>
    <td><b>Eighth Sem Marks</b></td>
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
    <td><?php echo $row["ssc"]; ?></td>
    <td><?php echo $row["hsc"]; ?></td>
    <td><?php echo $row["first"]; ?></td>
    <td><?php echo $row["second"]; ?></td>
    <td><?php echo $row["third"]; ?></td>
    <td><?php echo $row["fourth"]; ?></td>
    <td><?php echo $row["fifth"]; ?></td>
    <td><?php echo $row["sixth"]; ?></td>
    <td><?php echo $row["seventh"]; ?></td>
    <td><?php echo $row["eighth"]; ?></td>
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
<a href="student.php" class="previous">&laquo; Back to Dashboard</a>
<br>
<a href="logout.php" class="logout">Logout </a>
</body>
</html>
<?php
include_once 'footer.php';
?>