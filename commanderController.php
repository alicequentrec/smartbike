<?php

include_once('../model/CommanderModel.php');

class CommandeController
{
    private $model;

    public function __construct(CommandeModel $model)
    {
        $this->model = $model;
    }

    public function traiterRequete()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nom = isset($_POST["nom"]) ? $_POST["nom"] : null;
            $prénom = isset($_POST["prénom"]) ? $_POST["prénom"] : null;
            $email = isset($_POST["email"]) ? $_POST["email"] : null;
            $message = isset($_POST["message"]) ? $_POST["message"] : null;

            if ($nom !== null) {
                $resultat = $this->model->enregistrerCommande($nom, $prénom, $email, $message);

                if ($resultat) {
                    echo "Enregistrement de la commande réussi";
                } else {
                    echo "Erreur ";
                }
            }
        }
    }
}

?>
