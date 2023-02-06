<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['ADD'])) {
        if (isset($_SESSION['cart'])) {
            $myitems = array_column($_SESSION['cart'], 'foodname');
            if (in_array($_POST['foodname'], $myitems)) {
                echo "<script>
                    alert('ITEM ALREADY ADDED');
                    window.location.href='category.php';
                    </script>";
            } else {
                $count = count($_SESSION['cart']);
                $_SESSION['cart'][$count] = array('foodname' => $_POST['foodname'], 'price' => $_POST['price'], 'qyt' => 1);
                echo "<script>
                    alert('ITEM ADDED');
                    window.location.href='category.php';
                    </script>";
            }
        } else {
            $_SESSION['cart'][0] = array('foodname' => $_POST['foodname'], 'price' => $_POST['price'], 'qyt' => 1);
            echo "<script>
                    alert('ITEM ADDED');
                    window.location.href='category.php';
                    </script>";
        }
    }
}
if (isset($_POST['remove_food'])) {
    foreach ($_SESSION['cart'] as $key => $value) {

        if ($value['foodname'] == $_POST['foodname']) {
            unset($_SESSION['cart'][$key]);
            $_SESSION['cart'] = array_values($_SESSION['cart']);
            echo "<script>
            alert('ITEM REMOVED');
            window.location.href='cart.php';
            </script>";
        }
    }
}