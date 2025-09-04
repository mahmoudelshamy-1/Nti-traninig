<?php
include "connect.php"; 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
    if (mysqli_query($conn, $sql)) {
        echo " تم التسجيل .";
    } else {
        echo "خطا " . mysqli_error($conn);
    }
}
?>

<form method="post">
    username <input type="text" name="username" required><br><br>
    password <input type="password" name="password" required><br><br>
    <button type="submit">تسجيل</button>
</form>