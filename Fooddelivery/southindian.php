<?php include('Navigation.php'); ?>
<?php include('connect.php'); ?>

<html>

<head>
    <title>South Indian</title>
    <link rel="stylesheet" href="./css/southindian.css">
</head>

<body>
    <div class="main">
        <div class="text-center">
            <div class="wrapper text-center">
                <form action="manage.php" method="POST">
                    <div class="box4 text-center">
                        <img src="images/idli.jpeg" alt="idli" class="img-responsive img-curve">
                        Idli
                        <br>
                        Rs 90
                        <br><br>
                        <button type="submit" name="ADD">ADD</button>
                        <input type="hidden" name="foodname" value="idli">
                        <input type="hidden" name="price" value="90">
                    </div>
                </form>
                <form action="manage.php" method="POST">
                    <div class="box4 text-center">
                        <img src="images/Dosa.jpeg" alt="dosa" class="img-responsive img-curve">
                        Masala Dosa
                        <br>
                        Rs 120
                        <br><br>
                        <button type="submit" name="ADD">ADD</button>
                        <input type="hidden" name="foodname" value="dosa">
                        <input type="hidden" name="price" value="120">
                    </div>
                </form>
                <form action="manage.php" method="POST">
                    <div class="box4 text-center">
                        <img src="images/Upma.jpeg" alt="Upma" class="img-responsive img-curve">
                        Upma
                        <br>
                        Rs 70
                        <br><br>
                        <button type="submit" name="ADD">ADD</button>
                        <input type="hidden" name="foodname" value="upma">
                        <input type="hidden" name="price" value="70">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="clear"></div>
</body>

</html>