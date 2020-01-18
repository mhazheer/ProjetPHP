<?php
require_once __dir__.'/../../include/vue_generique.php';
  class VueContact extends VueGenerique {

    public function __construct(){
    }

    public function affiche_formulaire_contact(){
      echo '<div class="container aProposNous">
    <div class="row">
      <div class="col-xs-offset-2 col-xs-12 col-md-offset-0">
        <h1 id="h1"> A propos de nous </h1>
        <hr>
          <p class="test1">Nous sommes trois étudiants de département informatique de l\'IUT de Montreuil. Nous créons ce site afin de faciliter la communication entre les étudiants des differents départements de l\'IUT pour le but de participer aux activités sportif ensemble. </p>
      </div>
    </div>
  </div>

  <div class="container EquipeFondatrice">
    <h2 id="h1">L\'équipe fondatrice</h2>
    <hr>
    <div class="row">
      <div class="col-md-4">
          <img class="img-circle" alt="Christelle" src="ressource/images/christelle.jpg" >
          <h2>Christelle</h2>
      </div>
      <div class="col-md-4">
          <img class="img-circle" alt="steven" src="ressource/images/steven.jpeg">
          <h2>Steven</h2>
      </div>
      <div class="col-md-4">
          <img class="img-circle" alt="mahshid" src="ressource/images/mahshid.jpeg">
          <h2>Mahshid</h2>
      </div>
    </div>
  </div>


<div class="container contact-form">
  <h3 id="titre">Contactez nous</h3>
  <hr>
  <div class="row">
   
       <div id="contactRight" class="col-md-6">
         <form class="login-form" method="POST" action="index.php?module=contact&action=envoi">
           <div class="form-group">
            <label>Nom</label>
            <input name="nom" type="text" class="form-control">
           </div>

           <div class="form-group">
            <label>Email</label>
            <input name="email" type="text" class="form-control">
           </div>

           <div class="form-group">
            <label>Message</label>
            <textarea name="message" class="form-control" rows="7"></textarea>
           </div>
         
           <div class="form-group">
            <button type="submit"class="btnEnvoie btn-primary btn-block">Envoyé</button>
           </div>
           </form>  
       </div>

       <div class="col-md-6">
        
        <address> 140 Rue de la Nouvelle France, 93100 Montreuil</address>
        <p>Email:- test@email.com</p>
        <p>Tél:- +33 6 68 74 06 44</p>
        <div id="carte">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.781281794208!2d2.462219315674514!3d48.86238097928778!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e612ae6a556ee1%3A0x6aa2df8d4d5f21d9!2s140%20Rue%20de%20la%20Nouvelle%20France%2C%2093100%20Montreuil!5e0!3m2!1sfr!2sfr!4v1574613662165!5m2!1sfr!2sfr" width="500" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>
       </div>


    </div>

</div>';
}
}
?>



            
