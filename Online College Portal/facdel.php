<?php
// Your database info
$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'finalproj';

if (!isset($_GET['id']))
{
    echo 'No id was given...';
    exit;
}

$con = new mysqli($db_host, $db_user, $db_pass, $db_name);
if ($con->connect_error)
{
    die('Connect Error (' . $con->connect_errno . ') ' . $con->connect_error);
}

$sql = "DELETE FROM faculty WHERE id = ?";
if (!$result = $con->prepare($sql))
{
    die('Query failed: (' . $con->errno . ') ' . $con->error);
}

if (!$result->bind_param('i', $_GET['id']))
{
    die('Binding parameters failed: (' . $result->errno . ') ' . $result->error);
}

if (!$result->execute())
{
    die('Execute failed: (' . $result->errno . ') ' . $result->error);
}

if ($result->affected_rows > 0)
{
echo '<script type="text/javascript"> alert("Details Updated Succesfully!!")</script>';
echo '<script type="text/javascript">window.location.href = "facultydetails.php";</script>';
/*$msg="Faculty Details Updated."; 
echo '<meta http-equiv="refresh" content="0;facultydetails.php?msg='.$msg.'" />';*/
}
else
{
    echo "Couldn't delete the ID.";
}
$result->close();
$con->close();
?>
<?php
include_once 'footer.php';
?>