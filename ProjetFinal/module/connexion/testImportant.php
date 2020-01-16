/*public function connexionUtilisateur(){
			$id= self::getID();
			$mdp= self::getMDP();
            if((!empty($id) && !empty($mdp))){
                $mdpHasher = hash("sha256",$mdp,false);
                $resultat = $this->modele->connexion($id, $mdp); 
                if(empty($resultat)){
                   $arr = array('Erreur resultat VIDE' => true);
                   echo json_encode($arr);
                }
                else
                	self::seConnecter($id);
            }
            else{
	            $msgErreur = array('Non trouver ' => true);
	            echo json_encode($msgErreur);	
	        }
		}

		public function inscriptionUtilisateur(){
			$id= getID();
			$mdp= getMDP();
			if((!empty($id) && !empty($mdp))){
				$mdpHasher = hash("sha256",$mdp,false);
				$resultat = $this->modele->inscription($id,$mdp);
				switch($resultat){
					case 1:
						echo "Inscription effectuée";
						seConnecter($id);
						break;
					case 0:
					    echo "Identifiant déjà existant";
						break;
				}
			}
			else 
				echo "Vos champs ne sont pas tous remplis";


			if(isset($_POST["id"]) && $_POST["id"] !=""
				&& isset($_POST["email"]) && $_POST["email"] !=""
				&& isset($_POST["mdp"]) && $_POST["mdp"] !="" 
				&& isset($_POST["mdpConf"]) && $_POST["mdpConf"] !=""){ //voir avec empty méthode de steven
				$id=getID();
				$mail=getEMAIL();
				$mdp=getMDP();
				$mdpConf=getMDP_CONF();

				if($mdp != $mdpConf){
					$this->vue->afficherErreur("Les mot de passes ne sont pas identique !");
				}else{
					if($this->modele->verifMailInscriptionExist($mail)){
						$this->vue->afficherErreur("L'adresse mail est déja utilisé !");
					}else{
						if(actif??){
						//envoyer mail automatique
						}else{
							if($this->modele->inscription($id, hash("sha256", $mdp, false), $mail){
								 //header("Location: ./index.php?module=profil");//transfere vers profil !
							}else{
								 $this->vue->afficherErreur("Inscription échoué");
							}
						}

					}
				}
			}else{
				$this->vue->afficherErreur("Paramétre manquant !");
			}
			
		}

		public function decoCont(){
			session_destroy();
			echo "Au revoir ! (on peut changer! )";
		}

		public function seConnecter($id){
			$_SESSION["id"]=$id; 
            echo 'Bienvenue' . $this->modele->getPrenomUtilisateur($id);
		}

		public function getID(){
			return htmlspecialchars($_POST['id']);
		}
		public function getMDP(){
			return htmlspecialchars($_POST["mdp"]);
		}
		public function getEMAIL_CONF(){
			return htmlspecialchars($_POST["mdpConf"]);
		}
		public function getEMAIL(){
			return htmlspecialchars($_POST["email"]);
		}*/
		