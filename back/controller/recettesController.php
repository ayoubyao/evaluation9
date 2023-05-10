<?php
require_once __DIR__ . '../../repository/repository.php';
require_once __DIR__ . '../../model/recettes.php';

if (isset($_POST["isCreationRecettes"])){
    //creation de l'objet pour l'inserer dans la BDD
    $recette = new Recettes();
    $recette->titre = $_POST["titre"];
    $recette->description =  $_POST["description"];
    $recette->tempspre = $_POST["tempspre"];
    $recette->tempsrepo =  $_POST["tempsrepo"];
    $recette->tempscuisson = $_POST["tempscuisson"];
    $recette->typeregime =  $_POST["typeregime"];
    $recette->ingredients = $_POST["ingredients"];
    $recette->etapes =  $_POST["etapes"];
    $recette->listeallergenes =  $_POST["allergenes"];

    if ($_POST["base"] == 'base')
    {
        $recette->isbase = true ;
    }
    else 
    {
        $recette->isbase = 0 ;
    }
   
    
    

    //Enregistrement dans la base de donnee
    $controller = new recettesController();
    if($controller->creationRecette($recette))
    {
        header("Location:  /listRecettes");
        exit();
    } else {
        header("Location: /errorPage");
        exit();
    }
    
}

class recettesController
{
    public $repo; 
    function __construct()
    {
        $this->repo = new Repository();
    }
 
    public function creationRecette(Recettes $recettes) : bool
    {
        return $this->repo->creationRecettes($recettes);
    }

    public function getAllRecettes(bool $isbase) {
        return $this->repo->getAllRecettes($isbase);
        
    }

    public function getRecetteById($idRecette) {
        return $this->repo->getRecetteById(($idRecette));
    }

}