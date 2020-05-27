<?php

$db = new PDO('mysql:host=localhost;dbname=tpcombat', 'root', '');
// On émet une alerte à chaque fois qu'une requête a échoué.
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING); 

   //On enregistre notre autoload.
   function chargerClasse($classname) {
    require 'class/' . $classname.'.php';
   }
 
   spl_autoload_register('chargerClasse');

   ?>