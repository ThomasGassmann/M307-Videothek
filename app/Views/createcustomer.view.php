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
        <script>
        </script>
    </head>
    <body>
        <nav class="light-blue lighten-1" role="navigation">
            <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo">Vidicted</a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="/m307_1/simon_thomas">Startseite</a></li>
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
                <div class="row">
                    <form class="col s12">
                    <div class="row">
                        <div class="input-field col s6">
                            <input placeholder="Vorname" id="firstNameField" type="text" class="validate">
                            <label for="firstNameField">Vorname</label>
                        </div>
                        <div class="input-field col s6">
                            <input placeholder="Nachname" id="lastNameField" type="text" class="validate">
                            <label for="lastNameField">Nachname</label>
                        </div>
                        <div class="input-field col s12">
                            <input placeholder="Mail" id="mailField" type="email" class="validate">
                            <label for="mailField">Mail</label>
                        </div>
                        <div class="input-field col s12">
                            <input placeholder="Telefon" id="phoneField" type="text" class="validate">
                            <label for="phoneField">Telefon</label>
                        </div>
                        <div class="input-field col s12">
                            <select id="membershipField" class="browser-default">
                                <?php foreach($memberships as $membership): ?>
                                    <option value="<?= $membership->id ?>"><?= $membership->name ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="input-field col s12">
                            <a class="waves-effect waves-light btn" href="javascript:createCustomer()">erstellen</a>
                        </div>
                        <div class="input-field col s12">
                            <p id="errors"></p>
                        </div>
                    </div>
                    </form>
                </div>
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