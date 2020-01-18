<?php
require_once __dir__."/../../include/modele_generique.php";
class ModeleContact extends ModeleGenerique{

	public function __construct(){
		parent::initConnexion();
	}
	function envoyerMessage($nom,$email, $message){
		try{
			$req =  (self::$bdd)->prepare("INSERT INTO `contact`(`nom`,`email`,`message`) VALUES (?,?,?)");
			$req->bindParam(1,$nom);
			$req->bindParam(2,$email);
			$req->bindParam(3,$message);
				$req->execute();
			
            	
		}catch(PDOException $erreur){
            	echo 'La connexion a échoué :'. $erreur->getMessage();
        }

		return 1;
		
	}
}
?>