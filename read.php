<?php
include 'db.php';
$sql="SELECT * FROM user";
$result=$conn->query($sql);
?>
<head>
    <style>
        body{
            background-color:green;
        }
        table{
            width:100%;
            border-collapse:collapse;
            background-color:yellow;
        }
        th,td{
            border:1px solid #ddd;
            padding:5px;
            text-align:left;
        }
        th{
            background-color:blue;
        }
        </style>
<h1>List of user</h1>
<table border='5'>
<tr>
<th>ID</th>
<th>Name</th>
<th>Lname</th>
<th>Email</th>
<th>Actions</th>
</tr>
<?php while($user=$result->fetch_assoc()) : ?>
    <tr>
    <td><?php echo $user['id'];?></td>
        <td><?php echo $user['name'];?></td>
            <td><?php echo $user['lname'];?></td>
                <td><?php echo $user['email'];?></td>
                <td>
                    <a href="Edit.php?id=<?php echo $user['id'];?>">Edit</a>
                    <a href="Delete.php?id=<?php echo $user['id'];?>">Delete</a>
                </tr>
                <?php endwhile;?>
                </table>
                <a href="create.php">Add New</a>
                <body>
                <?php $conn->close();?>
                

