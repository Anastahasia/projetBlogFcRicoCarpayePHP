<!DOCTYPE html>
<html lang="en">
<?php include 'head.php'; ?>

<body>
    <?php include 'header.php'; ?>
    
    <main id="article">
        <!-- Partie 1 avec l'article -->
        <section class="partOne">
            <h2 class="titre">Titre</h2>
            <p class="chapeau charticle">              
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                Velit fugit fuga minus ipsum. Unde fuga, 
                voluptates mollitia ab eveniet velit enim ratione, 
                fugiat sapiente libero, 
                ex nobis excepturi non obcaecati?
            </p>

            <div class="blocimg">
                <hr>
                <img src="../images/image1.jpg" class="princimg" alt="image">
                <h6 class="legende">Date</h6>
            </div>  

            <h3 class="intertitre">Intertitre</h3>
            <p class="textearticle">                    
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                Velit fugit fuga minus ipsum. Unde fuga, 
                voluptates mollitia ab eveniet velit enim ratione, 
                fugiat sapiente libero, 
                ex nobis excepturi non obcaecati?
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                Velit fugit fuga minus ipsum. Unde fuga, 
                voluptates mollitia ab eveniet velit enim ratione, 
                fugiat sapiente libero, 
                ex nobis excepturi non obcaecati?
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                Velit fugit fuga minus ipsum. Unde fuga, 
                voluptates mollitia ab eveniet velit enim ratione, 
                fugiat sapiente libero, 
                ex nobis excepturi non obcaecati?
            </p>

            <h3 class="intertitre">Intertitre</h3>
            <p class="textearticle">                    
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                Velit fugit fuga minus ipsum. Unde fuga, 
                voluptates mollitia ab eveniet velit enim ratione, 
                fugiat sapiente libero, 
                ex nobis excepturi non obcaecati?
            </p>
                <div class="cta">
                    <a href="actualité.html"><button class="bouton">Voir toute l'actus</button></a> 
                </div>             
        </section>

        <!-- Partie 2 avec le carrousel -->

        <section class="partTwo">

          <h2 class="chapeau">Plus de photos</h2>
            <!-- test 1 carrousel bootstrap  -->
            <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active carrousel">
                    <img src="../images/CARROUSEL.jpg" class="d-block w-100" alt="..." >
                  </div>
                  <div class="carousel-item carrousel">
                    <img src="../images/image1.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item carrousel">
                    <img src="../images/ACCEUIL.jpg" class="d-block w-100" alt="...">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>

        </section>

    </main>
    
    <?php include 'footer.php'; ?>
</body>