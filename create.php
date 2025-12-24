<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name  = $_POST['name'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];

    $sql = "INSERT INTO user (name, lname, email) VALUES ('$name', '$lname', '$email')";
    $conn->query($sql);

    header('Location: read.php');
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Add User</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: yellow;
            margin: 40px;
        }
        h1 {
            color: #333;
        }
        form {
            background-color: green;
            padding: 20px;
            border-radius: 5px;
            max-width: 300px;
            margin: auto;
        }
        button:hover {
            background-color: purple;
        }
    </style>
</head>
<body>

<form method="POST">
    <h1>Add New User</h1>
    First name: <input type="text" name="name" required><br><br>
    Last name: <input type="text" name="lname" required><br><br>
    Email: <input type="email" name="email" required><br><br>
    <button type="submit">Add</button>
</form>

</body>
</html>
