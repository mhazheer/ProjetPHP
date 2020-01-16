<?php
	class VueGenerique{
		
		function __construct() {
			ob_start();
		}

		public function afficherContenu() {
			return ob_get_clean();
		}

		function afficherErreur($message){
			echo '<div class="alert alert-danger">'.$message.'</div>';
		}

	}
?>
