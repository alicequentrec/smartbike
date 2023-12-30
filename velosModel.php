<?php
include_once('bdd.php');

class VelosModel
{
    private $bdd;

    public function __construct()
    {
        $this->bdd = Bdd::connexion();
    }

    public function getArticles()
    {
        $query = "SELECT * FROM article";
        $stmt = $this->bdd->prepare($query);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getArticleById($id)
    {
        $query = "SELECT * FROM article WHERE id = :id";
        $stmt = $this->bdd->prepare($query);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

public function getvelosdetails($id)
{
    $query = "SELECT * FROM article WHERE id = :id";
    $stmt = $this->bdd->prepare($query);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();

    return $stmt->fetch(PDO::FETCH_ASSOC);
}
}
?>
