<?php
require_once __dir__."/../../include/modele_generique.php";
class ModeleAnnuaire extends ModeleGenerique{

	public function __construct(){
		parent::initConnexion();
	}

	function Affiche_Materiel(){

		$req=(self::$bdd)->prepare("select * from TypeMateriel t right join Materiel m on t.idTypeMateriel=m.idTypeMateriel");
		//select * from TypeMateriel t inner join Materiel m on t.idTypeMateriel=m.idTypeMateriel
		$req->execute();
		$row=$req->fetchAll();
	return $row;

	}
	 function inserer_ligne($type,$description,$etat, $quantite){
	 	try{
	 	$req=(self::$bdd)->prepare("INSERT INTO Materiel(`Description`,`Etat`,`Quantite`,`idTypeMateriel`) VALUES ( ?, ?, ?,? )");
	 	$req->execute(array($description,$etat, $quantite,$type));
	 	//$req1=(self::$bdd)->prepare("INSERT INTO TypeMateriel(`NomTypeMateriel`) VALUES(?) ");
	 	$req1->execute(array($type));

		 }	catch(PDOException $erreur){
	            	echo 'La connexion a échoué :'. $erreur->getMessage();
	        }

	}

	function getTypeMateriel(){
		$req = self::$bdd->prepare("SELECT * FROM TypeMateriel");
			try {
	            $req->execute();
	            $row = $req->fetchAll();
	        } catch (PDOException $e) {
	            throw new PDOException;
	        }
			return $row;
	}
	
}
?>