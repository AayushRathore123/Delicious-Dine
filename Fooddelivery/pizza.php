<?php include('Navigation.php'); ?>
<?php include('connect.php'); ?>

<html>

<head>
    <title>Pizza</title>
    <link rel="stylesheet" href="./css/pizza.css">
</head>

<body>
<div class="main">
    <div class="text-center">
        <div class="wrapper text-center">
            <form action="manage.php" method="POST">
                <div class=" box4 text-center">
                    <img src="images/margherita.webp" alt="margerita" class="img-responsive img-curve">
                    Margerita(medium)
                    <br>
                    Rs 195
                    <br><br>
                    <button type="submit" name="ADD">ADD</button>
                    <input type="hidden" name="foodname" value="margerita">
                    <input type="hidden" name="price" value="195">
                </div>
            </form>
            <form action="manage.php" method="POST">
                <div class=" box4 text-center">
                    <img src="images/farmhouse.webp" alt="farmhouse" class="img-responsive img-curve">
                    Farmhouse(medium)
                    <br>
                    Rs 385
                    <br><br>
                    <button type="submit" name="ADD">ADD</button>
                    <input type="hidden" name="foodname" value="farmhouse">
                    <input type="hidden" name="price" value="385">
                </div>
            </form>
            <form action="manage.php" method="POST">
                <div class=" box4 text-center">
                    <img src="images/peppypaneer.webp" alt="peppypaneer" class="img-responsive img-curve">
                    Peppy Paneer(medium)
                    <br>
                    Rs 398
                    <br><br>
                    <button type="submit" name="ADD">ADD</button>
                    <input type="hidden" name="foodname" value="peppypanner">
                    <input type="hidden" name="price" value="398">
                </div>
            </form>
        </div>
    </div>
</div>
<div class="clear"></div>
</body>
</html>
