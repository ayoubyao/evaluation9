<?php
require_once __DIR__ . '/../repository/repository.php';


session_start();

if (isset($_POST['username']) && isset($_POST['password'])) {
    $autorisation = new AutorisationController();
    $utilisateur = $autorisation->authentification($_POST['username'], $_POST['password']);
    if ($utilisateur != null) {
        // Si les informations d'identification sont correctes, créez une session
        $_SESSION['username'] = $_POST['username'];
        $_SESSION['email'] = $_POST['username'];
        $_SESSION['idutilisateur'] = $utilisateur['iduser'];
        $_SESSION['idRole'] = $utilisateur["idrole"];

        switch ($utilisateur["idrole"]) {
            case '3':
                //Redirection dans index.php
                header('Location: /index');
                break;

            case '4':
                header('Location: /indexPatient/' . $utilisateur['iduser'] . '/');
                break;
                
            default:
                # code...
                break;
        }
    }
    // error page en cas de non connexion
    else {
        header('Location: /connexion');
    }
}


class AutorisationController
{
    public $repo;

    function __construct()
    {
        $this->repo = new Repository();
    }

    public function authentification($username, $password)
    {
        return $this->repo->authentification($username, $password);
    }
}
