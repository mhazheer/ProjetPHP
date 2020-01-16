<?php

require_once 'modele_accueil.php';
require_once 'vue_accueil.php';

class ControleurAccueil {

	private $vue;
	private $modele;

	public function __construct () {
   		$this->modele = new ModeleAccueil();
		$this->vue = new VueAccueil();
    } 

    public function lancerAcceuil() {
    	$this->vue->afficherContenu();
    }

}