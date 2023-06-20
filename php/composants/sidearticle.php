<!-- <div class="sideArticle">
    <img src="../images/image1.jpg" alt="image">
    <div>
        <h3 class="intertitre">Lorem</h3>
        <p class="textearticle">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
            Velit fugit fuga minus ipsum. Unde fuga, 
            voluptates mollitia ab eveniet velit enim ratione, 
            fugiat sapiente libero, 
            ex nobis excepturi non obcaecati?
        </p>
        <h6 class="legende"><a href="">Catégorie ||</a>13/06/2023</h6>
        <div class="cta">
            <a href="../html/article.html"><button class="boutonarticle">Lire l'article</button></a>
        </div> 
    </div>
</div> -->

<?php
require_once 'composants/config.php';
try{
  $connect = new PDO ("mysql:host=$serveur;dbname=$base_de_donnees",$utilisateur,$mot_de_passe);    
  $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // Gestion des erreurs de connexion
    die("Erreur de connexion à la base de données : " . $e->getMessage());
}

$table_article = $connect -> prepare('SELECT * FROM articles');
$table_article->execute();
$articles = $table_article-> fetchAll(PDO::FETCH_ASSOC);

$idcategorie = 'idCategorie';
$titre = 'titre';
$chapeau ='resume';
$date = 'dateDePublication';

foreach ($articles as $article){
  echo 
  '<div class="sideArticle">
        <img src="' . $article['image'] . '" class="princimg" alt="image">
        <div> 
            <h3 class="intertitre">' . $article[$titre] . '</h3>
            <p class="textearticle">' . $article[$chapeau] . '</p>      
            <h6 class="legende"><a>' . $article[$idcategorie] . '</a>|| ' . $article[$date] . '</h6>
            <div class="cta">
                <a href="../html/article.html"><button class="boutonarticle">Lire article</button></a>
            </div> 
        </div>
    </div>';
}