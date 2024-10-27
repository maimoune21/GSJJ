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
    <link rel="shortcut icon" type="x-icon" href="./data/pictures/GSJJ.jpg">

    <!---#Icons libarary: --->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="./icons/css/all.min.css">

    <!---#CSS Styles Links: --->
    <link rel="stylesheet" href="./css/styles/main.css">
    <link rel="stylesheet" href="./css/styles/style.css">

    <!---#CSS Queries Links: --->
    <link rel="stylesheet" href="./css/queries/style.css">
    <link rel="stylesheet" href="./css/queries/footer.css">
</head>

<body>
    <!--************************************************************-->
    <!--- #HEADER: --->
    <header>
        <img src="./data/pictures/GSJJ-logo.png" class="main-img" alt="">
        <section class="home" id="home">
            <nav>
                <div class="menu-nav-container">
                    <ul class="menu-nav">
                        <li><a href="#home">Accueil</a></li>
                        <li class="drop-down">
                            <a href="">A propos de nous</a>
                            <div class="drop-cont cont-1">
                                <div class="dropdown-content-Apropos">
                                    <div class="dropdown-image-cont">
                                        <img src="./data/pictures/maternelle.jpg" alt="Description" class="dropdown-image">
                                    </div>
                                    <div class="drop-parent">
                                        <ul>
                                            <li class="c-1"><a href="#Bienvenu" class="e-1">Bienvenue</a></li>
                                            <li class="c-1"><a href="#MOT-DU-DIRECTEUR" class="e-1">Mot du Directeur</a></li>
                                            <li class="c-1"><a href="#Nos-Services" class="e-1">Nos Services</a></li>
                                            <li class="c-1"><a href="#reglement" class="e-1">Réglement intérieur</a></li>
                                            <li class="c-1"><a href="#Nos-Site" class="e-1">Nos Site</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="drop-down">
                            <a href="">Vie Scolaire</a>
                            <div class="drop-cont cont-2">
                                <div class="dropdown-content-Vie">
                                    <div class="dropdown-image-cont">
                                        <img src="./data/pictures/maternelle.jpg" alt="" class="dropdown-image">
                                    </div>
                                    <div class="drop-parent">
                                        <ul>
                                            <li class="c-1"><a href="./pages/hohaires.php" class="e-1">Hohaires</a></li>
                                            <li class="c-1"><a href="./pages/philosophie.php" class="e-1">Philosophie</a></li>
                                            <li class="c-1"><a href="./pages/activites.php" class="e-1">Activités parascolaires</a></li>
                                            <li class="c-1"><a href="./pages/temoignages.php" class="e-1">Témoignages</a></li>
                                            <li class="c-1"><a href="./pages/calendrier.php" class="e-1">Calendrier de vacance</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="drop-down"><a href="">Niveaux scolaires</a></li>
                        <li class="drop-down"><a href="">Actualités</a></li>
                        <li class="drop-down"><a href="#Contactez-nous">Contact</a></li>
                        <li>
                            <div class="language-dropdown">
                                <button id="english-button" aria-haspopup="true" aria-expanded="false">
                                    <img src="./data/pictures/english.png" alt="English flag" style="height: 1.3em;">
                                    <span>ENGLISH</span>
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="english-button" role="menu">
                                    <li role="menuitem">
                                        <a href="#fr">
                                            <img src="./data/pictures/french.png" alt="French flag" style="height: 1.3em;">
                                            <span>Français</span>
                                        </a>
                                    </li>
                                    <li role="menuitem">
                                        <a href="#ar">
                                            <img src="./data/pictures/arabic.png" alt="Arabic flag" style="height: 1.3em;">
                                            <span>العربية</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <div>
                <video autoplay muted loop class="main-video">
                    <source src="./data/videos/main-video.mp4" type="video/mp4">
                    Votre navigateur ne prend pas en charge la balise vidéo.
                </video>
            </div>
            <div class="infos-container">
                <div class="infos">
                    <h1 class="discover">Découvrir</h1>
                    <h3 class="shcool-name">AL JAIL AL JADID</h3>
                    <p class="intro">
                        Bienvenue à Al Jail Al Jadid, un établissement scolaire à Casablanca pour la maternelle et le primaire. Nous offrons un environnement d'apprentissage dynamique, favorisant l'épanouissement de chaque enfant au sein d'une communauté éducative chaleureuse. Rejoignez-nous !
                    </p>
                    <a href="#Contactez-nous" class="Commencer">Contactez-nous</a>
                </div>
                <div class="levels">
                    <div class="button">
                        <div class="button-wrapper">
                            <div class="text">Maternelle</div>
                            <div class="img-Maternelle-ToolTi-container">
                                <span class="icon"><a href="#" class="decouvrir-link">Découvrir</a></span>
                                <p class="img-Maternelle-ToolTip ToolTip-img-maternelle"></p>
                            </div>
                        </div>
                    </div>
                    <span class="separator"></span>
                    <div class="button">
                        <div class="button-wrapper">
                            <div class="text">Primaire</div>
                            <div class="img-Maternelle-ToolTi-container">
                                <span class="icon"><a href="#" class="decouvrir-link">Découvrir</a></span>
                                <p class="img-Maternelle-ToolTip ToolTip-img-primaire"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </header>
    <!--************************************************************-->
    <!--- #MAIN: --->
    <main>
        <section class="Intro">
            <h1>Inspirés par l’excellence et l’innovation</h1>
            <h3>Nous offrons à nos élèves un enseignement de qualité et une variété d’activités parascolaires.</h3>
            <div class="underline-shcool intro-underline">
                <span class="shcool-line intro-line"></span>
            </div>
        </section>
        <section class="Bienvenu" id="Bienvenu">
            <h1 class="hidden-title">
                <span class="Bienvenu-f1">Bienvenue à</span>
                <span>AL JAIL AL JADID</span>
            </h1>
            <div class="Bienvenu-txt-cont">
                <h1><span class="Bienvenu-f1">Bienvenue à</span> <br>AL JAIL AL JADID</h1>
                <p>
                    Au Groupe Scolaire Al Jail Al Jadid, nos élèves sont encouragés à découvrir et questionner le monde qui les entoure. Par l’observation, la manipulation et l’expérimentation, notre enseignement progresse du simple au complexe, permettant aux élèves de construire une base solide de connaissances initiales. Cette approche active favorise une compréhension profonde et une application pratique des idées et concepts abordés.
                    <br>
                    Au Groupe Scolaire Al Jail Al Jadid, nous invitons les familles à rejoindre notre communauté éducative, où la découverte, l’exploration et l’innovation sont les piliers de notre enseignement. Ensemble, nous formons les esprits curieux de demain, prêts à relever des défis et à apporter une contribution positive à notre monde.
                </p>
            </div>
            <div class="Bienvenu-img-cont">
                <img src="./data/pictures/maternelle.jpg" class="Bienvenu-img" alt="">
            </div>
        </section>
        <section class="Creation-infos animate">
            <div class="C-Infos creation">
                <span>2002</span>
                <p>Création</p>
            </div>
            <div class="C-Infos expertise">
                <span id="yearsOfExpertise"></span>
                <p>ANNÉES D’EXPERTISE</p>
            </div>
        </section>
        <section class="MOT-DU-DIRECTEUR" id="MOT-DU-DIRECTEUR">
            <div class="frame-container">
                <span class="line-animation">
                    <h1 class="MDD">MOT DU DIRECTEUR</h1>
                    <div class="underline-shcool">
                        <span class="shcool-line mot-line"></span>
                    </div>
                </span>
                <p class="MDD-Text">
                    Chers parents, chers élèves,
                    <br>
                    C’est avec une immense fierté que je vous adresse ces quelques mots qui marquent un tournant important dans l’histoire de notre institut. Depuis sa création en 2002, notre école a grandi, évolué et s’est transformée en un véritable lieu d’excellence, d’épanouissement et de partage .
                    <br>
                    Notre mission, qui est de former des citoyens responsables, créatifs et ouverts sur le monde, reste au cœur de nos priorités. Nous avons toujours mis l’accent sur l’accompagnement personnalisé de chaque élève, afin qu’il puisse s’épanouir tant sur le plan académique que personnel.
                    <br>
                    En tant qu’école privée, nous sommes conscients de la confiance que vous placez en nous pour l’éducation de vos enfants . Nous faisons tout notre possible pour honorer cette confiance, en offrant un cadre d’apprentissage stimulant, un corps enseignant dévoué , et des activités parascolaires enrichissantes.
                    <br>
                    L’année 2002 semble bien lointaine aujourd’hui, mais l’esprit de notre école demeure intact . Nous nous appuyons sur notre riche passé pour construire l’avenir avec optimisme et détermination .
                    <br>
                    Je tiens à remercier sincèrement tous les membres de notre communauté scolaire — élèves, parents, enseignants, et personnel administratif — pour leur engagement et leur soutien indéfectible au fil des années . Ensemble, continuons à faire briller notre école et à former les talents de demain.
                    <br>
                    Directeur fondateur
                </p>
            </div>
        </section>
        <section class="Niveaux">

        </section>
        <section class="Events">

        </section>
        <section class="Nos-Services" id="Nos-Services">
            <div class="container">
                <div class="services-txt-cont">
                    <h1 class="services-header">NOS SERVICES</h1>
                    <p class="services-text">Le Groupe Scolaire Al Jail AL Jadid met à la disposition des élèves un éventail de services.</p>
                    <ul class="services-list">
                        <li>
                            <div class="service-cont">
                                <span class="services-icon-cont">
                                    <i class="fa-solid fa-bus fas" style="color:#0097d2;"></i>
                                </span>
                                <p><strong>Transport - </strong>Sécurité garantie</p>
                            </div>
                        </li>
                        <li>
                            <div class="service-cont">
                                <span class="services-icon-cont">
                                    <i class="fusion-li-icon fa-utensils fas" style="color:#0097d2;"></i>
                                </span>
                                <p><strong>Garde repas - </strong>Salimenté sur place et gagner le temps</p>
                            </div>
                        </li>
                        <li>
                            <div class="service-cont">
                                <span class="services-icon-cont">
                                    <i class="fa-solid fa-book-quran fas" style="color:#0097d2;"></i>
                                </span>
                                <p><strong>Tajwid du Coran - </strong>Recitation et lecture correcte du Coran</p>
                            </div>
                        </li>
                        <li>
                            <div class="service-cont">
                                <span class="services-icon-cont">
                                    <i class="fa-solid fa-street-view fas" style="color:#0097d2;"></i>
                                </span>
                                <p><strong>Sorties Scolaires - </strong>Expérience enrichissante, autonomie</p>
                            </div>
                        </li>
                    </ul>
                    <span class="service-btn-container">
                        <div class="box">
                            <a class="button-services" href="./pages/services.php">EN SAVOIR PLUS</a>
                            <div class="space">
                                <span style="--i: 31" class="star"></span>
                                <span style="--i: 12" class="star"></span>
                                <span style="--i: 57" class="star"></span>
                                <span style="--i: 93" class="star"></span>
                                <span style="--i: 23" class="star"></span>
                                <span style="--i: 70" class="star"></span>
                                <span style="--i: 6" class="star"></span>
                                <span style="--i: 42" class="star"></span>
                                <span style="--i: 81" class="star"></span>
                                <span style="--i: 19" class="star"></span>
                                <span style="--i: 67" class="star"></span>
                            </div>
                        </div>
                    </span>
                </div>
                <div class="services-img-cont">
                    <img src="./data/pictures/services.png" class="services-img" alt="">
                </div>
            </div>
        </section>
        <section class="reglement" id="reglement">
            <div>
                <img src="./data/pictures/reglement.jpg" class="reglement-img" alt="">
            </div>
            <div class="reglement-p2">
                <div>
                    <h1 class="heading-primary">Réglement intérieur</h1>
                </div>
                <div class="reglement-container">
                    <a href="./data/réglement.pdf" class="download-container" download>
                        <h3>Réglement Intérieur 2024/2025 Al Jail Al Jadid</h3>
                        <div class="reglement-download">
                            <i class="fa-solid fa-download download-icon"></i>
                        </div>
                    </a>
                </div>
            </div>
        </section>
        <section class="Nos-Site" id="Nos-Site">
            <div class="heading-shcool-cont">
                <div class="heading-child-cont">
                    <div class="shcool-first-p">
                        <h1 class="Nos-Site-Heading"><span>⊳</span> Nos Site</h1>
                        <i class="fa-solid fa-building-user shcool-icon"></i>
                    </div>
                    <div class="underline-shcool">
                        <span class="shcool-line"></span>
                    </div>
                </div>
            </div>
            <div class="nos-site-container">
                <span class="nos-site-img">
                    <figcaption class="nos-site-figcaption"></figcaption>
                    <a href="https://maps.app.goo.gl/oqmsdMSiugswYAdLA" target="_blank" class="visit-button">Visitez-nous</a>
                </span>
            </div>
        </section>
        <section class="Contactez-nous" id="Contactez-nous">
            <div class="Contact-Title">
                <span class="Contact-f1">
                    <h1>Contactez-nous</h1>
                    <p>Pour toute information complémentaire sur nos établissements, merci de remplir le formulaire associé. Nous vous répondrons dans les plus brefs délais.</p>
                </span>
                <div class="form-container">
                    <form action="" class="Contacts-form">
                        <div class="form-row">
                            <div>
                                <input type="text" placeholder="Nom Complet" required>
                            </div>
                            <div>
                                <input type="tel" placeholder="Téléphone" required>
                            </div>
                        </div>
                        <div>
                            <input type="email" placeholder="Email" required>
                        </div>
                        <div>
                            <textarea name="" id="" cols="30" rows="6" placeholder="Entrer Votre Message" required></textarea>
                        </div>
                        <div>
                            <button class="envoyer type1"></button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>
    <!--************************************************************-->
    <!--- #FOOTER: --->
    <footer>
        <section class="footer">
            <div class="shortcuts-container">
                <div class="footer-logo-container">
                    <img src="./data/pictures/GSJJ-logo.png" alt="" class="footer-logo-GSJJ">
                    <h1>
                        Maternelle
                        <br>
                        ~
                        <br>
                        Primaire
                    </h1>
                </div>
                <div>
                    <ul class="shortcuts">
                        <li><i class="fa-solid fa-plus"></i><a href="#Nos-Services">Nos Servises</a></li>
                        <li><i class="fa-solid fa-plus"></i><a href="./pages/philosophie.php">Philosophie</a></li>
                        <li><i class="fa-solid fa-plus"></i><a href="">Événements</a></li>
                        <li><i class="fa-solid fa-plus"></i><a href="./pages/reglement.php">Réglement intérieur</a></li>
                    </ul>
                </div>
            </div>
            <div class="contact-container">
                <h3>Contactez-nous</h3>
                <div class="infos-contact">
                    <span class="inside-contact">
                        <span class="toolTip-conainer Tt-c-1">
                            <p class="location-ToolTip Tt-1">localisation</p>
                            <i class="fa-solid fa-school-flag"></i>
                        </span>
                        <a href="">BP 768, Place Jean Courtin, Agdal, 10 106 Rabat - Morocco</a>
                    </span>
                    <span class="inside-contact">
                        <span class="toolTip-conainer">
                            <p class="location-ToolTip">Telephone</p>
                            <i class="fa-solid fa-phone"></i>
                        </span>
                        <a href="">+216 693656626</a>
                    </span>
                    <span class="inside-contact">
                        <span class="toolTip-conainer">
                            <p class="location-ToolTip">Fix</p>
                            <i class="fa-solid fa-fax"></i>
                        </span>
                        <a href="">+216 593656626</a>
                    </span>
                    <span class="inside-contact">
                        <span class="toolTip-conainer">
                            <p class="location-ToolTip">Email</p>
                            <i class="fa-solid fa-envelope-open-text"></i>
                        </span>
                        <a href="mailto:institutaljailjadid@gmail.com">institutaljailjadid@gmail.com</a>
                    </span>
                </div>
                <div class="socials-container">
                    <h3>Suivez-nous</h3>
                    <span class="inside-socials">
                        <ul class="social">
                            <li class="social-item">
                                <a class="social-link" href="/">
                                    <i class="fa-brands fa-facebook-f"></i>
                                </a>
                            </li>
                            <li class="social-item">
                                <a class="social-link" href="/">
                                    <i class="fa-brands fa-instagram"></i>
                                </a>
                            </li>
                            <li class="social-item">
                                <a class="social-link" href="/">
                                    <i class="fa-brands fa-linkedin-in"></i>
                                </a>
                            </li>
                        </ul>
                    </span>
                </div>
            </div>
            <div class="location-container">
                <h3>Localisation</h3>
                <div class="location">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d5778.312032437613!2d-7.5302410920672775!3d33.376306396730975!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda63a1a85afe6df%3A0xe1f549c00438d18f!2sSchool%20Group%20Al%20Jail%20Al%20Jadid!5e0!3m2!1sar!2sma!4v1729262682425!5m2!1sar!2sma"
                        width="100%"
                        height="100%"
                        style="border: 1px solid #ccc; border-radius: 8px;"
                        allowfullscreen=""
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
        </section>
        <section class="copyright">
            <marquee direction="right" scrollamount="5">
                <div class="copyright-GSJJ">
                    <img src="./data/pictures/GSJJ-(1).png" alt="" class="copyright-logo">
                    <p>Droits d'auteur AL JAIL AL JADID © 2024. Tous droits réservés</p>
                </div>
            </marquee>
            <div>
                <strong class="MM-container">
                    <b>Créé par</b>
                    <img src="./data/pictures/wizard-logo.png" alt="wizard-logo.png" class="MM">
                    <a href="https://maimoune21.github.io/PORTFOLIO/" target="_blank" class="MyName">Mohamed Maimoune</a>
                    <div class="go-up-container">
                        <a href="#home" class="btn-go-up" onclick="scrollToTop()">
                            <div class="button-box-go-up">
                                <span class="button-elem-go-up">
                                    <i class="fa-solid fa-arrow-down"></i>
                                </span>
                                <span class="button-elem-go-up">
                                    <i class="fa-solid fa-arrow-down"></i>
                                </span>
                            </div>
                            <div class="stroke">
                                <svg width="42" height="42">
                                    <circle cx="21" cy="21" r="19" transform="rotate(-90 21 21)"></circle>
                                </svg>
                            </div>
                        </a>
                    </div>
                </strong>
            </div>
        </section>
    </footer>

    <!---#JS Links: --->
    <script src="./js/nav.js"></script>
    <script src="./js/script.js"></script>
</body>

</html>
