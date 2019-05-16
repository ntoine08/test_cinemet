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

    <div>
        <form name="insertion" action="requete.php" method="POST"> <!--formulaire pour la partie films -->
            nom : <input name="nom" type="text" id='nom'><br>
            prénom : <input name="prenom" type="text" id='prenom'><br><br>
            
            

            <input type="submit" name="envoyer" value="envoyer"> <!--bouton pour envoyer-->
        </form>
    </div>


</body>
</html>