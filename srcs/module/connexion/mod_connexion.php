<?php

require_once 'cont_connexion.php';

class ModuleConnexion{
	
	protected $controleur;
	public function __construct(){
		$this->controleur = new ContConnexion;
		$this->controleur->formulaireConnexionCont();

		$action = isset($_GET['action'])? $_GET['action'] : "vide"; 
		switch ($action) {
			case 'idOk':
				$this->controleur->connexionUtilisateur();
				break;
			case 'inscription':
				$this->controleur->formulaireInscriptionCont();
			default:
				
				break;
		}
		echo "sorti switch case mod_connexion.php";
					echo isset($_SESSION["id"]);
		}
	}
?>