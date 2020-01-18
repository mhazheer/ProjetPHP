<?php
require_once  __dir__ .'/../../include/vue_generique.php';

	class VueConnexion extends VueGenerique {

		public function __construct(){
		}

		public function affiche_formulaire_connexion(){
		

			 
			echo' <div class="login-page">
					<div class="form">
				    	<h1> Connexion <h1>
					    <form class="login-form" method="POST" action="index.php?module=connexion&action=idOk">
					      <input type="hidden" name="action" value="connexion"/>
					      <input type="text" name="id" placeholder="Nom d\'utilisateur" required/>
					      <input type="password" name="mdp" placeholder="Mot de passe" required/>
					      <input class="input_connexion" type="submit" value="Se connecter">
					      <p class="message">Mot de passe oublié (optionnel)?</p>
					    </form>
					    <form method="POST" action="index.php?module=connexion&action=inscription">
					      <p class="message">Pas encore inscrit? <button> Créer un compte</button></p>    
					    <form>
				    </div>
				  </div>';
		}


		public function affiche_formulaire_inscription(){
			
    			
    		echo'<div class="login-page">
				  	<div class="form">
	    			  <h1>Inscription<h1>
	    			  <form class="register-form" method="POST" action="index.php?module=connexion&action=inscription>
					      <input type="hidden" name="action" value="inscription" />
					      <input type="text" name="nom" placeholder="Nom*" required/>
					      <input type="text" name="prenom" placeholder="Prénom*" required/>
					      <input type="text" name="id" placeholder="Pseudo*" required/>
					      <input class="input_date" type="date" name="dateNaissance" placeholder="Date de naissance"/>
					      <input type="text" name="email" placeholder="Adresse mail étudiant*" required/>
					      <input type="text" name="numTel" placeholder="Numéro de téléphone"/>
					      <input type="password" name="mdp" placeholder="Mot de passe*" required/> 
					      <input type="password" name="mdpConf" placeholder="Confimation mot de passe*" required/> 
					      <input type="checkbox" name="conditionUtilisation" value="true"
                      onclick="utilisation()"> <h2>Accepter les conditions d\'utilisation</h2>
					      <input class="input_connexion" type="submit" value="Création du compte">
					  </form>
				    </div>
				</div>';
				/*Note: 
				Parfois au niveau du formulaire de l'nscription --> toute les lignes 
				s'affiche pas 1 fois sur 4 (je comprend pas pq)
				Filiaire comment on gère au niveau BD ? 
				Mail <-> actif ?
				voir onclick=utilisateur()*/
		}
	}
?>



				    
