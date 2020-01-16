<?php

	class Template{
		protected $head;
		protected $header;
		protected $footer;
		private $contenu;

		function __construct($contenuParam){
			$this->head='composants/head.php';
			$this->header='composants/header.php';
			$this->footer='composants/footer.php'; 
			$this->contenu=$contenuParam;
		}

		public function affichageTemplate(){
			echo '
			<!DOCTYPE html>
			<html lang="fr">
			';
			require_once $this->head;
		echo '
			<body>
			';
			require_once $this->header;
			echo "<section>
				$this->contenu
			</section>";
			require_once $this->footer;
		echo '	
			</body>
			</html>
			';
		}
	}
?>