<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../css/admin.css" rel="stylesheet" type="text/css"/>
        <link href="../css/font.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <title>TARUMT Circus ADMIN</title>
    </head>
    <body>


        <!-- SIDEBAR -->
        <section id="sidebar">
            <a href="#" class="brand">
                <span class="text">TARUMT CIRCUS</span>
            </a>
            <ul class="side-menu top">
                <li class="active">
                    <a href="#">
                        <i class="fa-solid fa-table-columns"></i>
                        <span class="text">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa-solid fa-ticket"></i>
                        <span class="text">Ticket</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa-solid fa-chart-simple"></i>
                        <span class="text">Analytics</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa-regular fa-envelope"></i>
                        <span class="text">Message</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa-solid fa-mug-hot"></i>
                        <span class="text">Food</span>
                    </a>
                </li>
            </ul>
            <ul class="side-menu">
                <li>
                    <a href="login.php " class="logout">
                        <i class="fa-solid fa-right-from-bracket"></i>
                        <span class="text">Logout</span>
                    </a>
                </li>
            </ul>
        </section>
        <!-- SIDEBAR -->



        <!-- CONTENT -->
        <section id="content">
            <!-- NAVBAR -->
            <nav>
                <i class="fa-solid fa-bars"></i>
                <a href="#" class="nav-link">Categories</a>
                <form action="#">
                    <div class="form-input">
                        <input type="search" placeholder="Search...">
                        <button type="submit" class="search-btn"><i class="fa-solid fa-magnifying-glass"></i></button>
                    </div>
                </form>
                <a href="#" class="notification">
                    <i class="fa-solid fa-bell"></i>
                </a>
                <a href="#" class="profile">
                    <img src="../img/profile.png">
                </a>
            </nav>
            <!-- NAVBAR -->

            <!-- MAIN -->
            <main>
                <div class="head-title">
                    <div class="left">
                        <h1>Dashboard</h1>
                    </div>
                </div>
</main>




            
            <!-- MAIN -->
        </section>
        <!-- CONTENT -->

        <?php
        // put your code here
        ?>
        <script src="../js/admin.js" type="text/javascript"></script>
    </body>
</html>
