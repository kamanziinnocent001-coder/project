<?php
include 'db.php';
if($_SERVER['REQUEST_METHOD']==TRUE){
    $id=$_POST['id'];
     $name  = $_POST['name'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $sql="UPDATE user SET name='$name',lname='$lname',email='$email'WHERE id=$id";
    if($conn->query($sql)==TRUE){
        echo"update";
        header("location:read.php");
    }
    else{
        echo"No update available".$conn->error;
    }
}
$id=$_GET['id'];
$sql="SELECT*FROM user WHERE id=$id";
$result=$conn->query($sql);
$row=$result->fetch_assoc();
?>
<form method="POST"action="edit.php">
     <h1>Add New User</h1>
    <input type="hidden" name="id"value="<?php echo $row['id'];?>"><br><br>
     <input type="text" name="name"value="<?php echo $row['name'];?>"><br><br>
      <input type="text" name="lname"value="<?php echo $row['lname'];?>"><br><br>
    <input type="email" name="email"value="<?php echo $row['email'];?>>"><br><br>
    <button type="submit">Update user</button>
</form>
<a href="logout.php">logout</a>
