<?php include('Navigation.php'); ?>
<?php include('connect.php'); ?>
<html>

<head>
    <title>Burger</title>
    <link rel="stylesheet" href="./css/burger.css">
</head>

<body>
<div class="main">
    <div class="text-center">
        <div class="wrapper text-center">
            <form action="manage.php" method="POST">
                <div class="box4 text-center">
                    <img src="images/cheeseburger.jpg" alt="cheeseBurger" class="img-responsive img-curve">
                    Cheese Burger
                    <br>Rs 46
                    <br><br>
                    <button type="submit" name="ADD">ADD</button>
                    <input type="hidden" name="foodname" value="cheeseburger">
                    <input type="hidden" name="price" value="46">
                </div>
            </form>
            <form action="manage.php" method="POST">
                <div class="box4 text-center">
                    <img src="images/doublecheeseburger.jpg" alt="doublecheeseBurger" class="img-responsive img-curve">
                    Double Cheese Burger
                    <br>Rs 102
                    <br><br>
                    <button type="submit" name="ADD">ADD</button>
                    <input type="hidden" name="foodname" value="doublecheeseburger">
                    <input type="hidden" name="price" value="102">
                </div>
            </form>
            <form action="manage.php" method="POST">
                <div class="box4 text-center">
                    <img src="images/doublequarterpounderwithcheese.jpg" alt="doublequatercheeseBurger"
                        class="img-responsive img-curve">
                    Double Quater Pounder with Cheese Burger
                    <br>Rs 162
                    <br><br>
                    <button type="submit" name="ADD">ADD</button>
                    <input type="hidden" name="foodname" value="doublequarterpoundwithcheese">
                    <input type="hidden" name="price" value="162">
                </div>
            </form>
        </div>
    </div>
</div>
<div class="clear"></div>

</body>
</html>
