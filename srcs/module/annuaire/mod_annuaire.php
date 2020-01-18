<?php
//echo "Je suis la";
 require_once 'cont_annuaire.php';
class ModuleAnnuaire {
 	protected $controle;

 	public function __construct(){
 		$this->controle=new ContAnnuaire;
 		$this->controle->affiche_vueCont();
 		 if(isset($_GET['action'])){
 		 	$action=$_GET['action'];
 		 	switch ($action) {
 		 		case 'ajoutMateriel':
 		 		if(isset($_POST['type'])&&isset($_POST['description'])&&isset($_POST['etat'])&&isset($_POST['quantite'])){
 		 			$type=$_POST['type'];
 		 			$description=$_POST['description'];
 		 			$etat=$_POST['etat'];
 		 			$quantite=$_POST['quantite'];
 		 			$this->controle->ajout_Materiel($type,$description, $etat, $quantite);

 		 		}
 		 		break;
 		// 		default:
 		// 		break;
 		 	}
 		 }
 	


 }
}

// echo 'hhhh';
// $controle=new ContAnnuaire;
// $controle->affiche_tabMaterielCont();
//$mod = new $concatenation();
 ?>