<?php
require_once 'vendor/autoload.php';
require_once 'back/model/user.php';
require_once 'back/model/role.php';
require_once 'back/model/recettes.php';
require_once 'back/repository/repository.php';
require_once 'back/repository/Irepository.php';
require_once "back/controller/patientsController.php";
require_once "back/controller/recettesController.php";
require_once 'back/repository/Irepository.php';
require_once 'back/controller/allergeneController.php';


$router = new AltoRouter();

// Configuration des routes

$router->map('GET', '/',  function () {
    require_once __DIR__ . '/front/pages/accueil/accueil.php';
});

$router->map('GET', '/index',  function () {
    require_once __DIR__ . '/front/pages/administrateur/pageAdministrateur.php';
});

$router->map('GET', '/connexion',  function () {
    require_once __DIR__ . '/front/pages/connexion.php';
});

$router->map('GET', '',  function () {
    require_once __DIR__ . '/front/pages/connexion.php';
});

//connexion
$router->map('POST', '/autorisation',  function () {
    require_once __DIR__ . '/back/controller/autorisationController.php';
});

//patients
$router->map('POST', '/creationPatients',  function () {
    require_once __DIR__ . '/back/controller/patientsController.php';
});

$router->map('GET', '/listPatients',  function () {
    require_once __DIR__ . '/front/pages/patient/listPatients.php';
});

$router->map('GET', '/indexPatient/[i:id]/',  function ($id) {
    require_once __DIR__ . '/front/pages/patient/indexPatients.php';
});
$router->map('GET', '/detailspatient/[i:id]/',  function ($id) {
    require_once __DIR__ . '/front/pages/patient/detailsPatient.php';
});

$router->map('GET', '/creationPagePatients',  function () {
    require_once __DIR__ . '/front/pages/patient/creationPatients.php';
});



//recette
$router->map('POST', '/creationRecettes',  function () {
    require_once __DIR__ . '/back/controller/recettesController.php';
});

$router->map('GET', '/listRecettes',  function () {
    require_once __DIR__ . '/front/pages/recette/listRecettes.php';
});

$router->map('GET', '/detailsRecette/[i:id]/',  function ($id) {
    $_SESSION["idrecette"] = $id;
    require_once __DIR__ . '/front/pages/recette/detail.php';
});

$router->map('GET', '/creationPageRecettes',  function () {
    require_once __DIR__ . '/front/pages/recette/creationRecettes.php';
});


// error page (ayoub)
$router->map('GET', '/errorPage',  function() {
    require_once __DIR__ . '/front/pages/error/error.php';
});

// Correspondance de la requête à une route
$match = $router->match();

// Traitement de la route
if ($match && is_callable($match['target'])) {
    call_user_func_array($match['target'], $match['params']);
} else {
    // Si aucune route ne correspond à la requête, afficher une erreur 404
    header($_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
    echo 'Page non trouvée';
}
