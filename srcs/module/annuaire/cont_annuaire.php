<?php
//echo "je fonctionne avant";
require_once 'vue_annuaire.php';
require_once 'modele_annuaire.php';
class ContAnnuaire{
	private $model;
	private $vue;

	public function __construct(){
		$this->model=new ModeleAnnuaire;
		$this->vue=new VueAnnuaire;
	}
	
	 function affiche_vueCont(){
	 	echo "cest lui";
	 	$mat = $this-> model->Affiche_Materiel();
	 	$this-> vue->affiche_vue();
		foreach($mat as $n => $m)
			$this-> vue->affiche_MaterielVue($m['NomTypeMateriel'],$m['Description'],$m['Etat'],$m['Quantite'], $n);
	 	$this-> vue->inserer_ligne($this->model->getTypeMateriel());


	}
	function ajout_Materiel($type,$description, $etat, $quantite){
		$this->model->inserer_ligne($type,$description,$etat, $quantite);
		header("Location: #");
	}

	/*function reserverMateriel(){
		
		$this->model->reserverMateriel();
	}*/
	

} 
?>