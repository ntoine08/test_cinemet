<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>page administarteur</title>
    <!--pour relier mon css-->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
</head>

<body>

<?php


include("connection.php"); // inclure la connection

?>
    <div>
        <form name="insertion" action="insertion.php" method="POST"> <!--formulaire pour la partie films -->
            nom_film : <input name="nom_film" type="text"><br>
            date_de_sortie_film : <input name="date_de_sortie_film" type="text"><br>
            duree_film : <input name="duree_film" type="text"><br>
            img_film : <input name="img_film" type="text"><br><br>
            

            <input type="submit" name="envoyer" value="envoyer"> <!--bouton pour envoyer-->
        </form>
    </div>

   <?php
    
        
    ?>

</body>
</html>