

    <?php
$bdd = new PDO('mysql:host=localhost:3306;dbname=smartbike;charset=utf8', 'root', '');


$requete = "SELECT * FROM smartbike";
$resultat = $bdd->query($requete);
  

if ($resultat !== false) {
    
    $annonces = $resultat->fetchAll(PDO::FETCH_ASSOC);

?>
        <div class="annonce-container">
        <?php foreach ($annonces as $annonce): ?>
    <div class="annonce">
        <h2><?php echo $annonce['name']; ?></h2>
        <p><?php echo $annonce['Description']; ?></p>
        <a href='annonce.php?annonce=<?php echo $annonce['name']; ?>'>
            <img src="<?php echo $annonce['image']; ?>" alt="image">
        </a>
        <p class="prix">Prix : <?php echo $annonce['prix']; ?> €</p>
    </div>
    
<?php endforeach;  ?>

<?php 
    }

 ?>