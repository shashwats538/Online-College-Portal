<?php
require_once('config.php');
?>

<?php


 if(isset($_POST)){
    $usn = $_POST['usn'];
    $ssc = $_POST['ssc'];
    $hsc = $_POST['hsc'];
    $first = $_POST['first'];
    $second = $_POST['second'];
    $third = $_POST['third'];
    $fourth = ($_POST['fourth']);
    $fifth = ($_POST['fifth']);
    $sixth = ($_POST['sixth']);
    $seventh = ($_POST['seventh']);
    $eighth = ($_POST['eighth']);

    $sql="INSERT INTO academics (usn, ssc, hsc, first, second, third, fourth, fifth, sixth, seventh, eighth) VALUES (?,?,?,?,?,?,?,?,?,?,?)";
    $stmtinsert=$db->prepare($sql);
    $result= $stmtinsert->execute([$usn, $ssc, $hsc, $first, $second, $third, $fourth, $fifth, $sixth, $seventh, $eighth]);
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