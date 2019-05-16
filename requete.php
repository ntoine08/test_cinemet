<?php
    try
    {
     $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8mb4', 'sunjian', 'ichigo08');
    }
    catch(Exception $e) 
    {
     die('Erreur '.$e->getMessage());
    }
// générique pour pouvoir me connecter à la bdd


$nom = $_POST['nom'];
$prenom = $_POST['prenom'];

$sql = $bdd->prepare("INSERT INTO personne (nom, prenom) VALUES ('$nom', '$prenom')");
$sql->execute();

echo "cboncamarcheenfin";











?>