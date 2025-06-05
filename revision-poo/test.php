<?php
require_once("Personne.class.php");
require_once("Prof.class.php");
require_once("Etudiant.class.php");
// contruire (instancier) un objet (othmane) de classe personne
//en appelant le contructeur
// INSTANCIATION (CONTRUCTION)
$othmane=new Personne("ALAMI","ali");
$othmane->afficher();

$rim=new Personne("rima","rim",12);
$rim->afficher();

$armel=new Prof("Armeli","armel",40,'PYTHON',10);
$armel->afficher();

$mohamed = new Etudiant("bakhalid" , "mohamed" , 21 , "DI");
$mohamed->afficher();


?>
