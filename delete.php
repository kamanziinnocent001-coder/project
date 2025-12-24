<?php
include 'db.php';
if(isset($_GET['id'])){
    $sid=$_GET['id'];
    $sql="DELETE FROM user WHERE id=$sid";
    if($conn->query($sql)==TRUE){
        header("location:read.php");
    }
    else{
        echo"error".$conn->error;
    }
}
?>