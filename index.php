<!DOCTYPE html>
<html lang="en">
    
<?php include 'head.php'; ?>

<body>
    <?php include 'header.php'; ?>

    <?php 
        if(isset($_GET['page'])){
            $page = $_GET['page'];
        
            switch($page){
                case 'contact':
                    include ('contact.php');
                    break;
                case 'actualite':
                    include ('actualite.php');
                    break;
                case 'forum':
                    include ('forum.php');
                    break;
                case 'calendrier':
                    include ('calendrier.php');
                    break;
                    case 'classement':
                        include ('classement_competition.php');
                        break;
                    case 'article':
                        include ('article.php');
                        break;
                    default:
                include ('index.php');
            }
        }else{
            include('composants/accueil.php');
        }
    ?>

    <?php include 'footer.php'; ?>
</body>