<?php
require_once 'vue_contact.php';
require_once 'modele_contact.php';
class ContContact{
	private $model;
	private $vue;

	public function __construct(){
		$this->model=new ModeleContact;
		$this->vue=new VueContact;
	}

	function affiche_formulaire_contact(){
		$this->vue->affiche_formulaire_contact();
	}

	function envoi_formulaire_contact($nom,$email,$message){
		$this->model->envoyerMessage($nom,$email,$message);
	}
}

?>