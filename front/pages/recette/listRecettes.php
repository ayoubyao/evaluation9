<?php 
require_once __DIR__ . '../../../../back/controller/securiteController.php';

require_auth();
?>
<!-- creation du bouton de cerfation recette -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/front/pages/recette/list.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<div class="container text-center text-white">
        <div class="row pt-5">
            <div class="col-lg-8 mx-auto">
                <h1>list des Recettes</h1>
            </div>
        </div>
    </div>

<div class="container py-5">
        <div class="row">
            <div class="col-lg-7 mx-auto bg-white rounded shadow">

                <!-- Fixed header table-->
                <div class="table-responsive">
<?php
$controller = new recettesController();
        $recettes = $controller->getAllRecettes(false);
        echo "<table class='table'>";
        echo "<tr>";
        echo "<th  scope='col' class='col-3'>titre</th>";
        echo "<th  scope='col' class='col-3'>description</th>";
        echo " <th  scope='col' class='col-3'>temps de préparation</th>";
        echo " <th  scope='col' class='col-3'>temps de repos</th>";
        echo " <th  scope='col' class='col-3'>temps de cuisson</th>";
        echo " <th  scope='col' class='col-3'>Un ou plusieurs types de régime</th>";
        echo " <th  scope='col' class='col-3'>ingrédients</th>";
        echo " <th  scope='col' class='col-3'>Les étapes</th>";
        echo " <th  scope='col' class='col-3'>liste des allergène</th>";
        echo " <th  scope='col' class='col-3'>Recette de base</th>";
        echo " <th style='display:none'>idmissions</th>";
        echo "</tr>"; 
        foreach ($recettes as $recette) {
                echo "<tr>";
                echo "<td>" . $recette["titre"] . " </td>";
                echo "<td>" . $recette["description"] . " </td>";
                echo "<td>" . $recette["tempspre"] . " </td>";
                echo "<td>" . $recette["tempsrepos"] . " </td>";
                echo "<td>" . $recette["tempscuisson"] . " </td>";
                echo "<td>" . $recette["typeregime"] . " </td>";
                echo "<td>" . $recette["ingredients"] . " </td>";
                echo "<td>" . $recette["etapes"] . " </td>";
                echo "<td>" . $recette["listeallergenes"] . " </td>";
                echo "<td>" . $recette["isbase"] . " </td>";
                echo "<td>" . $recette["idrecette"] . " </td>";
                echo "</tr>";
        }
        echo "</table>";

?>
</div>
                <!-- End -->
                <div class="container my-3 bg-light">
                    <div class="col-md-12 text-center">
                        <a class="btn btn-primary" href="/creationPageRecettes" role="button">creation recette</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

