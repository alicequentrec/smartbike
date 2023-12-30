  <div class="annonces-container">
        <?php foreach ($articles as $annonce) { ?>
    <div class="annonce">
        <h2><?php echo $annonce['name']; ?></h2>
        <p><?php echo $annonce['Description']; ?></p>
        <a href='annonce.php?annonce=<?php echo $annonce['name']; ?>'>
            <img src="<?php echo $annonce['image']; ?>" alt="image">
        </a>
        <p class="prix">Prix : <?php echo $annonce['prix']; ?> €</p>
        <form action="commander.php" method="post">
            <input type="hidden" name="commander" value="<?php echo $annonce['name']; ?>">
            <input type="submit" name="name"id="btncommander" value="commander">
           
            <a href='détailsvelos.php?annonce=<?php echo $annonce['name']; ?>' id="btninfo">Plus d'infos</a>
        </form> 
    </div>
<?php  } ?>



