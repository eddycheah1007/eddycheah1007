<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <link href="../css/ticket.css" rel="stylesheet" type="text/css"/>
        <link href="../css/font.css" rel="stylesheet" type="text/css"/>
        <script src="https://kit.fontawesome.com/b14f43e28b.js" crossorigin="anonymous"></script>
        <title>Ticket</title>
    </head>
<body>
    <?php
        include'header.php';
    ?>
    <section class="ticket" id="ticket">
        <div class="container">
            <div class="main-text">
                <h1>Ticket</h1>
            </div>
            <div class="row" style="margin-top: 30px;">
                <div class="col-md-4 py-3 py-md-0">
                    <div class="card">
                        <img src="../img/magicShows.jpg">
                        <div class="card-body">
                            <h3>Magic Shows</h3>
                            <p>Magicians perform illusions, sleight of hand,
                                and other magic tricks to dazzle and mystify the audience.
                            </p>
                            <div class="star">
                                <i class="fa-solid fa-star" style="color: yellow;"></i>
                                <i class="fa-solid fa-star" style="color: yellow;"></i>
                                <i class="fa-solid fa-star" style="color: yellow;"></i>
                                <i class="fa-solid fa-star" style="color: yellow;"></i>
                                <i class="fa-solid fa-star" style="color: yellow;"></i>
                            </div>
                            <h6>Date: <strong>6/May/2024</strong></h6>
                            <h6>Time: <strong>6:00 pm</strong></h6>
                            <h6>Price: <strong>RM 80.00 per person</strong></h6>
                            <a href="">Add to Cart</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 py-3 py-md-0">
                    <div class="card">
                        <img src="../img/t7.jpg">
                        <div class="card-body">
                            <h3>Fire Performances</h3>
                            <p>Fire breathers, fire jugglers, and other fire 
                                performers showcase their skills with flames in a 
                                controlled environment.
                            </p>
                            <div class="star">
                                <i class="fa-solid fa-star" style="color: yellow;"></i>
                                <i class="fa-solid fa-star" style="color: yellow;"></i>
                                <i class="fa-solid fa-star" style="color: yellow;"></i>
                                <i class="fa-solid fa-star" style="color: yellow;"></i>
                                <i class="fa-solid fa-star" style="color: yellow;"></i>
                            </div>
                            <h6>Date: <strong>6/May/2024</strong></h6>
                            <h6>Time: <strong>8:00 pm</strong></h6>
                            <h6>Price: <strong>Rm 90.00</strong></h6>
                            <a href="">Add to Cart</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 py-3 py-md-0">
                    <div class="card">
                        <img src="../img/t5.jpg">
                        <div class="card-body">
                            <h3>Circus Acts</h3>
                            <p> Traditional circus acts such as human cannonballs, 
                                sword swallowers, and knife throwers may also be featured,
                                depending on the circus.                           
                            </p>
                            <div class="star">
                                <i class="fa-solid fa-star" style="color: yellow;"></i>
                                <i class="fa-solid fa-star" style="color: yellow;"></i>
                                <i class="fa-solid fa-star" style="color: yellow;"></i>
                                <i class="fa-solid fa-star" style="color: yellow;"></i>
                                <i class="fa-solid fa-star" style="color: yellow;"></i>
                            </div>
                            <h6>Date: <strong>6/May/2024</strong></h6>
                            <h6>Time: <strong>10:00 pm</strong></h6>
                            <h6>Price: <strong>RM 100.00</strong></h6>                           
                            <a href="">Add to Cart</a>
                        </div>
                   
                    </div> 
                </div>
            </div>
        </div>
       </section>
    <!--event picture -->
       <h2 class="sub-tittle">Event Picture</h2>
        <div class="trending">
            
            <div>
                <img src="../img/t5.jpg"width="300" height="200">
                
            </div>
            <div>
                <img src="../img/t1.jpg"width="300" height="200">
                
            </div>
            
            <div>
                <img src="../img/t2.jpg"width="300" height="200">
                
            </div>
            <div>
                <img src="../img/t3.jpg"width="300" height="200">
                
            </div>
            
            <div>
                <img src="../img/t4.jpg"width="300" height="200">
               
            </div>
        </div>        
</section>
   <?php
        include'footer.php';
   ?>
       
    
       
</body>
</html>
