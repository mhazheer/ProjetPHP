<?php
require_once __dir__.'/../../include/vue_generique.php';
  class VueContact extends VueGenerique {

    public function __construct(){
    }

    public function affiche_formulaire_contact(){
      echo '<div class="container aProposNous">
    <div class="row">
      <div class="col-xs-offset-2 col-xs-12 col-md-offset-0">
        <h1> A propos de nous </h1>
        <hr>
          <p class="test1">Nous sommes trois étudiants de département informatique de l\'IUT de Montreuil. Nous créons ce site afin de faciliter la communication entre les étudiants des differents départements de l\'IUT pour le but de participer aux activités sportif ensemble. </p>
      </div>
    </div>
  </div>

  <div class="container EquipeFondatrice">
    <h2>L\'équipe fondatrice</h2>
    <hr>
    <div class="row">
      <div class="col-md-4">
          <img src="images/Christelle.jpg" class="img-circle" alt="Christelle">
          <h2>Christelle</h2>
      </div>
      <div class="col-md-4">
          <img src="images/Steven.jpg" class="img-circle" alt="steven" >
            <h2>Steven</h2>
      </div>
      <div class="col-md-4">
          <img src="images/Mahshid.jpg" class="img-circle" alt="mahshid" >
            <h2>Mahshid</h2>
      </div>
    </div>
  </div>


<div class="container contact-form">
  <h2>Contactez nous</h2>
  <hr>
  <div class="row">
   
       <div class="col-md-6">
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
            <button type="submit"class="btn btn-primary btn-block">Envoyé</button>
           </div>
           </form>  
       </div>

       <div class="col-md-6">
        
        <address> 140 Rue de la Nouvelle France, 93100 Montreuil</address>
        <p>Email:- test@email.com</p>
        <p>Tél:- +33 6 68 74 06 44</p>
       </div>

    </div>

</div>';
}
}
?>



            
