<?php
session_start();
require '../db/conn.php';

$username = $_POST['username'];
$password = $_POST['password'];

$sqlLogin = "SELECT * FROM tb_user WHERE username = '$username' AND password = '$password'";
$result = mysqli_query($conn, $sqlLogin);

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $_SESSION['login'] = true;
    header("Location: ../views/V_Dashboard.php");
} else {
    echo '<script>alert("login gagal")</script>';
    header("Location: ../index.php");
}
