<!DOCTYPE html>
<html lang="en">
<?php include 'head.php'; ?>

<body>
    <?php include 'header.php'; ?>

    <main id="calendrier">
        <div class="partPrincipal">
            <h1 class="soustitre">Le calendrier</h1>
            <h3 class="chapeau">Venez nous voir jouer !</h3>
            <div class="partTwo">
                <div class="partEvent">
                    <h4>DATE</h4>
                    <h4>EVENEMENTS</h4>
                    <h4>ARTICLES</h4>
                </div>
                <iframe src="https://calendar.google.com/calendar/embed?height=400&wkst=2&bgcolor=%23ffffff&ctz=Indian%2FReunion&mode=MONTH&showNav=1&showPrint=0&showTabs=0&showTz=0&src=YTE0OTk0NTcwOTliOTAyNGFjODc4MmU5Y2RhZGIxNTEwY2QzMWZhMmQwYjhhNmYzNGU1OGE1YmRiZTY2OTkyZkBncm91cC5jYWxlbmRhci5nb29nbGUuY29t&src=ZnIucmUjaG9saWRheUBncm91cC52LmNhbGVuZGFyLmdvb2dsZS5jb20&color=%23AD1457&color=%230B8043" 
                style="border:solid 1px #777"  frameborder="0" scrolling="no">
                </iframe>
                <!-- <iframe class="partCalendrier" src="https://calendar.google.com/calendar/embed?src=a1499457099b9024ac8782e9cdadb1510cd31fa2d0b8a6f34e58a5bdbe66992f%40group.calendar.google.com&ctz=Indian%2FReunion" 
                    style="border: 0" width="100%" 
                    frameborder="0" scrolling="yes">
                </iframe> -->
            </div>
        </div>
        <div class="partSecondaire">
            <h3 class="chapeau">Trouver les stades</h3>
            <div class="partOne">
                <div class="partEvent">
                    <h4>Adresse</h4>
                    <p class="textearticle">Stade 1</p>
                    <p class="textearticle">123 avenue du Stade de Le Port</p>
                    <p class="textearticle">Stade 2</p>
                    <p class="textearticle">123 avenue du Stade 2 de Le Port</p>
                </div>
                <img class="mapPort" src="../images/carte_le_port.png" alt="plan de la ville de Le Port">
            </div>
        </div>
    </main>
    
    <?php include 'footer.php'; ?>
</body>