<?php
/*
$servername = "localhost";
$username = "root";
$database = "katerinakloz_db";

// connection to the database
$mysqli = new mysqli($servername, $username, $password, $database);

// Check the connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
*/

?>

<!Doctype html>
<html lang="cs-cz">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--GOOGLE FONTS-->
    <link rel="stylesheet" href="loginstyle.css" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;400;600;900&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!--BOOTSTRAP-->
    <link
        href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Poppins:wght@100;200;400;600;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>Kateřina Klozová</title>
    </head>
    <body>
    <section class="header">
    <!--HORIZONTÁLNÍ MENU-->

        <nav>
            <a href="index.html"><img src="#" alt="logo"></a>
            <div class="nav-links" id="navLinks">
                <!--HORIZONTÁLNÍ MENU ODKAZYY-->
                <i class="fa fa-times" onclick="hideMenu()"></i>
                <!--BOOTSTRAP - křížek (ikona) v menu při zobrazení v mobilní verzi-->
                <ul>
                    <li><a href="index.html">DOMŮ</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
            <!--BOOTSTRAP - burger menu (ikona)-->
        </nav>

        <div class="page">
         <form action="">
         <h1>Registruj se</h1>
            <div class="input-box">
                <input type="text" id="username" placeholder="Username" required>
            </div>
            <div class="input-box">
                <input type="email" id="email" placeholder="Email" required>
            </div>
            <div class="input-box">
                <input type="password" id="password" placeholder="Password" required>
            </div>

            <button type="button" class="submit-btn" id="register-btn">
                Registrovat
            </button>

            <div class="register-link">
                <p>Máš už účet? <a href="http://localhost/website_kk/login.php"> Přihlas se</a></p>

            </div>
         </form>
        </div>
    </section>  

    <script src="registerscript.js"></script>    

    </body>


    </html>