<?php
    try
    {
     $bdd = new PDO('mysql:host=localhost;dbname=test_cinemet;charset=utf8mb4', 'sunjian', 'ichigo08', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    }
    catch(Exception $e) 
    {
     die('Erreur '.$e->getMessage());
    }

    /*récupération des valeurs de champs
    $nom_film = $_POST["nom_film"];
    $date_de_sortie_film = $_POST["date_de_sortie_film"];
    $duree_film = $_POST["duree_film"];
    $img_film = $_POST["img_film"];
    $nationalite_film = $_POST["nationalite_film"];
    $synopsis_film = $_POST["synopsis_film"];

    //création de la requête sql
    $sql = "INSERT INTO films (nom_film, date_de_sortie_film, duree_film, img_film, nationalite_film, synopsis_film) VALUES ('$nom_film', '$date_de_sortie_film', '$duree_film', '$img_film', '$nationalite_film', '$synopsis_film')";

    $bdd -> exec ($sql);
    echo "c'est super, c'est génial"; */


    //préparation de la requête d'insertion sql
    $pdoStat = $bdd->prepare('INSERT INTO films VALUES (NULL, nom_film, date_de_sortie_film, duree_film, img_film)');

    //lié chaque marqueur à une valeur

    $pdoStat->bindValue('nom_film', $_POST['nom_film'], PDO::PARAM_STR);
    $pdoStat->bindValue('date_de_sortie_film', $_POST['date_de_sortie_film'], PDO::PARAM_STR);
    $pdoStat->bindValue('duree_film', $_POST['duree_film'], PDO::PARAM_STR);
    $pdoStat->bindValue('img_film', $_POST['img_film'], PDO::PARAM_STR);

    //éxécution de la requête préparé
    
    $insertIsOk = $pdoStat->execute();
    echo $insertIsOk

    /*if($insertIsOk)
    {
        $message = 'le film a été ajouté dans la bdd';
    }

    else
    {
        $message = 'tu l a dans le cul';
    } */


    
?>