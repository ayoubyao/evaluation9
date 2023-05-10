<!DOCTYPE html>
<html lang="en">

<head>
    <title>diététicienne-nutritionniste</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        /* Remove the navbar's default margin-bottom and rounded borders */

        .navbar {
            margin-bottom: 0;
            border-radius: 0;
        }

        /* Set height of the grid so .sidenav can be 100% (adjust as needed) */

        .row.content {
            height: 450px
        }

        /* Set gray background color and 100% height */

        .sidenav {
            padding-top: 20px;
            background-color: #f1f1f1;
            height: 100%;
        }

        /* Set black background color, white text and some padding */

        footer {
            background-color: #555;
            color: white;
            padding: 15px;
        }

        /* On small screens, set height to 'auto' for sidenav and grid */

        @media screen and (max-width: 767px) {
            .sidenav {
                height: auto;
                padding: 15px;
            }

            .row.content {
                height: auto;
            }
        }

        .C2etoiles {
            background: red;
            display: inline-block;
            cursor: pointer;
        }

        .C2etoiles:hover {
            background: green;
        }

        .C2etoiles div {
            display: inline-block;
            padding: 5px;
        }

        .C2etoiles div::after {
            content: "\002605";
            /* une étoile en Unicode */
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Logo</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="/front/pages/accueil/accueil.php">Acceuil</a></li>
                    <li><a href="/front/pages/accueil/pageApropos.php">À propos</a></li>
                    <li><a href="/front/pages/accueil/pageService.php">Mes services</a></li>
                    <li><a href="/front/pages/accueil/pageContact.php">page contact</a></li>
                    <li><a href="/front/pages/accueil/pageMlegale.php">page mentions légales</a></li>
                    <li><a href="/front/pages/accueil/pagePolitique.php">page politique de confidentialité</a></li>

                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="/front/pages/connexion.php"><span class="glyphicon
                                    glyphicon-log-in"></span>Se connecter</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid text-center">
        <div class="row content">
            <div class="col-sm-2 sidenav">
                <p><a href="">Link</a></p>
                <p><a href="#">Link</a></p>
                <p><a href="#">Link</a></p>
            </div>
            <div class="col-sm-8 text-left">
                <h1>Page Details</h1>
                <?php
                $controller = new recettesController();
                $idrecette = $_SESSION["idrecette"];
                $recette = $controller->getRecetteById($idrecette);

                echo "<p>titre : " . $recette->titre . "</p>";
                echo "<p>description : " . $recette->description . "</p>";
                echo "<p>allergene : " . $recette->listeallergenes . "</p>";
                echo "<p>temps de préparation : " . $recette->tempspre . "</p>";
                echo "<p>temps de repos : " . $recette->tempsrepo . "</p>";
                echo "<p>temps de cuisson : " . $recette->tempscuisson . "</p>";
                echo "<p>Un ou plusieurs types de régime : " . $recette->typeregime . "</p>";
                echo "<p>ingrédients : " . $recette->ingredients . "</p>";
                echo "<p>Les étapes : " . $recette->etapes . "</p>";
                echo "<p>liste des allergène : " . $recette->listeallergenes . "</p>";
                echo "<p>Recette de base : " . $recette->isbase . "</p>";


                ?>

            </div>

            <div class="col-sm-2 sidenav">
                <span class="C2etoiles">
                    <div>1</div>

                    <span class="C2etoiles">
                        <div>2</div>

                        <span class="C2etoiles">
                            <div>3</div>

                            <span class="C2etoiles">
                                <div>4</div>

                                <span class="C2etoiles">
                                    <div>5</div> 
                                </span>
                            </span>
                        </span>
                    </span>
                </span>
            </div>
        </div>
    </div>

</body>

</html>