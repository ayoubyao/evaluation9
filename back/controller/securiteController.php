<?php
session_start();
// Fonction de vérification d'authentification
function require_auth()
{
    if (!isset($_SESSION['username'])) {
        header('Location: /connexion');
        exit;
    } 
}
?>