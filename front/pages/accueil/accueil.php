<?php require_once __DIR__ . "/../../../back/controller/recettesController.php" ?>
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
            <div class="col-sm-8 text-left">
                <h1>Liste de toutes les recettes</h1>
                <?php
                $controller = new recettesController();
                $recettesdebases = $controller->getAllRecettes(true);
                echo "<table class='table table-bordered'>";
                echo "<tr>";
                echo "<th>Nom de la recette</th>";
                echo "<th>Description</th>";
                echo "<th>Allergenes</th>";
                echo "<th>Ingredients</th>";
                echo "<th>Details</th>";
                echo "</tr>";
                foreach ($recettesdebases as $recette) {
                    echo "<tr>";
                    echo "<td>" . $recette['titre'] . "</td>";
                    echo "<td>" . $recette['description'] . "</td>";
                    echo "<td>" . $recette['listeallergenes'] . "</td>";
                    echo "<td>" . $recette['ingredients'] . "</td>";
                    echo "<td><button class='btn btn-info' onclick='opendetails(" .  $recette['idrecette'] . ")'>Deails</button></td>";
                    echo "</tr>";
                }
                ?>

            </div>
        </div>
    </div>

</body>
<script>
    function opendetails(idrecette) {
        location.href = "/detailsRecette/" + idrecette + "/" 
    }
</script>

</html>