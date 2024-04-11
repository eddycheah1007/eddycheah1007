<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/profile.css">
    <link href="../css/font.css" rel="stylesheet" type="text/css"/>
    <title>Profile</title>
</head>

<body>
    <?php 
        include'header.php';
    ?>
    <div class="container">

        <form action="">

            <div class="row">

                <div class="col">

                    <h3 class="title">Profile</h3>

                    <div class="avatar"> 
                        <img src="../img/photo.png" alt="error">
                    </div>


                    <div class="inputBox">
                        <span>Name :</span>
                        <p>-</p>
                    </div>
                    <div class="inputBox">
                        <span>Email :</span>
                        <p>-</p>
                    </div>
                    <div class="inputBox">
                        <span>Phone :</span>
                        <p>60**-*******</p>
                    </div>
                    <div class="inputBox">
                        <span>Location :</span>
                        <p>Penang</p>
                    </div>
                    <div class="inputBox">
                        <span>Gender :</span>
                        <p>Male</p>
                    </div>
                    <div class="inputBox">
                        <span>Race :</span>
                       <p>Chinese</p>
                    </div>
                </div>
            </div>
            <div class="edit">
                <a href="editprofile.php">Edit Profile</a> |
                <a href="login.php">Log Out</a>
            </div>
            
        </form>

    </div>
    <?php
        include'footer.php';
    ?>
</body>

</html>