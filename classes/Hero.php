<?php

class Hero
{
    // Propriété
    private $nom;
    private $santer;

    /**
     * Constructeur
     *
     * @param string $nom
     * @param int $santer
     */
    public function __construct($nom, $santer)
    {
        $this->santer = $santer;
        $this->nom = $nom;
    }

    public function getNom()
    {
        return $this->nom;
    }
}
