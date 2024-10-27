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
</head>

<body>
    <?php include_once "./nav.php" ?>
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