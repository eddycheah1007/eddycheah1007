<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Food page</title>
        <link href="../css/food.css" rel="stylesheet" type="text/css"/>
        <link href="../css/home.css" rel="stylesheet" type="text/css"/>
        <link href="../css/font.css" rel="stylesheet" type="text/css"/>
        <script src="https://kit.fontawesome.com/b14f43e28b.js" crossorigin="anonymous"></script>
        
    </head>
    
    <body>
        <?php
            include'header.php';
        ?>
            
        <div class="container">

            <div id="root">

                <div class="box">
                    <div class="img-box">
                        <img class='images' src=../img/set1.jpeg.jpg></img>
                    </div>
                    <div class="bottom">
                        <p>Crispy Chicky Popcorn e-Combo 1</p>
                        <h2>RM 16.00</h2>
                        <button onclick='addtocart("+(i++)+")'>Add to Cart</button>
                    </div>
                </div>

                <div class="box">
                    <div class="img-box">
                        <img class='images' src=../img/set2.jpeg.jpg></img>
                    </div>
                    <div class="bottom">
                        <p>Crispy Chicky Popcorn e-Combo 2</p>
                        <h2>RM 16.00</h2>
                        <button onclick='addtocart("+(i++)+")'>Add to Cart</button>
                    </div>
                </div>

                <div class="box">
                    <div class="img-box">
                        <img class='images' src=../img/set3.jpeg.jpg></img>
                    </div>
                    <div class="bottom">
                        <p>Regular e-Combo 1</p>
                        <h2>RM 14.00</h2>
                        <button onclick='addtocart("+(i++)+")'>Add to Cart</button>
                    </div>
                </div>

                <div class="box">
                    <div class="img-box">
                        <img class='images' src=../img/set4.jpeg.jpg></img>
                    </div>
                    <div class="bottom">
                        <p>Regular e-Combo 2</p>
                        <h2>RM 14.00</h2>
                        <button onclick='addtocart("+(i++)+")'>Add to Cart</button>
                    </div>
                </div>

                <div class="box">
                    <div class="img-box">
                        <img class='images' src=../img/set5.jpeg.jpg></img>
                    </div>
                    <div class="bottom">
                        <p>Sea Salt Regular e-Combo 1</p>
                        <h2>RM 14.00</h2>
                        <button onclick='addtocart("+(i++)+")'>Add to Cart</button>
                    </div>
                </div>

                <div class="box">
                    <div class="img-box">
                        <img class='images' src=../img/set6.jpeg.jpg></img>
                    </div>
                    <div class="bottom">
                        <p>Sea Salt Regular e-Combo 2</p>
                        <h2>RM 14.00</h2>
                        <button onclick='addtocart("+(i++)+")'>Add to Cart</button>
                    </div>
                </div>

                <div class="box">
                    <div class="img-box">
                        <img class='images' src=../img/food1.jpeg></img>
                    </div>
                    <div class="bottom">
                        <p>Mix Regular e-Combo 1</p>
                        <h2>RM 14.00</h2>
                        <button onclick='addtocart("+(i++)+")'>Add to Cart</button>
                    </div>
                </div>

                <div class="box">
                    <div class="img-box">
                        <img class='images' src=../img/food2.jpeg></img>
                    </div>
                    <div class="bottom">
                        <p>BBQ Chicky Drums e-Combo 1</p>
                        <h2>RM 18.00</h2>
                        <button onclick='addtocart("+(i++)+")'>Add to Cart</button>
                    </div>
                </div>

                <div class="box">
                    <div class="img-box">
                        <img class='images' src=../img/food3.jpeg></img>
                    </div>
                    <div class="bottom">
                        <p>BBQ Chicky Drums e-Combo 2</p>
                        <h2>RM 18.00</h2>
                        <button onclick='addtocart("+(i++)+")'>Add to Cart</button>
                    </div>
                </div> 

                <div class="box">
                    <div class="img-box">
                        <img class='images' src=../img/food4.jpeg></img>
                    </div>
                    <div class="bottom">
                        <p>Chicken Hotdog e-Combo 1</p>
                        <h2>RM 14.00</h2>
                        <button onclick='addtocart("+(i++)+")'>Add to Cart</button>
                    </div>
                </div>

                <div class="box">
                    <div class="img-box">
                        <img class='images' src=../img/food5.jpeg></img>
                    </div>
                    <div class="bottom">
                        <p>Cocktail Sausage e-Combo 1</p>
                        <h2>RM 14.00</h2>
                        <button onclick='addtocart("+(i++)+")'>Add to Cart</button>
                    </div>
                </div>

                <div class="box">
                    <div class="img-box">
                        <img class='images' src=../img/food6.jpeg></img>
                    </div>
                    <div class="bottom">
                        <p>Cocktail Sausage e-Combo 2</p>
                        <h2>RM 14.00</h2>
                        <button onclick='addtocart("+(i++)+")'>Add to Cart</button>
                    </div>
                </div>
            </div>




        </div>
        <footer class="footer">
            <hr>
            <div class="footer-words">
                <p>Copyright © 2024 TARUMT Circus, WE ARE FAMILY</p>
            </div>
        </footer>
        
        <?php
            include'footer.php';
        ?>
        
        <script type="text/javascript">
       //scroll
       window.addEventListener("scroll", function () {
                var header = document.querySelector("header");
                header.classList.toggle('sticky', window.scrollY > 0);
            });

            //side bar
            var menu = document.querySelector('.menu');
            var menuBtn = document.querySelector('.menu-btn');
            var closeBtn = document.querySelector('.close-btn');

            menuBtn.addEventListener("click", () => {
                menu.classList.add('active');
            });

            closeBtn.addEventListener("click", () => {
                menu.classList.remove('active');
            });
        </script>   


    </body>
</html>
