<?php
session_start();

require_once 'include/modele_generique.php'; 
require_once 'include/vue_generique.php';
require_once 'template.php';

ModeleGenerique::initConnexion();
$tampon = new VueGenerique();//

try {
	isset($_GET['module']) ? $module=htmlspecialchars($_GET['module']) : $module="accueil";
	
	switch ($module) { // club de char à voile
		case "accueil":
			include_once "module/$module/mod_$module.php";
			$concatenation = 'module'.$module;
			$mod = new $concatenation();
		break;
		case "connexion":
			include_once "module/$module/mod_$module.php";
			$concatenation = 'module'.$module;
			$mod = new $concatenation();
		break;
		case "contact":
		//echo "string";
			include_once "module/$module/mod_$module.php";
			echo "contact index";
			$concatenation = 'module'.$module;
			echo "contact index";
			$mod = new $concatenation();
		break;
		case "annuaire":
		//echo "string ICI\n\n";
		echo "module/$module/mod_$module.php\n\n";
			include_once "module/annuaire/mod_$module.php";
			//include_once "module/annuaire/mod_annuaire.php";

			//echo "contac index";
			echo "concatenation = module " . $module;
			$concatenation = 'module'.$module;
			//echo "contact index";
			$mod = new $concatenation();
		break;
	}
}
finally{
	$contenu=$tampon->afficherContenu();
	$template = new Template($contenu);
	$template->affichageTemplate();
}
?>