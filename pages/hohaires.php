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
    <link rel="stylesheet" href="../css/styles/hohaires.css">
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
        <h1>Horaires</h1>
    </section>
    <section class="hohaires">
        <div class="content">
            <h2 class="table-title">Horaires d'entrée et de sortie</h2>
        </div>
        <table class="schedule-table">
            <thead>
                <tr>
                    <th></th>
                    <th colspan="2">Entrée</th>
                    <th colspan="2">Sortie</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><strong>Maternelle</strong></td>
                    <td>9h</td>
                    <td>12h</td>
                    <td>14h</td>
                    <td>17h</td>
                </tr>
                <tr>
                    <td><strong>Primaire</strong></td>
                    <td>9h</td>
                    <td>12h</td>
                    <td>14h</td>
                    <td>17h</td>
                </tr>
            </tbody>
        </table>
    </section>
    <?php include_once "./footer.php" ?>
</body>
<script src="../js/nav.js"></script>
<script src="../js/footer.js"></script>

</html>
