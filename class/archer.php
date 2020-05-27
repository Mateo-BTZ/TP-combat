<?php
require 'config/init.php';
//require 'Personnage.php';


class Archer extends Personnage
  {
    private $_tir; // Indique la puissance de l'archer sur 100, sa capacité à tirer à l'arc.
    
    public function tirDeFleche($perso)
    {
      $perso->recevoirDegats($this->_tir); // On va dire que le tir de l'archer représente sa force.
    }
    
    public function gagnerExperience()
    {
      // On appelle la méthode gagnerExperience() de la classe parente
      parent::gagnerExperience();
      
      if ($this->_tir < 100)
      {
        $this->_tir += 10;
      }
    }
  }

  ?>