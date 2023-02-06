<?php include('Navigation.php');
include('connect.php');
?>
<html>

<head>
    <title>momo</title>
    <link rel="stylesheet" href="./css/momo.css">
</head>

<body>
    <div class="main">
        <div class="text-center">
            <div class="wrapper text-center">
                <form action="manage.php" method="POST">
                    <div class="box4 text-center">
                        <img src="images/menu-momo.jpg" alt="steamed momo" class="img-responsive img-curve">
                        Steamed Momo(10 pcs.)
                        <br>Rs 90
                        <br><br>
                        <button type="submit" name="ADD">ADD</button>
                        <input type="hidden" name="foodname" value="Steamedmomo">
                        <input type="hidden" name="price" value="90">
                    </div>
                </form>
                <form action="manage.php" method="POST">
                    <div class="box4 text-center">
                        <img src="images/TandooriMomos.jpg" alt="tandoorimomos" class="img-responsive img-curve "
                            height=420px>
                        Tandoori Momos(8 pcs.)
                        <br>Rs 140
                        <br><br>
                        <button type="submit" name="ADD">ADD</button>
                        <input type="hidden" name="foodname" value="tandoorimomo">
                        <input type="hidden" name="price" value="140">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="clear"></div>
</body>

</html>