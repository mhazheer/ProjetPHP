<?php

require_once 'cont_connexion.php';
require_once __dir__ .'/../../include/modele_generique.php';
	
	class ModeleConnexion extends ModeleGenerique {
		protected static $bdd;


		public function __construct(){
			parent::initConnexion();
		}

		public function connexion($id,$mdp){
			session_start();
			$req =  (self::$bdd)->prepare("SELECT identifiant from Membre where identifiant=? and Mdp=?;");
			$req->bindParam(1, $id);
            $req->bindParam(2, $mdp);
           
            try {
            	$req->execute();
            	$row = $req->fetch();
            	if ($row["identifiant"]) {

                    (self::$bdd)->exec("UPDATE membre SET dernierConnexion=CURRENT_TIMESTAMP where id=" . $row["identifiant"] . ";");
                    
                    $infosUser = self::getInfosUtilisateur($row["identifiant"]);

                    $_SESSION["id"] = $row["identifiant"];
                    echo isset($_SESSION["id"]);
                    return true; 
                }
            }catch(PDOException $erreur){
            	echo 'La connexion a échoué :'. $erreur->getMessage();
            }
            return false;
		}

		public function inscription($id, $mdp, $mail){
	       	/*if ($id != null and $pass != null) {
        		$req = parent::$connexion->prepare("SELECT id from logs where id=?");
        		$tab=array($id);
        		$req->execute($tab);
        		$fetch = $req->fetch();*/

		        if (utilisateurExist($id)){
		            return 0; //Identifiant déjà existant
		        }else {
			        $req = parent::$bdd->prepare("INSERT INTO membre('identifiant', 'Mdp', 'Mail') VALUES(?, ?,?);");
			        $req->bindParam(1, $id);
	        		$req->bindParam(2, $mdp);
	        		$req->bindParam(3, $mail);

			        echo "Inscription effectuée !";
			        return 1; // Connexion du nv utilisateur réussie
			        try{
			        	$req->execute();
			        }catch(PDOException $erreur){
			          	die('L\'inscription a échoué : '.$erreur->getMessage());
			        }
		    	/*}else {
		    	 echo "Vos champs ne sont pas tous remplis";
		    	}Dans le controleur*/
				}
		}

		public function getInfosUtilisateur($id){
			$req = (self::$bdd)->prepare("SELECT * from membre WHERE identifiant = ? ;");
	        $req->bindParam(1, $id);
	        try {
	            $req->execute();
	            $row = $req->fetch();
	        } catch (PDOException $e) {
	            throw new PDOException;
	        }
	        return $row;
		}

		public function getPrenomUtilisateur($id){
			$req = (self::$bdd)->prepare("SELECT prenom from membre WHERE identifiant = ? ;");
	        $req->bindParam(1, $id);
	        try {
	            $req->execute();
	            $row = $req->fetch();
	        } catch (PDOException $e) {
	            throw new PDOException;
	        }
	        //return $row["prenom"];
	        return $row;
		}

		public function verifMailInscriptionExist($mail){//a changer
	        $req= (self::$bdd)->prepare("SELECT count(idMembre) FROM membre where mail=? ;");//histoire des mail! vOir avec Steven
	        try{
	            $req->bindParam(1, $mail);
	            $req->execute();
	        }catch(PDOException $e){
	         	return FALSE;
	        }
	        return $req->fetch()[2];
	  	}
		
		public function utilisateurExist($id){ //je confond peut-être log et membre ... 
	        $req = (self::$bdd)->prepare("SELECT identifiant from membre where identifiant=?;");
	        $req->bindParam(1, $id);
	        try {
	            $req->execute();
	        } catch (PDOException $e) {}
	        return $req->rowCount();
	    }
	}
?>




	