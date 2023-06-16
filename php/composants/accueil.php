<head>
    <title>Accueil</title>
</head>
<main id="accueil">
    <!-- partie premier article et la case événement de droite -->
    <section class="partOne">
        <!-- partie de l'article main -->
        <div class="mainArticle">
            <h2 class="soustitre">Lorem</h2>
            <img src="../images/image1.jpg" alt="image" class="imgMain">
            <h6 class="legende"><a href="">Catégorie ||</a>13/06/2023</h6>
            <p class="chapeau">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Velit fugit fuga minus ipsum. Unde fuga,
                voluptates mollitia ab eveniet velit enim ratione,
                fugiat sapiente libero,
                ex nobis excepturi non obcaecati?
            </p>
            <div class="cta">
                <a href="index.php?page=article"><button class="boutonarticle">Lire l'article</button></a>
            </div>
        </div>
        <!-- la case événement à droite -->
        <div class="evenement">
            <h3 class="intertitre">Nos evenements</h3>
            <div class="mainevent">
                <div class="event">
                    <p class="textearticle date">date</p>
                    <p class="textearticle">Evenement, en bref des evenements</p>
                </div>
                <hr>
                <div class="event">
                    <p class="textearticle date">date</p>
                    <p class="textearticle">Evenement, en bref des evenements</p>
                </div>
                <hr>
                <div class="event">
                    <p class="textearticle date">date</p>
                    <p class="textearticle">Evenement, en bref des evenements</p>
                </div>
                <hr>
                <div class="cta">
                    <a href="../html/calendrier.html"><button class="bouton boutonAccueil">Voir le calendrier</button></a>
                </div>
            </div>

        </div>

    </section>
    <!-- deuxième partie  -->
    <section class="troisArticles">
        <?php include 'sidearticle.php'; ?>
        <?php include 'sidearticle.php'; ?>
        <?php include 'sidearticle.php'; ?>
    </section>
</main>