<?php include('navigation.php'); ?>
<?php include('connect.php'); ?>
<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" href="./css/login.css">
</head>

<body>

    <div class="main">
        <div class="wrapper text-center">
            <h1> LOGIN </h1>

            <div class="box">
                <form action="" method="POST">
                    <div class="login1">
                        <table class="login">
                            <tr>
                                <td>Username</td>
                                <td>
                                    <input type="text" name="username" placeholder="Your Username" required />
                                </td>
                            </tr>
                            <br>
                            <tr>
                                <td>Password</td>
                                <td><input type="password" name="password" placeholder="Your Password" required /></td>
                            </tr>
                            <br>
                            <tr>
                                <td colspan="2">
                                    <input type="submit" name="submit" value="Login">
                                </td>
                            </tr>
                        </table>
                    </div>
                </form>
                <div class="signup">
                    New Member?
                    <a href="Register.php">Sign Up </a>
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <?php
    if (isset($_POST['submit'])) {
        $sql = "SELECT * FROM tbl_admin WHERE username='$_POST[username]' AND password='$_POST[password]'";
        if (!mysqli_query($con, $sql)) {
            header("location:/fooddelivery/home.php");
        }
        mysqli_close($con);
    }
    ?>