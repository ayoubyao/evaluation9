<?php require_once __DIR__ . "/../../../back/controller/recettesController.php" ;
require_once __DIR__ . '../../../../back/controller/securiteController.php';

require_auth();
?>
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
        h2 {
            color: #f1f1f1 ;
        }

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
        <center>
            <h2>page patients</h2>
        </center>
    </nav>

    <div class="container-fluid text-center">
        <div class="row content">
            <div class="col-sm-2 sidenav">
                <?php $idPatient = $_SESSION['idutilisateur'];
                echo '<p><a href="/detailspatient/' . $idPatient .  '/">profil</a></p>' ?>
            </div>
            <div class="col-sm-8 text-left">
                <h1>Liste de toutes les recettes</h1>
                <?php
                $controller = new recettesController();
                $recettesdebases = $controller->getAllRecettes(false);
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
                    echo "<td><button class='btn btn-info' onclick='opendetails()'>Deails</button></td>";
                    echo "</tr>";
                }
                ?>

            </div>
        </div>
    </div>

</body>
<script>
    function opendetails() {
        location.href = "/detailsRecette"
    }
</script>

</html>