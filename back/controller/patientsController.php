<?php
require_once __DIR__ . '../../repository/repository.php';
require_once __DIR__ . '../../model/user.php';

if (isset($_POST["creationPagePatients"]) ){
    //creation de l'objet pour l'inserer dans la BDD
    $patient = new user();
    $patient->username = $_POST["nom"];
    $patient->motdepasse =  $_POST["motdepasse"];
    $patient->allergene = $_POST["allergenes"];
    $patient->idrole = 4;

    //Enregistrement dans la base de donnee
    $controller = new patientsController();
    if($controller->creationPatient($patient))
    {
        header("Location: /listPatients");
        exit();
    } else {
        header("Location: /errorPage");
        exit();
    }
    
}



class patientsController
{
    public $repo; 
    function __construct()
    {
        $this->repo = new Repository();
    }
 
    public function creationPatient(user $patients) : bool
    {
        return $this->repo->creationPatients($patients);
    }

    public function getAllPatients() {
        return $this->repo->getAllPatients();
        
    }

    public function getPatientByID($idPatient)
    {
        return $this->repo->getPatientById(($idPatient));
    }

}