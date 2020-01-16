<?php

require_once 'cont_accueil.php';

class ModuleAccueil{

	public function __construct () {
   		$controleur = new ControleurAccueil;
   		$controleur->lancerAcceuil();
    }

}
?>