<?php

class Utilisateur
{
    private string $nom;
    private string $email;
    private string $identifiant;
    private \DateTime $dateInscription;



    /**
     * Get the value of nom
     */ 
    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     * Muter la valeur : nom
     * @return  self
     */ 
    public function setNom(string $nom): Utilisateur
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * Set the value of email
     * Muter la valeur : titre
     * @return  self
     */ 
    public function setEmail(string $email): Utilisateur
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of indentifiant
     */ 
    public function getIdentifiant(): string
    {
        return $this->identifiant;
    }

    /**
     * Set the value of indentifiant
     * Muter la valeur : titre
     * @return  self
     */ 
    public function setIdentifiant(string $indentifiant): Utilisateur
    {
        $this->identifiant = $indentifiant;

        return $this;
    }

    /**
     * Get the value of dateInscription
     */ 
    public function getDateInscription(): \DateTime
    {
        return $this->dateInscription;
    }

    /**
     * Set the value of dateInscription
     * Muter la valeur : titre
     * @return  self
     */ 
    public function setDateInscription(dateTime $dateInscription): Utilisateur
    {
        $this->dateInscription = $dateInscription;

        return $this;
    }
}
