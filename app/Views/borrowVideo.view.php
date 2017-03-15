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
                    <li><a href="/">Startseite</a></li>
                    <li><a href="/BorrowList">Ausleihen</a></li>
                    <li><a href="/VideoList">Videos</a></li>
                    <li><a href="/CustomerList">Kunden</a></li>
                </ul>
                <ul id="nav-mobile" class="side-nav">
                    <li><a href="/">Startseite</a></li>
                    <li><a href="/BorrowList">Ausleihen</a></li>
                    <li><a href="/VideoList">Videos</a></li>
                    <li><a href="/CustomerList">Kunden</a></li>
                </ul>
                <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
            </div>
        </nav>
            <div class="container">
                <br><br>
                <h1 class="header center orange-text">Videothek 307</h1>
                <div class="row ">
                    <h5 class="header col s12 light">Video ausleihen:</h5>
                </div>
                <div class="row">
                  <label>Kunde</label>
                    <select class="browser-default" id="customerField">
                        <option disabled selected>Kunde wählen</option>
                       <?php foreach($customerArray as $customer): ?>
                       <option value="<?= $customer['id'] ?>"><?= $customer['name'] ?></option>
                       <?php endforeach; ?>
                  </select>
              </div>
              <div class="row">
                <p class="header col s12 light" id="borrowInformation"></p>
                <br>
                </div>
              <div class="row">
                  <label>Film</label>
                    <select class="browser-default" id="videoField">
                    <option disabled selected>Video wählen</option>
                       <?php foreach($videoArray as $video): ?>
                       <option value="<?= $video['id'] ?>"><?= $video['title'] ?></option>
                       <?php endforeach; ?>
                  </select>
              </div>               
                <a class="waves-effect waves-light btn-large" id="borrowButton">Video ausleihen</a>
                <br><br> 
                <div class="input-field col s12">
                    <p id="errors"></p>
                </div>
            </div>
        <footer class="page-footer orange">
            <div class="container">
                <div class="row">
                    <div class="col l6 s12">
                        <h5 class="white-text">Über das Projekt</h5>
                        <p class="grey-text text-lighten-4">Dieses Projekt entstand in Folge des überbetrieblichen Kurses Modul 307 und wurde von Thomas Gassman sowie Simon Bauemeler entwickelt und dient dazu Videos zu verwalten.</p>
                    </div>
        </footer>
        <script src="public/js/app.js"></script>
        <script src="public/js/borrow.js"></script>
    </body>
</html>