<?php
// Se connecter à la BDD
include("doc.php");

// Recuperer les informations du formulaire
$nom = $_POST['nom'];

// Stocker les infos en BDD

// ecrire la requête SQL
$sql = "INSERT INTO visiteurs ('nom') VALUES (?)";

// preparer la requete
$prepare = $c->prepare($sql);

// Executer la requête
$visiteur = $prepare->execute([$nom]);

// Renvoyer vers la page d'accueil
if($visiteur) {
    header("Location: visiteur.php");
} else {
    header("Location: error.php");
}