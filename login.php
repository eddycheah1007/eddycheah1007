<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/font.css" rel="stylesheet" type="text/css"/>
    <link href="../css/login.css" rel="stylesheet" type="text/css"/>
    <title>TARUMT Circus Login Page</title>
</head>

<body>
    <div class="container" id="container">
        <div class="form-container sign-up">
            <form>
                <h1>Create Account</h1>
                </br>
                <span>or use your email for registration</span>
                <input type="text" placeholder="Name">
                <input type="email" placeholder="Email">
                <input type="password" placeholder="Password">
                <button>Sign Up</button>
            </form>
        </div>
        <div class="form-container sign-in">
            <form>
                <h1><img src="../img/circus1.png" alt="TARUMT Circus" style="width: 100%; height:auto;"></h1>
                <span>Sign in</span>
                <input type="email" placeholder="Email">
                <input type="password" placeholder="Password">
                <a href="#">Forget Your Password?</a>
                <a href="home.php"><button>Sign In</button></a>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Not first time?</h1>
                    <p>Get ready for the circus adventure!</p>
                    <button class="hidden" id="login">Sign In</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>First time here?</h1>
                    <p>Register with us!</p>
                    <button class="hidden" id="register" >Sign Up</button>
                </div>
            </div>
        </div>
    </div>


    <script src="../js/login.js"></script>
</body>
</html>
