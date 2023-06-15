<!DOCTYPE html>
<html lang="en">
<?php include 'head.php'; ?>

<body>
    <?php include 'header.php'; ?>
    
    <main id="actu">
        <section class="princArticle">

            <h2 class="titre">Actualités</h2>

            <div>
                <div class="blocimg">
                    <img src="../images/image1.jpg" class="princimg" alt="image">
                    <h3 class="soustitre">Lorem</h3>
                </div>

                <h6 class="legende"><a href="">Catégorie ||</a>13/06/2023</h6>

                <div class="charticle">
                    <p class="chapeau">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Recusandae cum, unde similique eligendi expedita laboriosam blanditiis ipsam atque saepe.
                        Maiores dignissimos cum voluptatem ea ad,
                        consequuntur laudantium est deserunt. Quaerat.
                    </p>
                    <div class="cta">
                        <a href="article.html"><button class="boutonarticle">Lire l'article</button></a>
                    </div>
                </div>
            </div>
        </section>

        <section class="deuxArticles">
            <?php include 'cardArticle.php'; ?>
        </section>

        <section class="troisArticles">
            <?php include 'sidearticle.php'; ?>
            <?php include 'sidearticle.php'; ?>
            <?php include 'sidearticle.php'; ?>
        </section>
    <?php include 'footer.php'; ?>
</body>