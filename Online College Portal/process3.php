<?php
require_once('config.php');
?>

<?php


 if(isset($_POST)){
    $id = $_POST['id'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $designation = $_POST['designation'];
    $qualification = $_POST['qualification'];
    $branchid = $_POST['branchid'];
    $contactno = ($_POST['contactno']);
    $email = ($_POST['email']);

    $sql="INSERT INTO faculty (id, firstname, lastname, designation, qualification, branchid, contactno, email) VALUES (?,?,?,?,?,?,?,?)";
    $stmtinsert=$db->prepare($sql);
    $result= $stmtinsert->execute([$id, $firstname, $lastname, $designation, $qualification, $branchid, $contactno, $email]);
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