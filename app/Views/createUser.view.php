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
                    <li><a href="CreateUser">Kunde erfassen</a></li>
                    <li><a href="#">Video erfassen</a></li>
                    <li><a href="#">Videoliste</a></li>
                    <li><a href="#">Kundenliste</a></li>
                    <li><a href="#">Kundenstatus-Liste</a></li>
                </ul>
                <ul id="nav-mobile" class="side-nav">
                    <li><a href="CreateUser">Kunde erfassen</a></li>
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
                <h1 class="header center orange-text">Videothek 307</h1>
                <div class="row">
                    <h5 class="header col s12 light">Kunde erfassen:</h5>
                </div>
     <form class="col s12" action>
       <div class="row">
        <div class="input-field col s6">
          <input id="first_name" type="text" class="validate">
          <label for="first_name">Vorname</label>
        </div>
       </div>
        <div class="row">
          <div class="input-field col s6">
          <input id="last_name" type="text" class="validate">
          <label for="last_name">Nachname</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="password" type="password" class="validate">
          <label for="password">Passwort</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="email" type="email" class="validate">
          <label for="email">Email</label>
        </div>
      </div>
        <div class="row">
        <div class="input-field col s12">
          <input id="phoneNumber" type="tel" class="validate">
          <label for="phoneNumber">Telefonnummer</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="createUser" type="submit" class="waves-effect waves-light btn" value="Kunde erfassen">
        </div>
      </div>
      </div>
      </div>
        </div>
        <div class="container">
            <div class="section">
                <div class="row">
                                 
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
                    <div class="col l3 s12">
                        <h5 class="white-text">Videos</h5>
                        <ul>
                            <li><a class="white-text" href="#!">Link 1</a></li>
                            <li><a class="white-text" href="#!">Link 2</a></li>
                            <li><a class="white-text" href="#!">Link 3</a></li>
                            <li><a class="white-text" href="#!">Link 4</a></li>
                        </ul>
                    </div>
                    <div class="col l3 s12">
                        <h5 class="white-text">Kunden</h5>
                        <ul>
                            <li><a class="white-text" href="#!">Link 1</a></li>
                            <li><a class="white-text" href="#!">Link 2</a></li>
                            <li><a class="white-text" href="#!">Link 3</a></li>
                            <li><a class="white-text" href="#!">Link 4</a></li>
                        </ul>
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