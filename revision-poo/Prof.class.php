<?php


class Prof  extends Personne{

    private $specialite;
    private $experience;
    public function __construct($nom,$prenom,$age=20,$specialite=null,$experience=0) {
      parent::__construct($nom,$prenom,$age);
        $this->specialite = $specialite;
        $this->experience = $experience;

    }

    function afficher()  {
        parent::afficher();
        echo "Specialite :". $this->specialite;
        echo "<br>Experience :". $this->experience;
    }


}
