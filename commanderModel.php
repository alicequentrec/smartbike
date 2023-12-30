<?php

class CommandeModel
{
    private $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function enregistrerCommande($nom, $prénom, $email, $message)
    {
        $requete = $this->pdo->prepare("INSERT INTO commande (nom, prénom, email, message) VALUES (?, ?, ?, ?)");

        if ($requete === false) {
            die("Erreur : " . $this->pdo->errorInfo()[2]);
        }

        $requete->bindParam(1, $nom);
        $requete->bindParam(2, $prénom);
        $requete->bindParam(3, $email);
        $requete->bindParam(4, $message);

        if ($requete->execute()) {
            return true;
        } else {
            die("Erreur: " . $requete->errorInfo()[2]);
        }
    }
}
?>
