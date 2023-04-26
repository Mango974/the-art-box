<?php include_once 'header.php'; ?>
<main>
<?php
require 'oeuvres.php';

  //on verifie que la variable est definie et qu'elle existe  comme clé dans le tableau     
    if (isset($_GET['id']) && array_key_exists($_GET['id'], $tableau)) {
        $id = $_GET['id']; //recuprération de l'id de l'oeuvre
        $oeuvre = $tableau[$id-1]; 
?>
        <article id="detail-oeuvre">
         <?php echo $oeuvre['id']; ?>
            <div id="img-oeuvre">
                <img src=<?php echo $oeuvre['image']?>> 
            </div>
            <div id="contenu-oeuvre">
            <h1><?php echo $oeuvre['nom']?></h1>
            <p><?php echo $oeuvre['auteur']?></p>
            <p><?php echo $oeuvre['description']?></p>
            </div>
        </article>
<?php }?>

</main>
<?php require 'footer.php'; ?>
</body>
</html>