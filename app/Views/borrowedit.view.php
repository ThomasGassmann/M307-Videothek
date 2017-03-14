<!DOCTYPE html>
<html lang="de">
    <head>
        <meta charset="UTF-8">
        <title>Videothek - Home</title>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <script src="public/node_modules/jquery/dist/jquery.min.js"></script>
        <link rel="stylesheet" href="public/node_modules/materialize-css/dist/css/materialize.min.css" />
        <script src="public/node_modules/materialize-css/dist/js/materialize.min.js"></script>
        <link rel="stylesheet" href="public/css/app.css" />
    </head>
    <body>
        <nav class="light-blue lighten-1" role="navigation">
            <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo">Videothek</a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="#">Kunde erfassen</a></li>
                    <li><a href="#">Video erfassen</a></li>
                    <li><a href="#">Videoliste</a></li>
                    <li><a href="#">Kundenliste</a></li>
                    <li><a href="#">Kundenstatus-Liste</a></li>
                </ul>
                <ul id="nav-mobile" class="side-nav">
                    <li><a href="#">Kunde erfassen</a></li>
                    <li><a href="#">Video erfassen</a></li>
                    <li><a href="#">Videoliste</a></li>
                    <li><a href="#">Kundenliste</a></li>
                    <li><a href="#">Kundenstatus-Liste</a></li>
                </ul>
                <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
            </div>
        </nav>

        <div class="section no-pad-bot" id="index-banner">
            <div class="container">
                <br><br>
                <h1 class="header center orange-text">Ausgeliehene Videos bearbeiten</h1>
                <select class="browser-default" id="selectBorrow">
                    <?php foreach($array as $item): ?>
                        <option value="<?= $item['id'] ?>"><?=  $item['video']->title . ' für ' . $item['customer']->getFullName() . ' am ' . $item['startDate']  ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>
        <footer class="page-footer orange">
            <div class="container">
                <div class="row">
                    <div class="col l6 s12">
                        <h5 class="white-text">Über das Projekt</h5>
                        <p class="grey-text text-lighten-4">Dieses Projekt entstand in Folge des überbetrieblichen Kurses Modul 307 und wurde von Thomas Gassman sowie Simon Bauemeler entwickelt und dient dazu Videos zu verwalten.</p>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="container">
                    <!-- Empty Footer -->
                </div>
            </div>
        </footer>
        <script src="public/js/app.js"></script>
    </body>
</html>