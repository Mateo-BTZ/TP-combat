<?php
require 'config/init.php';
//require 'Personnage.php';



class Guerrier extends Personnage
  {
    private $_epee; // Indique la puissance du guerrier sur 100, sa capacité à donner un coup d'épee.
    
    public function coupEpee($perso)
    {
      $perso->recevoirDegats($this->_epee); // On va dire que le tir de l'archer représente sa force.
    }
    
    public function gagnerExperience()
    {
      // On appelle la méthode gagnerExperience() de la classe parente
      parent::gagnerExperience();
      
      if ($this->_epee < 100)
      {
        $this->_epee += 10;
      }
    }
  }

  ?>