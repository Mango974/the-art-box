<?php include 'header.php'; ?>

    <main>
        <div id="liste-oeuvres">
            <?php include 'oeuvres.php'; 
                
            foreach ($tableau as $oeuvre => $vignette){
               
                ?>
                <article class="oeuvre">
                <a href="oeuvre.php?id=<?php echo $vignette['id']; ?>">
                        <img src=<?php echo $vignette['image']?>>
                        <h2><?php echo $vignette['nom']?></h2>
                        <p><?php echo $vignette['auteur']?></p>
                    </a>
                </article>
                
            <?php }?>
        </div>
    </main>
    <?php require 'footer.php'; ?>
</body>
</html>