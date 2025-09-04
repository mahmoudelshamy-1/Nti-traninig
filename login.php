<?php
session_start();
include "connect.php"; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];


    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password' LIMIT 1";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        $user = mysqli_fetch_assoc($result);
        $_SESSION["user_id"] = $user["id"];
        header("Location: index.php");    
        exit();
    } else {
        echo " بيانات الدخول غير صحيحة";
    }
}
?>

<form method="post">
    <h2>تسجيل الدخول</h2>
    اسم المستخدم: <input type="text" name="username" required><br><br>
    كلمة المرور: <input type="password" name="password" required><br><br>
    <button type="submit">دخول</button>
</form>