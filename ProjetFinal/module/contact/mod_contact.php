<?php
require_once 'cont_contact.php';

		// $controle=new ContContact;
 	// 	$controle->affiche_formulaire_contact();

 class ModuleContact {
 	protected $controle;

 	public function __construct(){
 		$this->controle=new ContContact;
 		$this->controle->affiche_formulaire_contact();
 		if(isset($_GET['action'])){
 			$action=$_GET['action'];
 			switch ($action) {
 				case 'envoi':
	 				if(isset($_POST['nom'])&& isset ($_POST['email'])&& isset ($_POST['message'])){
	 				$nom=$_POST['nom'];
	 				$email=$_POST['email'];
	 				$message=$_POST['message'];
	 				$this->controle->envoi_formulaire_contact($nom,$email,$message);
	 				}
 				break;
 				
 				default:
 					# code...
 				break;
 			
 			}
 		}
 	}	
  }
  // $m= new ModContact;
?>