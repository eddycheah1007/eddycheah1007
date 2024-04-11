<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href=https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css />
        <link href="../css/header.css" rel="stylesheet" type="text/css"/>
        <link href="../css/font.css" rel="stylesheet" type="text/css"/>
        <title>Header</title>
    </head>
    <body>
        <header class="header">
        <a href="home.php" class="circus">
            <img src="../img/circus1.png" alt="TARUMT Circus" id="circus1">
            <span id="circusText"><strong>TARUMT Circus</strong></span>
        </a>
        <div class="menu">
            <div class="btn">
                <i class="fas fa-times close-btn"></i>
            </div>
            <a href="home.php">Home</a>
            <a href="ticket.php">Ticket</a>
            <a href="food.php">Food</a>
            <a href="contactus.php">Contact</a>
            <a href="cart.php"><div class="cart"><i class="fa-solid fa-cart-shopping"></i><p id="count">0</p></div></a>
            <a href="profile.php"><i class="fa-solid fa-user"></i></a>
        </div>
        <div class="btn">
            <i class="fas fa-bars menu-btn"></i>
        </div>
    </header>
        
    <script type="text/javascript">
        //scroll
        window.addEventListener("scroll",function(){
            var header = document.querySelector("header");
            header.classList.toggle('sticky',window.scrollY > 0);
        });

        //side bar
        var menu = document.querySelector('.menu');
        var menuBtn = document.querySelector('.menu-btn');
        var closeBtn = document.querySelector('.close-btn');
        
        menuBtn.addEventListener("click",() => {
            menu.classList.add('active');
        });

        closeBtn.addEventListener("click",() => {
            menu.classList.remove('active');
        });
    </script>
    </body>
</html>
