<?php
include('../config/constants.php'); 

if (isset($_POST['submit'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $raw_password = md5($_POST['password']); 

    $sql = "SELECT * FROM tbl_admin WHERE username='$username' AND password='$raw_password'";
    $res = mysqli_query($conn, $sql);

    if ($res && mysqli_num_rows($res) == 1) {
        $_SESSION['login'] = "<div class='success'>Login Successful.</div>";
        $_SESSION['user'] = $username;
        header('location:' . SITEURL . 'admin/index.php');
        exit();
    } else {
        $_SESSION['login'] = "<div class='error text-center'>Username or Password did not match.</div>";
        header('location:' . SITEURL . 'admin/login.php');
        exit();
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Food Order System</title>
    <link rel="stylesheet" href="../css/admin.css">
</head>
<body>
    <div class="login">
        <h1 class="text-center">Login</h1>
        <br><br>

        <?php 
        if (isset($_SESSION['login'])) {
            echo $_SESSION['login'];
            unset($_SESSION['login']);
        }

        if (isset($_SESSION['no-login-message'])) {
            echo $_SESSION['no-login-message'];
            unset($_SESSION['no-login-message']);
        }
        ?>
        <br><br>

        <!-- Login Form Starts Here -->
        <form action=""  method="POST" class="text-center">
            Username: <br>
            <input type="text" name="username" placeholder="Enter Username" required><br><br>

            Password: <br>
            <input type="password" name="password" placeholder="Enter Password" required><br><br>

            <input type="submit" name="submit" value="Login" class="btn-primary">
            <br><br>
        </form>
        <!-- Login Form Ends Here -->

        <p class="text-center">Created By - <a href="https://mohamedsharshar.netlify.app/">Mohamed SharShar</a></p>
    </div>
</body>
</html>
