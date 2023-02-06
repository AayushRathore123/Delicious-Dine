<?php include('Navigation.php'); ?>
<!-- <?php include('connect.php'); ?> -->

<html>

<head>
    <title>SignUp</title>
    <link rel="stylesheet" href="./css/signup.css">
</head>

<body>
    <div class="main">
        <div class="wrapper text-center">
            <h1> SIGN UP </h1>
            <form action="" method="POST">
                <table class="login">
                    <tr>
                        <td>Full Name</td>
                        <td>
                            <input type="text" name="full_name" placeholder="Enter Your Name" required />
                        </td>
                    </tr>
                    <tr>
                        <td>Username</td>
                        <td>
                            <input type="text" name="username" placeholder="Your Username" required />
                        </td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><input type="password" name="password" placeholder="Your Password" required /></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="submit" name="submit" value="SignUp">
                        </td>
                    </tr>
                </table>
            </form>
            <div class="login">
                Already an User?
                <a href="login.php">Login </a>
            </div>

            <div class="clear"></div>
        </div>
    </div>
</body>

</html>
<?php
if (isset($_POST['submit'])) {
    $sql = "INSERT INTO id_admin (id,full_name,username,password)
        VALUES
        ('','$_POST[full_name]','$_POST[username]','$_POST[password]')";
    echo "New Account Register ";
    header("location:/fooddelivery/home.php");
    if (!mysqli_query($con, $sql)) {
    }
    mysqli_close($con);
}