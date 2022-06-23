è<?php
require_once('connexion.php')
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/cb22034692.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    

    <title>Document</title>
    <link rel="stylesheet" href="CSS/stylesheet.css">
</head>


<body>
    <div id="entete">
        <div class="sticky">
            <p>ALEM Daya-Eddine</p>
            <p>Développeur Web</p>
        </div>
        <img class="banniere" src="images/2244(1).jpg" alt="">
        <h1>Bienvenue sur mon Portfolio !</h1>



        
        <!-- LIEN PAGE -->
    
    <div class="lien">
        <a href="index.php" class="lienprojet">     <img src="images/projet.png"> <br> Projets</a>
        <a href="cv.php" class="liencv">     <img src="images/RESUME.png"> <br> CV</a>
        <a href="presentation.php" class="lienpresentation"> <img src="images/presentation.png" width="60px" height="70px"> <br> Présentation</a>
    </div>



        <!-- FORMULAIRE DE RECHERCHE -->
        <div id="recherche">
            <form method="post">
            <input id="motcle" name="motcle" class="motcle" type="text" placeholder="Entrer une compétence...  ">
            <input class="btsubmit" name="btsubmit" type="submit" VALUE="🔍" >
            </form>
        </div>
    </div>



        <!-- GALLERY (AFFICHAGE)-->
        <?php include('fonction.php')?>;



    
    
</body>
</html>