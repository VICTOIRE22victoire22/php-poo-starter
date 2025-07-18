<?php

require_once 'Produit.php';

class Livre extends Produit
{
    private int $nbPage;
    private string $auteur;
    private string $edition;
    private string $isbn = 'Non renseigné';

    /**
     * Get the value of nbPage
     */ 
    public function getNbPage(): int  //méthode publique pour accéder à cette propriété 
    {
        return $this->nbPage;
    }

    /**
     * Set the value of nbPage
     * Muter la valeur : titre
     * @return  self
     */ 
    public function setNbPage(int $nbPage): Livre
    {
        $this->nbPage = $nbPage;

        return $this;
    }

    /**
     * Get the value of auteur
     */ 
    public function getAuteur(): string
    {
        return $this->auteur;
    }

    /**
     * Set the value of auteur
     * Muter la valeur : titre
     * @return  self
     */ 
    public function setAuteur($auteur): Livre
    {
        $this->auteur = $auteur;

        return $this;
    }

    /**
     * Get the value of edition
     */ 
    public function getEdition(): string
    {
        return $this->edition;
    }

    /**
     * Set the value of edition
     * Muter la valeur : titre
     * @return  self
     */ 
    public function setEdition($edition): Livre
    {
        $this->edition = $edition;

        return $this;
    }

    /**
     * Get the value of isbn
     */ 
    public function getIsbn(): string
    {
        return $this->isbn;
    }

    /**
     * Set the value of isbn
     * Muter la valeur : titre
     * @return  self
     */ 
    public function setIsbn($isbn): Livre
    {
        $this->isbn = $isbn;

        return $this;
    }
}

