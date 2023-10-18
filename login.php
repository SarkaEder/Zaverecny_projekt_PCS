<?php
/*
// Get the username and password from the login form
$username = $_POST['username'];
$password = $_POST['password'];

// Fetch the user's stored password from the database
$query = "SELECT password FROM users WHERE username = ?";
$stmt = $mysqli->prepare($query);
$stmt->bind_param("s", $username);
$stmt->execute();
$stmt->bind_result($storedPassword);
$stmt->fetch();
$stmt->close();

// Verify the password
if (password_verify($password, $storedPassword)) {
    // Passwords match; the user is authenticated
    // Perform the login action (e.g., set a session variable)
} else {
    // Incorrect username or password
    // Display an error message
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
                <h1>Přihlásit se</h1>

                <div class="input-box">
                    <input type="text" id="username" placeholder="Username" required>
                </div>

                <div class="input-box">
                    <input type="password" id="password" placeholder="Password" required>
                </div>

                <div class="remember-forgot">
                    <label><input type="checkbox" id="remember" name="remember">Zapamatovat si mě</label>
                </div>

                <button type="submit" class="submit-btn">
                Přihlásit se</button>

                <div class="register-link">
                    <p>Nemáš ještě účet? <a href="http://localhost/website_kk/register.php"> Registruj se</a></p>
                </div>
            </form>
        </div>
    </section>
    <script src="loginscript.js"></script>   
    </body>
    </html>