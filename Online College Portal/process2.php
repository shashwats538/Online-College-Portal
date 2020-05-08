<?php
require_once('config.php');
?>

<?php


 if(isset($_POST)){
    $email = $_POST['email'];
    $usertype = $_POST['usertype'];
    $password = $_POST['password'];

    $sql="INSERT INTO users (email,usertype,password) VALUES (?,?,?)";
    $stmtinsert=$db->prepare($sql);
    $result= $stmtinsert->execute([$email, $usertype, $password]);
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