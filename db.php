<?php
$host="localhost";
$user="root";
$pass="";
$db="company";
//connection
$conn=new mysqli($host,$user,$pass,$db);
if($conn->connect_error){
    die("connected:".$conn->connect_error);
}

?>