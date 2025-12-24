<?php
session_start();
include 'db.php';
if($_SERVER['REQUEST_METHOD']=='POST'){
    $username=$_POST['username'];
    $password=$_POST['password'];
    //fetch user by username
    $sql="SELECT*FROM login WHERE username='$username'AND password='$password'";
    $result=$conn->query($sql);
    if($result->num_rows>0){
        $row=$result->fetch_assoc();
        //validate password
        if($password==$row['password']){
            header("location:read.php");
        }
        else{
            echo"invalid password";
        }
    }
}
?>
<form method="POST"action="login.php">
  username:<input type="text" name="username"><br>
   password:<input type="text" name="password"><br>
    <button type="submit">LOGIN</button>
</form>