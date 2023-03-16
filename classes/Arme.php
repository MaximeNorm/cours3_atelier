<?php

class Arme
{
    // Propriétés
    private $degats;
    private $nom;

    /**
     * Constructeur
     *
     * @param string $nom
     * @param int $degats
     */
    public function __construct($nom, $degats)
    {
        $this->degats = $degats;
        $this->nom = $nom;
    }

    /**
     * Retourne le nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Changer le nom
     *
     * @param string $nouveau_nom
     * @return void
     */
    public function setNom($nouveau_nom)
    {
        if ($nouveau_nom == "") {
            trigger_error("Le nom fourni n'est pas valide", E_USER_WARNING);
            exit();
        }
        $this->nom = $nouveau_nom;
    }

    /**
     * Retourne la quantité de dégats infligés par l'arme
     *
     * @return int
     */
    public function getDegats()
    {
        return $this->degats;
    }
}
