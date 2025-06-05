<?php
class Personne {
//attributs
    private $nom;
    protected $prenom;
    public $age;
//role principal du constructeur : initialiser les attributs
    public function __construct($nom,$prenom,$age=0) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->age = $age;
    }
    // contruire un objet (ali,rim)  a partir de classe personne, grace au contructeur
    // $ali=new Personne("alami","ali",19);
    // $rim=new Personne("rima","rim",29);


    function afficher(){
        echo $this->nom."<br>";
        echo $this->prenom."<br>";
        echo $this->age."<br>";
    }
    // $ali->afficher();//$this====ali
    // $rim->afficher();//$this====rim
}


?>
