<?php

class Heros
{
    // Propriété
    private $nom;
    private $arme;
    private $sante;

    /**
     * Constructeur
     *
     * @param string $nom
     * @param Arme $arme
     * @param int $sante
     */
    public function __construct($nom, $arme, $sante = 100)
    {
        $this->nom = $nom;
        $this->arme = $arme;
        $this->sante = $sante;
    }

    // Récupérer son nom
    public function getNom()
    {
        return $this->nom;
    }
    // Récuperer son arme
    public function getArme()
    {
        return $this->arme;
    }
    // Récuperer sa santé
    public function getSante()
    {
        return $this->sante;
    }

    // Recevoir des dégats
    public function recevoirDegats($quantite)
    {
        $this->sante -= $quantite;
    }

    // Attaquer un autre héros
    public function attaquer($ennemi)
    { // $ennemi contient l'objet de l'autre héros  

        $nb = rand(0, 2);

        if ($nb == 0) {
            // Récupération des dégâts faits par l'arme du héros
            $degats_infliges = $this->arme->getDegats();

            // Soustraire les dégâts de la santé de l'ennemi
            $ennemi->recevoirDegats($degats_infliges);

            return "$this->nom attaque " . $ennemi->getNom() . " et lui inflige $degats_infliges de dégâts";
        }

        if ($nb == 1) {
            return "$this->nom attaque " . $ennemi->getNom() . " et n'a pas réussi";
        }


        // Récupération des dégâts faits par l'arme du héros
        $degats_infliges = $this->arme->getDegats() * 4;

        // Soustraire les dégâts de la santé de l'ennemi
        $ennemi->recevoirDegats($degats_infliges);

        return "$this->nom effectue une attaque critique sur " . $ennemi->getNom() . " et lui inflige $degats_infliges de dégâts";
    }

    /**
     * Détermine si le héros est vivant
     *
     * @return bool
     */
    public function estVivant()
    {
        return $this->sante > 0;
    }
}
