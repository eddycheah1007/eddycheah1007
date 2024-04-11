<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Shopping Cart</title>
        <link href="../css/cart.css" rel="stylesheet" type="text/css"/>
        <link href="../css/font.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php 
        include'header.php';
    ?>
        <div class="shoppingcart">
    <div class="head">
        <p>My Cart</p>
    </div>
    <div class="cartItem">Your Cart is empty</div>
    <div class="foot">
        <h3>Total</h3>
        <h2 id="total">RM 0.00</h2>
    </div>
    <div class="pay">
        <a href="payment.php"><input type="submit" value="proceed to checkout" class="submit-btn"></a>
    </div>
    

</div>   
        <?php
        include'footer.php';
    ?>
    </body>
</html>