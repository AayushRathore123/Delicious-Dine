<!--main-->

<?php include('navigation.php'); ?>
<html>

<head>
    <title>Home</title>
    <link rel="stylesheet" href="./css/home.css">
</head>

<body>




    <main>
        <div class="box">

            <div class="img">
                <img src="./images/pizzahome.jpg" alt="">
                <img src="./images/pavhome.jpg" alt="">
                <img src="./images/curryhome.jpg" alt="">
            </div>

        </div>
    </main>
    <section id="services" class="services">
        <h2>Services</h2>
        <div class="service">
            <div class="img">
                <img src="./images/delivery.jpg" alt="" height="300px" width=28%>

                <img src="./images/dinein.webp" alt="" height="300px" width=28%>
                <img src="./images/fresh.png" alt="" height="300px" width=28%>
            </div>
            <div class="icon">
                <h1>Home delivery</h1>
                <h1>Dine In</h1>
                <h1>Fresh Food</h1>
            </div>
        </div>

    </section>

    <section1 id="contact" class="contact">
        <div class="box">

            <img src="./images/contact.jpg" alt="">
            <div class="box1">
                <h1>Contact Us</h1><br>
                <div class="form">
                    <form action="" method="POST">
                        <div class="login1">
                            <table class="login">
                                <tr>
                                    <td>First Name</td>
                                    <td>
                                        <input type="text" name="firstname" placeholder="Enter your first name"
                                            required />
                                    </td>
                                </tr>
                                <tr>
                                    <td>last Name</td>
                                    <td>
                                        <input type="text" name="lastname" placeholder="Enter your last name"
                                            required />
                                    </td>
                                </tr>
                                <br>
                                <tr>
                                    <td>Email Address</td>
                                    <td>
                                        <input type="email" name="email" placeholder="Enter your email" required />
                                    </td>
                                </tr>
                                <tr>
                                    <td>Contact Number</td>
                                    <td>
                                        <input type="text" name="Number" placeholder="Enter your number" required />
                                    </td>
                                </tr>
                                <tr>

                                    <td>
                                        <input type="text" name="" placeholder="Type Your Message here" required />
                                    </td>
                                </tr>
                                <br>
                                <tr>
                                    <td colspan="2">
                                        <input type="submit" name="submit" value="Submit">
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section1>
</body>

</html>