<?php

$username = $_POST['username'];
$password = $_POST['password'];
$email    = $_POST['email'];

?>

<!DOCTYPE html>
<html>
<head>
    <title>document</title>
</head>
<body>
    <h2>user data</h2>
    <p><strong>name:</strong> <?php echo $username; ?></p>
    <p><strong>email:</strong> <?php echo $email; ?></p>
    <p><strong>pass:</strong> <?php echo $password; ?></p>
</body>
</html>