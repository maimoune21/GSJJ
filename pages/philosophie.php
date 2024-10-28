<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GROUPE SCOLAIRE AL JAIL AL JADID</title>

    <!---#primary meta tags: --->
    <meta name="title" content="GSJJ">
    <meta name="author" content="Mohamed Maimoune">
    <meta name="copyright" content="© 2024 Mohamed Maimoune">
    <meta name="robots" content="index, follow">
    <link rel="shortcut icon" type="x-icon" href="../data/pictures/GSJJ.jpg">

    <!---#Icons libarary: --->
    <link rel="stylesheet" href="./icons/css/all.min.css">

    <!---#CSS Links: --->
    <link rel="stylesheet" href="../css/styles/main.css">
    <link rel="stylesheet" href="../css/styles/philosophie.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../icons/css/all.min.css">
    <link rel="stylesheet" href="../css/styles/nav.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="./icons/css/all.min.css">
    <link rel="stylesheet" href="../css/styles/footer.css">
    <link rel="stylesheet" href="../css/queries/footer.css">

    <script src="../js/footer.js" defer></script>
</head>

<body>
    <header>
    <img src="../data/pictures/GSJJ-logo.png" class="main-img" alt="">
    <nav id="home">
        <div class="menu-nav-container">
            <ul class="menu-nav">
                <li><a href="../index.php">Accueil</a></li>
                <li><a href="../pages/hohaires.php">Hohaires</a></li>
                <li><a href="../pages/services.php">Services</a></li>
                <li class="c-1"><a href="../pages/philosophie.php">Philosophie</a></li>
                <li class="c-1"><a href="../pages/activites.php">Activités parascolaires</a></li>
                <li class="c-1"><a href="../pages/temoignages.php">Témoignages</a></li>
                <li><a href="../pages/calendrier.php">Calendrier de vacance</a></li>
                <li>
                    <div class="language-dropdown">
                        <button id="english-button" aria-haspopup="true" aria-expanded="false">
                            <img src="../data/pictures/english.png" alt="English flag" style="height: 1.3em;">
                            <span>ENGLISH</span>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="english-button" role="menu">
                            <li role="menuitem">
                                <a href="#fr">
                                    <img src="../data/pictures/french.png" alt="French flag" style="height: 1.3em;">
                                    <span>Français</span>
                                </a>
                            </li>
                            <li role="menuitem">
                                <a href="#ar">
                                    <img src="../data/pictures/arabic.png" alt="Arabic flag" style="height: 1.3em;">
                                    <span>العربية</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</header>
    <section class="header">
        <h1>Philosophie</h1>
    </section>
    <section class="philosophie">
        <div class="container">
            <div class="content">
                <span>
                    <h1 class="primary-heading">Valeurs de l'établissement</h1>
                </span>
                <p class="text-content">
                    La philosophie d'AL JAIL JADID EST DE :
                    <br>
                    " Éveiller les esprits et construire le futur " Parce que nous croyons que l'éveil de la curiosité de nos élèves stimule leurs désirs d'explorer, notre approche pédagogique a pour objectif de faire voyager nos élèves dans un monde de découverte dès leurs premiers pas en maternelle.
                    <br>
                    Notre philosophie se base également sur l'apprentissage actif, la progression structurée de l' enseignement et l'application pratique des enseignements acquis.
                    <br>
                    En résumé, notre mission primordiale est de donner à nos élèves la confiance nécessaire en leurs capacités pour participer, créer et évoluer dans notre société.
                    <br>
                    Al Jail Al Jadid est, aujourd’hui plus qu’hier, un label éducatif nourri d’une passion avec des valeurs phares mêlant :
                    <br>
                <ul class="valeurs">
                    <li>Respect ;</li>
                    <li>Épanouissement ;</li>
                    <li>Engagement ;</li>
                    <li>Excellence.</li>
                </ul>
                </p>
            </div>
            <div class="image-cont">
                <img src="../data/pictures/test-1.png" class="philosophie-img" alt="">
            </div>
        </div>
    </section>
    <?php include_once "./footer.php" ?>
</body>
<script src="../js/nav.js"></script>
<script src="../js/footer.js"></script>

</html>
