<?php

require_once __DIR__ . '/../repository/Irepository.php';
require_once __DIR__ . '/../repository/connexion.php';


/**
 * Summary of Repository
 */
class Repository implements IRepository
{
    public function  authentification($username,$password)
    {
        $pdo = Connection::getPDO();
        $query = $pdo->query("SELECT * FROM user WHERE username = '" . $username . "' AND motdepasse = '" . $password . "'");
        $userFound = $query->fetch(PDO::FETCH_ASSOC);

        if ($userFound != null) {
            return $userFound;
        }

        return null;
    }
    /**
     * Summary of creationAgent
     * @param user $patient
     * @return bool
     */
    public function creationPatients(User $patient): bool
    {
        try {
            //creation de la connexion a la base ded donnees
            $pdo = Connection::getPDO();

            //creation de la requete SQL pour l'envoyer a la base de donnees
            $requete = "INSERT INTO user(username,motdepasse,idrole,allergene) VALUES ('" . $patient->username . "','" . $patient->motdepasse ."',4,'" . $patient->allergene . "')";

            //envoi la requete a la base de donnees
            $query = $pdo->query($requete);

            return true;
        } catch (\Throwable $th) {
            return false;
        }
    }

   

    public function creationRecettes(Recettes $recette): bool
    {
        try {
            //creation de la connexion a la base ded donnees
            $pdo = Connection::getPDO();

            //creation de la requete SQL pour l'envoyer a la base de donnees
            $requete = "INSERT INTO recettes(titre,description,tempspre,tempsrepos,tempscuisson,typeregime,ingredients,etapes,listeallergenes,isbase) VALUES ('" . $recette->titre . "','" . $recette->description . "','" . $recette->tempspre . "','" . $recette->tempsrepo . "','" . $recette->tempscuisson . "','" . $recette->typeregime . "','" . $recette->ingredients . "','" . $recette->etapes . "','" . $recette->listeallergenes . "'," . $recette->isbase . ")";

            //envoi la requete a la base de donnees
            $query = $pdo->query($requete);

            return true;
        } catch (\Throwable $th) {
            return false;
        }
    }

   
    //ayoub liste des patients
    public function getAllPatients()
    {
        $pdo = Connection::getPDO();
        $query = $pdo->query("SELECT * FROM user WHERE idrole=4");

        $patient = $query->fetchAll(PDO::FETCH_ASSOC);
        return $patient;
    }
    //ayoub liste des recettes
    public function getAllRecettes(bool $isbase)
    {
        $pdo = Connection::getPDO();
        if($isbase){
            $query = $pdo->query("SELECT * FROM recettes WHERE isbase= 1");
        }else {
            $query = $pdo->query("SELECT * FROM recettes");
        }

        $recette = $query->fetchAll(PDO::FETCH_ASSOC);
        return $recette;
    }

    public function getAllAllergenes()
{
    $pdo = Connection::getPDO();
    $query = $pdo->query("SELECT * FROM allergene");
    $allergene = $query->fetchAll(PDO::FETCH_ASSOC);
    return $allergene;
}
    
    public function getPatientById($id): User
    {
        $patient = new User();
        $pdo = Connection::getPDO();
        $query = $pdo->query("SELECT * FROM user WHERE iduser = " . $id);

        $results = $query->fetch(PDO::FETCH_ASSOC);
        $patient->username = $results["username"];
        $patient->motdepasse = $results["motdepasse"];
        $patient->allergene = $results["allergene"];
        
        return $patient;
    }

    public function getRecetteById($id): Recettes
    {
        $recette = new Recettes();
        $pdo = Connection::getPDO();
        $query = $pdo->query("SELECT * FROM recettes WHERE idrecette = " . $id);

        $results = $query->fetch(PDO::FETCH_ASSOC);
        if($results == false)
        {
            return $recette;
        }
        $recette->titre = $results["titre"];
        $recette->description = $results["description"];
        $recette->tempspre = $results["tempspre"];
        $recette->tempsrepo = $results["tempsrepos"];
        $recette->tempscuisson = $results["tempscuisson"];
        $recette->typeregime = $results["typeregime"];
        $recette->ingredients = $results["ingredients"];
        $recette->etapes = $results["etapes"];
        $recette->listeallergenes = $results["listeallergenes"];

        return $recette;
    }


}
