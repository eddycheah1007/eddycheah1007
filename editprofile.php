<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="../css/editprofile.css">
    <link href="../css/font.css" rel="stylesheet" type="text/css"/>
</head>

<body>
    <div class="container">

        <form action="">

            <div class="row">

                <div class="col">

                    <h3 class="title">Edit Profile</h3>

                    <div class="inputBox">
                        <span>Name :</span>
                        <input type="text" placeholder="-">
                    </div>
                    <div class="inputBox">
                        <span>Email :</span>
                        <input type="email" placeholder="-">
                    </div>
                    <div class="inputBox">
                        <span>Phone :</span>
                        <input type="text" placeholder="60**-*******">
                    </div>
                    <div class="inputBox">
                        <span>Location :</span>
                        <select id="gender" name="gender">
                            <option value="male">Penang</option>
                            <option value="male">Kuala Lumpur</option>
                            <option value="male">Selangor</option>
                            <option value="male">Putrajaya</option>
                            <option value="male">Kedah</option>
                            <option value="male">Johor</option>
                            <option value="male">Kelantan</option>
                            <option value="male">Melaka</option>
                            <option value="male">Negeri Sembilan</option>
                            <option value="male">Pahang</option>
                            <option value="male">Perak</option>
                            <option value="male">Perlis</option>
                            <option value="male">Terengganu</option>
                            <option value="male">Sabah</option>
                            <option value="male">Sarawak</option>
                        </select>
                    </div>
                    <div class="inputBox">
                        <span>Gender :</span>
                        <select id="gender" name="gender">
                            <option value="male">Male</option>
                            <option value="male">Female</option>
                        </select>
                    </div>
                    <div class="inputBox">
                        <span>Race :</span>
                        <select id="gender" name="gender">
                            <option value="male">Chinese</option>
                            <option value="male">Malay</option>
                            <option value="male">Indian</option>
                            <option value="male">Others</option>
                        </select>
                    </div>
                </div>
            </div>
            <input type="submit" value="Save" class="submit-btn">
        </form>

    </div>
</body>

</html>
