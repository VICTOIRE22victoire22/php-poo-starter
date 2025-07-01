<?php

require_once 'Model/Livre.php'; // Charge la classe Livre  //require_once : inclure et exécuter un fichier une seule fois
require_once 'Model/Utilisateur.php'; // Charge la classe Utilisateur

// Instanciation de la classe Livre et Utilisateur
$petitPrince = new Livre();

// Hydratation des objets
$petitPrince
    ->setNom('Le Petit Prince') // Méthode du parent Produit
    ->setPrix(8) // Méthode du parent Produit
    ->setDescription('Le Petit Prince est un roman') // Méthode du parent Produit
    ->setCategorie('Fantastique') // Méthode du parent Produit
    ->setNbPage(128)
    ->setAuteur('Antoine de St-Exupery')
    ->setEdition('Gallimard')
    ->setIsbn('9783140464079');
    // L'opération de compléter un objet se nomme hydratation

    //---------------------------------------------------

    // Instanciation de la classe Utilisateur
    // $bob = newUtilisateur();

// $Bob
//     ->setNom('Bob')
//     ->setEmail('bob@gmail.com')
//     ->setIdentifiant('Bob10102000')
//     ->setDateInscription(new \DateTime('now'));

// // Affichage
// echo '<h1>Le livre nommé ' . $petitPrince->getTitre() . ' est entre les mains de ' . $Bob->getNom() . '.</h1>';

echo '<h1>Le livre coûte ' . $petitPrince->getPrixEuro() . '</h1>';
var_dump($petitPrince);  //afficher des informations détaillées sur une ou plusieurs variables
