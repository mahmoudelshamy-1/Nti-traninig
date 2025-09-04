<?php 
session_start();
include "connect.php";

if (!isset($_SESSION["user_id"])) {
    die("يجب تسجيل الدخول أولاً.");
}
$id = $_SESSION["user_id"];
$result = mysqli_query($conn, "SELECT * FROM users WHERE id=$id");
$user = mysqli_fetch_assoc($result);

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"];
    $password = !empty($_POST["password"])
        ? password_hash($_POST["password"], PASSWORD_DEFAULT)
        : $user["password"];

    $sql = "UPDATE users SET username='$username', password='$password' WHERE id=$id";
    if (mysqli_query($conn, $sql)) {
        echo "تم تعديل البيانات.";
    } else {
        echo "خطا: " . mysqli_error($conn);
    }
}
?> 
<form method="post"> 
    اسم المستخدم: 
    <input type="text" name="username" value="<?= $user["username"] ?>" required><br> 
    كلمة المرور الجديدة (اتركها فارغة لو مش هتغيرها): 
    <input type="password" name="password"><br> 
    <button type="submit">تعديل</button> 
</form>