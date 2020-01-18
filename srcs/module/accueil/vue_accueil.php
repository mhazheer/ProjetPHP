<?php
require_once  __dir__ .'/../../include/vue_generique.php';

	class VueAccueil extends VueGenerique{

		public function __construct(){

		}

		public function afficherContenu(){
			echo '<section>	
			<div id="accueil">
				<p>	Mon sport favori: lA Sieste.</p>
			</div>		
			<div class="box">
				<h2>Nos activités</h2>
				<div class="sport" style="background-image: url(ressource/images/ping2.jpg);">
					<p>Ping Pong</p>
				</div>
				<div class="sport" style="background-image: url(ressource/images/basket1.jpg);">
					<p>Basket-ball</p>
				</div>
				<div class="sport" style="background-image: url(ressource/images/bad1.jpg);">
					<p>Badminton</p>
				</div>
				<div class="sport" style="background-image: url(ressource/images/foot1.jpg);">
					<p>Football</p>
				</div>
			</div>
			<div class="box" style="background-color: #E5E7E9">
				<h2>Nos installations sportives</h2>
				<img id="img" src="ressource/images/montreuil.jpg"/>
				<nav id="liste">
					<a href="javascript:iut()">IUT de Montreuil</a>
					<a href="javascript:centre()">Centre sportif Arthur Ashe</a>
					<a href="javascript:terrain()" >Terrain City</a>
				</nav>
			</div>
			<div class="box">
				<h2>Plus d\'informations</h2>
				<div id="carte">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.781281794208!2d2.462219315674514!3d48.86238097928778!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e612ae6a556ee1%3A0x6aa2df8d4d5f21d9!2s140%20Rue%20de%20la%20Nouvelle%20France%2C%2093100%20Montreuil!5e0!3m2!1sfr!2sfr!4v1574613662165!5m2!1sfr!2sfr" width="700" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
				</div>
				<div id="infos">
					<p><strong>IUT de Montreuil</strong></p>
					<p>140 rue de la nouvelle France</p>
					<p>93100 Montreuil</p>
					<p><a href="https://www.iut.univ-paris8.fr/">Site web</a></p>
					<p>Tel. : 01 48 70 37 00</p>
				</div>
				
			</div>
		</section>';
		}
	}
?>