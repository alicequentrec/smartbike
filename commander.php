<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Commander</title>
  <link rel="stylesheet" href="commander.php">
</head>
<body>
<div class="container">
    <h1>Passer une commande</h1>
    <p>Remplissez le formulaire ci-dessous pour passer votre commande :</p>
    
    <form action="commander.php" method="post">
     
      <label for="velo">Sélectionnez un vélo :</label>
      <select id="velo" name="velo">
     
        <option value="1">Vélo tout chemin riverside 100</option>
        <option value="2">Fiido D3 Pro mini vélo électrique</option>
        <option value="2">Vélo de ville elops 540 cadre bas</option>
        <option value="2">Cyrusher Kommoda L'hybride</option>
      
      </select>

      <label for="nom">Nom :</label>
      <input type="text" id="nom" name="nom" placeholder="Votre nom" required>

      <label for="prenom">Prénom :</label>
      <input type="text" id="prenom" name="prenom" placeholder="Votre prénom" required>

      <label for="email">Email :</label>
      <input type="email" id="email" name="email" placeholder="Votre email" required>

      <label for="message">Message :</label>
      <textarea id="message" name="message" rows="4" placeholder="Saisissez votre message ici..." required></textarea>

     

      <button type="submit">Envoyer</button>
    </form>
  </div>
<style>
body {
  font-family: 'Arial', sans-serif;
  margin: 0;
  padding: 0;
  background-color: lightblue;
}

.container {
  max-width: 800px;
  margin: 50px auto;
  padding: 20px;
  background-color: #fff;
  border-radius: 5px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h1 {
  color: #333;
}

p {
  color: #666;
}

.commande-form {
  margin-top: 20px;
}

label {
  display: block;
  margin-bottom: 8px;
  color: #333;
}

select,
input,
textarea {
  width: 100%;
  padding: 10px;
  margin-bottom: 15px;
  box-sizing: border-box;
  border: 1px solid #ccc;
  border-radius: 4px;
}

button {
  background-color: #3498db;
  color: #fff;
  padding: 10px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

button:hover {
  background-color: #2980b9;
}
</style>
</body>
</html>

<?php
$pdo = new PDO("mysql:host=localhost:3306;dbname=smartbike", "root", "", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

if (!$pdo) {
    die("Connexion échouée");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = isset($_POST["nom"]) ? $_POST["nom"] : null;
    $prénom = isset($_POST["prénom"]) ? $_POST["prénom"] : null;
    $email = isset($_POST["email"]) ? $_POST["email"] : null;
    $message = isset($_POST["message"]) ? $_POST["message"] : null;
    if ($nom !== null) {
        $requete = $pdo->prepare("INSERT INTO commande (nom, prénom, email, message) VALUES (?, ?, ?, ?)");
        if ($requete === false) {
            die("Erreur" . $pdo->errorInfo()[2]);
        }

        $requete->bindParam(1, $nom);
        $requete->bindParam(2, $prénom);
        $requete->bindParam(3, $email);
        $requete->bindParam(4, $message);

        if ($requete->execute()) {
            echo "Enregistrement de la commande réussi";
        } else {
            echo "Erreur" . $requete->errorInfo()[2];
        }
    }
}

$pdo = null;
?>
