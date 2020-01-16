<?php
require_once __dir__."/../../include/modele_generique.php";
class ModeleContact extends ModeleGenerique{

	public function __construct(){
		parent::initConnexion();
	}
	function envoyerMessage($nom,$email, $message){
		try{
			
			$req =  (self::$bdd)->prepare("insert into contact values(DEFAULT,?,?,?)");
				$req->execute(array($nom,$email,$message));
            	
		}catch(PDOException $erreur){
            	echo 'La connexion a échoué :'. $erreur->getMessage();
        }

		return $tab;
		
	}
}
?>