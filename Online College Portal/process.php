<?php
require_once('config.php');
?>

<?php


 if(isset($_POST)){
    $usn = $_POST['usn'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $semester = $_POST['semester'];
    $section = $_POST['section'];
    $branchid = $_POST['branchid'];
    $contactno = ($_POST['contactno']);
    $email = ($_POST['email']);

    $sql="INSERT INTO student (usn, firstname, lastname, semester, section, branchid, contactno, email) VALUES (?,?,?,?,?,?,?,?)";
    $stmtinsert=$db->prepare($sql);
    $result= $stmtinsert->execute([$usn, $firstname, $lastname, $semester, $section, $branchid, $contactno, $email]);
    if($result){
        echo 'Sucessfully saved';
    }
    else{
        echo 'Errors';
    }
    
}
else{
    echo 'NO DATA';
}


?>