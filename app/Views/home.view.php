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
            <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo">Vidicted</a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="/m307_1/simon_thomas/#">Startseite</a></li>
                    <li><a href="BorrowList">Ausleihen</a></li>
                    <li><a href="VideoList">Videos</a></li>
                    <li><a href="CustomerList">Kunden</a></li>
                </ul>
                <ul id="nav-mobile" class="side-nav">
                    <li><a href="/m307_1/simon_thomas">Startseite</a></li>
                    <li><a href="BorrowList">Ausleihen</a></li>
                    <li><a href="VideoList">Videos</a></li>
                    <li><a href="CustomerList">Kunden</a></li>
                </ul>
                <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
            </div>
        </nav>
        <div class="section no-pad-bot" id="index-banner">
            <div class="container">
                <br><br>
                <h1 class="header center orange-text">Vidicted 307</h1>
                <div class="row center">
                    <h5 class="header col s12 light">Simon Baumeler &amp; Thomas Gassmann</h5>
                </div>
                <div class="row center">
                    <a href="BorrowList" id="download-button" class="btn-large waves-effect waves-light orange">Video ansehen</a>
                </div>
                <br><br>
            </div>
        </div>
        <div class="container">
            <div class="section">
                <div class="row">
                    <div class="col s12 m3">
                        <div class="icon-block">
                            <h2 class="center light-blue-text"><i class="material-icons">group</i></h2>
                            <h5 class="center">Videos</h5>
                            <p class="light">Fügen sie neue Videos hinzu oder änderen sie bestehende Videos mit den dazugehörigen Informationen.</p>
                        </div>
                    </div>
                    <div class="col s12 m3">
                        <div class="icon-block">
                            <h2 class="center light-blue-text"><i class="material-icons">group</i></h2>
                            <h5 class="center">Ausleihen</h5>
                            <p class="light">Verwalten sie Einträge der Videos, welche von den Kunden ausgeliehen wurden und sehen sie wann welche Videos zurückgegeben werden müssen.</p>
                        </div>
                    </div>
                    <div class="col s12 m3">
                        <div class="icon-block">
                            <h2 class="center light-blue-text"><i class="material-icons">group</i></h2>
                            <h5 class="center">Kunden</h5>
                            <p class="light">Finden sie alle Informationen zu den Kunden, erfassen sie neue Kunden oder ändern bestehende Kunden.</p>
                        </div>
                    </div>
                    <div class="col s12 m3">
                        <div class="icon-block">
                            <h2 class="center light-blue-text"><i class="material-icons">group</i></h2>
                            <h5 class="center">ÜK Modul 307</h5>
                            <p class="light">Im ÜK Modul 307 entwickelten wir eine Videothek, welche sich auch auf <a href="https://github.com/ThomasGassmann/M307-Videothek">Github</a> befindet.</p>
                        </div>
                    </div>
                </div>
            </div>
            <br><br>
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