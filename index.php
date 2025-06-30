<?php

require_once 'Model/Livre.php'; // Charge la classe Livre
require_once 'Model/Utilisateur.php'; // Charge la classe Livre

//Instanciation de la classe Livre
$petitPrince = new Livre(); // Ceci est un objet issue de la classe Livre
$Bob = new Utilisateur();

$petitPrince
    ->setTitre('Le Petit Prince')
    ->setNbPage(128)
    ->setAuteur('Antoine de St-Exupery')
    ->setEdition('Gallimard')
    ->setIsbn('9783140464079')
;  // L'opération de compléter un objet se nomme hydratation

$Bob
->setNom('Bob')
->setEmail('bob@gmail.com')
->setIdentifiant('Bob10102000')
->setDateInscription(new \DateTime('now'))
;  // L'opération de compléter un objet se nomme hydratation

echo '<h1>Le livre nommé ' . $petitPrince->getTitre() . ' est entre les mains de ' . $bob->getNom() . '.</h1>';

var_dump($petitPrince, $Bob);  // -> get Titre