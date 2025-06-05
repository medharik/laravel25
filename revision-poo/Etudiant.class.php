<?php
class Etudiant extends Personne {
    protected $fillier;

    public function __construct($nom,$prenom,$age,$fillier) {
        parent::__construct($nom,$prenom,$age);
        $this->fillier= $fillier;
    }
    function afficher() {
        echo "ETUDIANTS";
        parent::afficher();
        echo "filliere : $this->fillier";
    }
}
