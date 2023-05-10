<?php

interface IRepository {
    public function authentification($username,$password);
    public function creationpatients(User $patients);
    public function creationrecettes(Recettes $recettes);
    public function getAllAllergenes();
    public function getRecettebyId($idrecette);
    public function getPatientByID($idPatient);

}