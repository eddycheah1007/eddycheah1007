<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/font.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="../css/payment.css">
    <title>Payment</title>
</head>

<body>
    <div class="container">

        <form action="">

            <div class="row">

                <div class="col">

                    <h3 class="title">billing address</h3>

                    <div class="inputBox">
                        <span>Full Name :</span>
                        <input type="text" placeholder="Enter Name">
                    </div>
                    <div class="inputBox">
                        <span>Email :</span>
                        <input type="email" placeholder="Enter Email">
                    </div>
                    <div class="inputBox">
                        <span>Address :</span>
                        <input type="text" placeholder="Enter Address">
                    </div>
                    <div class="inputBox">
                        <span>City :</span>
                        <input type="text" placeholder="Enter City">
                    </div>

                    <div class="flex">
                        <div class="inputBox">
                            <span>state :</span>
                            <input type="text" placeholder="Malaysia">
                        </div>
                        <div class="inputBox">
                            <span>zip code :</span>
                            <input type="text" placeholder="123 456">
                        </div>
                    </div>

                </div>

                <div class="col">

                    <h3 class="title">payment</h3>

                    <div class="inputBox">
                        <span>payment accepted :</span>
                        <img src="../img/card_img.png" alt="">
                    </div>
                    <div class="inputBox">
                        <span>name on card :</span>
                        <input type="text" placeholder="Enter name on card">
                    </div>
                    <div class="inputBox">
                        <span>credit card number :</span>
                        <input type="number" placeholder="1111-2222-3333-4444">
                    </div>
                    <div class="inputBox">
                        <span>exp month :</span>
                        <input type="text" placeholder="january">
                    </div>

                    <div class="flex">
                        <div class="inputBox">
                            <span>exp year :</span>
                            <input type="number" placeholder="2022">
                        </div>
                        <div class="inputBox">
                            <span>CVV :</span>
                            <input type="text" placeholder="1234">
                        </div>
                    </div>

                </div>

            </div>

            <input type="submit" value="proceed to checkout" class="submit-btn">

        </form>

    </div>
</body>

</html>
