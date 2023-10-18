<!DOCTYPE html>

<html lang="cs-cz">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--GOOGLE FONTS-->
    <link rel="stylesheet" href="style.css" type="text/css">
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
        <!--HORIZONTAL MENU-->

        <nav>
            <a href="index.html"><img src="#" alt="logo"></a>
            <div class="nav-links" id="navLinks">
                <!--HORIZONTÁLNÍ MENU ODKAZYY-->
                <i class="fa fa-times" onclick="hideMenu()"></i>
                <!--BOOTSTRAP - křížek (ikona) v menu při zobrazení v mobilní verzi-->
                <ul>
                    <li><a href="logout.php" onclick="hideMenu()">DOMŮ</a></li>
                    <li><a href="#omne" onclick="hideMenu()">O MNĚ</a></li>
                    <li><a href="#kolekce" onclick="hideMenu()">KOLEKCE</a></li>
                    <li><a href="index.html" onclick="hideMenu()">ODHLÁSIT SE</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
            <!--BOOTSTRAP - burger menu (ikona)-->
        </nav>

        <div class="text-box-front-page">
            <!--Main page text-->
            <h1>Kateřina Klozová</h1>
            <p>Česká oděvní designérka</p>
        </div>
    </section>
    <!----------------SECTION O MĚ------------>
    <section class="omne-sekce" id="omne">
        <h2>O mně</h2>
        <div class="about-layout">
            <div class="about-img">
                <img src="assets/kacka.png" alt="fotka Kateřiny Klozové">
            </div>
            <div class="about-text">
                <h3>Kateřina Klozová</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Atque, numquam blanditiis. Nesciunt
                    officia
                    omnis
                    nam corporis similique molestiae labore reprehenderit repellendus officiis earum, possimus
                    consequatur
                    vero,
                    nemo sed qui voluptas!
                </p>
                <a href="https://www.instagram.com/katerina_kloz/">Instagram</a>
            </div>
        </div>
        </div>
    </section>
    <!----------------SKECKE KOLEKCE------------->
    <section class="kolekce" id="kolekce">
        <div>
            <h2>KOLEKCE</h2>
            <div class="collections">
                <div class="collections-column">
                    <img src="assets/ugly.JPG" alt="kolekce ugly náhled">
                    <div class="layer">
                        <!--POPISEK NA OBRÁZKU-->
                        <a href="ugly.html">ugly</a>
                    </div>
                </div>
                <div class="collections-column">
                    <img src="assets/pes_a_clovek.jpg" alt="kolekce pes a člověk náhled">
                    <div class="layer">
                        <!--POPISEK NA OBRÁZKU-->
                        <a href="pesaclovek.html">pes a člověk</a>
                    </div>
                </div>
                <div class="collections-column">
                    <img src="assets/vulcano1.jpg" alt="kolekce vulcano náhled">
                    <div class="layer">
                        <!--POPISEK NA OBRÁZKU-->
                        <a href="vulcano.html">vulcano</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <p>Author: Šárka Ederová</p>
    </footer>

    <script src="script.js"></script>
</body>

</html>