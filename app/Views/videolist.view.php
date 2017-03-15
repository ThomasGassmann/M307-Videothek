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
                <a href="CreateVideo" class=" waves-effect waves-light btn">Neu</a>
                <table>
                    <thead>
                        <tr>
                            <th>Titel</th>
                            <th>Länge</th>
                            <th>Erscheinungsjahr</th>
                            <th>Ist aktuell ausgeliehen?</th>
                            <th>Löschen</th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php
                                $i = 0;
                            ?>
                            <?php foreach($array as $item): ?>
                                <tr id="list<?= $i++ ?>">
                                    <td><?php echo $item->title ?></td>
                                    <td><?php echo $item->length === 0 ? '' : $item->length ?></td>
                                    <td><?php echo $item->releaseYear ?></td>
                                    <td><?php echo $item->isBorrowed === 0 ? 'Nein' : 'Ja' ?></td>
                                    <td><a class="waves-effect waves-light btn" href="javascript:deleteVideo(<?= $item->id ?>, '<?= 'list' . ($i - 1) ?>')">Löschen</a></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
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