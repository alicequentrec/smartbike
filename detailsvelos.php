<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails du Vélo</title>
    <style> 
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color:  lightgreen;
}

#btncommander:hover {
    background-color: blue;
}

  #btncommander {
    
    background-color: green; 
    color: white; 
    border: none; 
    padding: 10px 20px;
    text-align: center; 
    text-decoration: none; 
    display: inline-block; 
    font-size: 16px;
    border-radius: 5px; 
}
    </style>
    
    <h1>Détails du Vélo</h1>
    <img src="<?php echo $veloDetails['photo'] ?? ''; ?>" alt="Photo du Vélo">
    <p>Description : <?php echo $veloDetails['description'] ?? ''; ?></p>
    <p>Prix : <?php echo $veloDetails['prix'] ?? ''; ?> €</p>
    <form action="commander.php" method="post">
    <input type="submit" name="name"id="btncommander" value="commander">
</html>
</head>
<?php include 'footer.php'; ?>



