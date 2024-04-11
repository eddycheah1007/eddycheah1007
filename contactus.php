<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="../css/font.css" rel="stylesheet" type="text/css"/>
    <link href="../css/contactus.css" rel="stylesheet" type="text/css"/>
    <script src="https://kit.fontawesome.com/b14f43e28b.js" crossorigin="anonymous"></script>
    <title>Contact Form</title>
  </head>
  <body>
      <?php 
        include'header.php';
    ?>
    <div class="container">
      <span class="big-circle"></span>
      <div class="form">
        <div class="contact-info">
          <h3 class="title">TARUMT CIRCUS</h3>
          <p class="text">
            Feel free to contact us for more info!!!
          </p>

          <div class="info">
            <div class="information">
              <a href="https://maps.app.goo.gl/bCktSMNjM9qKjHyRA"><img src="../img/location.png" class="icon" alt="" /></a>
              <p>77, Lorong Lembah Permai 3, 11200 Tanjung Bungah, Pulau Pinang</p>
            </div>
            <div class="information">
              <a href="https://mail.google.com/"><img src="../img/email.png" class="icon" alt="" /></a>
              <p>tarumtcircus@gmail.com</p>
            </div>
            <div class="information">
              <a href="https://web.whatsapp.com/"><img src="../img/phone.png" class="icon" alt="" /></a>
              <p>016-4567171</p>
            </div>
          </div>

          <div class="social-media">
            <p>Connect with us :</p>
            <div class="social-icons">
              <a href="https://www.facebook.com/">
                <i class="fa-brands fa-facebook-f"></i>
              </a>
              <a href="https://www.twitter.com/">
                <i class="fa-brands fa-x-twitter"></i>
              </a>
              <a href="https://www.instagram.com/">
                <i class="fa-brands fa-instagram"></i>
              </a>
              <a href="https://www.threads.net/">
                <i class="fa-brands fa-threads"></i>
              </a>
            </div>
          </div>
        </div>

        <div class="contact-form">
          <span class="circle one"></span>
          <span class="circle two"></span>

          <form action="index.html" autocomplete="off">
            <h3 class="title">Contact us</h3>
            <div class="input-container">
              <input type="text" name="name" class="input" />
              <label for="">Username</label>
              <span>Username</span>
            </div>
            <div class="input-container">
              <input type="email" name="email" class="input" />
              <label for="">Email</label>
              <span>Email</span>
            </div>
            <div class="input-container">
              <input type="tel" name="phone" class="input" />
              <label for="">Phone</label>
              <span>Phone</span>
            </div>
            <div class="input-container textarea">
              <textarea name="message" class="input"></textarea>
              <label for="">Message</label>
              <span>Message</span>
            </div>
            <input type="submit" value="Send" class="button" />
          </form>
        </div>
      </div>
    </div>
      <?php
        include'footer.php';
    ?>
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
    <script src="../javascript/contact_us.js" type="text/javascript"></script>
  </body>
</html>
