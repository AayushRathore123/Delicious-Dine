<?php
include('Navigation.php');
include('connect.php');
include('manage.php');
?>
<html>

<head>
    <title>Order</title>
    <link rel="stylesheet" href="./css/order.css">
</head>

<body>
    <div class="text-center">
        <div class="main">
            <div class="wrapper text-center">
                <h2> MY CART</h2>
                <table>
                    <thead class="text-center">
                        <tr>
                            <th scope="col">|__Serial No.___| </th>
                            <th scope="col">|__Food Name__| </th>
                            <th scope="col">|__Price__| </th>
                            <th scope="col">|__Quantity__|</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <?php
                        $total = 0;
                        if (isset($_SESSION['cart'])) {
                            foreach ($_SESSION['cart'] as $key => $value) {
                                $sr = $key + 1;
                                $total = $total + $value['price'];
                                echo "
                                <tr>
                                <td>$sr</td>
                                <td>$value[foodname]</td>
                                <td>$value[price]</td>
                                <td>1</td>
                                <td>
                                <form action='manage.php' method='POST'>
                                <button class='remove' name='remove_food'>REMOVE</button>
                                <input type='hidden' name='foodname' value='$value[foodname]'>
                                </form></td>
                                </tr>
                                ";
                            }
                        }
                        ?>
                    </tbody>
                </table>
                <h3>ADDRESS</h3>
                <input type='text'>
                <br><br><br>
                <h3>PAYMENT</h3>
                <input type="radio" id="cod" name="payment" value="cod">
                <label for="cod">Cash on delivery</label><br>
                <input type="radio" id="card" name="payment" value="card">
                <label for="card">card</label><br>
                <input type="radio" id="paytm" name="payment" value="paytm">
                <label for="paytm">Paytm</label>
                <br><br>
                <h4>Total:<h5><?php echo $total ?></h5>
                </h4>


                <form>
                    <button class="order">Order Now</button>
                </form>

            </div>
        </div>
    </div>
    <div class="clear"></div>