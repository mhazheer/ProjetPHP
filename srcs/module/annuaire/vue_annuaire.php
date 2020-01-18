<?php
//echo "string";
require_once __dir__.'/../../include/vue_generique.php';
class VueAnnuaire extends VueGenerique{
	
	function __construct()
	{
	}

public function affiche_vue(){
echo'<script>
	$(document).ready(function(){
  // Activate tooltip
  //$(\'[data-toggle="tooltip"]\').tooltip();
  
  // Select/Deselect checkboxes
  var checkbox = $(\'table tbody input[type="checkbox"]\');
  $("#selectAll").click(function(){
    if(this.checked){
      checkbox.each(function(){
        this.checked = true;                        
      });
    } else{
      checkbox.each(function(){
        this.checked = false;                        
      });
    } 
  });
  checkbox.click(function(){
    if(!this.checked){
      $("#selectAll").prop("checked", false);
    }
  });
});
</script>

<div class="container">
<div class="table-wrapper">
    <div class="table-title">
        <div class="row">
            <div class="col-sm-6">
    			<h2>Manage <b>Employees</b></h2>
 			</div>
  			<div class="col-sm-6">
	            <a href="#add" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New Employee</span></a>
	            <a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Delete</span></a>            
 			</div>
        </div>
    </div>
    <table class="table table-striped table-hover">
        <thead>
        <tr>
        	<th>
              <span class="custom-checkbox">
                <input type="checkbox" id="selectAll">
                <label for="selectAll"></label>
              </span>
        	</th>
            <th>Type</th>
            <th>Déscription</th>
            <th>Etat</th>
            <th>quantité</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        ';
}

function affiche_MaterielVue($type, $description, $etat,$quantite,$n){
	echo'
	
	    <tr>
	      <td>
	        <span class="custom-checkbox">
	          <input type="checkbox" id="checkbox'.$n.'" name="options[]" value="1">
	          <label for="checkbox'.$n.'"></label>
	        </span>
	      </td>
          <td>'.$type.'</td>
          <td>'.$description.'</td>
		  <td>'.$etat.'</td>
          <td>'.$quantite.'</td>
          <td>
            <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
            <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
          </td>
        </tr>
    ';
}



function inserer_ligne($listeType){
	echo'
	</tbody>
  </table>
</div>
</div>
	  <!-- Edit Modal HTML -->
	  <div id="add" class="modal fade">
	    <div class="modal-dialog">
	      <div class="modal-content">
	        <form id="form_ajoutMateriel" action="index.php?module=annuaire&action=ajoutMateriel" method="POST" >
	          <div class="modal-header">            
	            <h4 class="modal-title">Ajouter un matériel</h4>
	            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	          </div>
	          <div class="modal-body">          
	            <div class="form-group">
	              <label>Type</label>
	              <select name="type" type="text" class="form-control" required>';
	              foreach ($listeType as $value) {
            		echo "<option value =".$value['idTypeMateriel'].">";
					echo ($value['NomTypeMateriel']);
					echo "</option>";
				}
	            echo'
	            	</select>
	            </div>
	            <div class="form-group">
	              <label>Déscription</label>
	              <input name="description" type="text" class="form-control" required>
	            </div>
	            <div class="form-group">
	              <label>Etat</label>
	              <input name="etat" min="0" type="number" class="form-control" required>
	            </div>
	            <div class="form-group">
	              <label>Quantité</label>
	              <input name =" quantite" min="0" type="number" class="form-control" required>
	            </div>          
	          </div>
	          <div class="modal-footer">
	            <input name="annuler" type="button" class="btn btn-default" data-dismiss="modal" value="Annuler">
	            <input name="ajouter" type="submit" class="btn btn-success" value="Ajouter">
	          </div>
	        </form>
	      </div>
	    </div>
	  </div>
	  <!-- Edit Modal HTML -->
	  <div id="editEmployeeModal" class="modal fade">
	    <div class="modal-dialog">
	      <div class="modal-content">
	        <form action="index.php?module=annuaire">
	          <div class="modal-header">            
	            <h4 class="modal-title">Edit Employee</h4>
	            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	          </div>
	          <div class="modal-body">          
	            <div class="form-group">
	              <label>Name</label>
	              <input type="text" class="form-control" required>
	            </div>
	            <div class="form-group">
	              <label>Email</label>
	              <input type="email" class="form-control" required>
	            </div>
	            <div class="form-group">
	              <label>Address</label>
	              <textarea class="form-control" required></textarea>
	            </div>
	            <div class="form-group">
	              <label>Phone</label>
	              <input type="text" class="form-control" required>
	            </div>          
	          </div>
	          <div class="modal-footer">
	            <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
	            <input type="submit" class="btn btn-info" value="Save">
	          </div>
	        </form>
	      </div>
	    </div>
	  </div>
	  <!-- Delete Modal HTML -->
	  <div id="deleteEmployeeModal" class="modal fade">
	    <div class="modal-dialog">
	      <div class="modal-content">
	        <form>
	          <div class="modal-header">            
	            <h4 class="modal-title">Delete Employee</h4>
	            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	          </div>
	          <div class="modal-body">          
	            <p>Are you sure you want to delete these Records?</p>
	            <p class="text-warning"><small>This action cannot be undone.</small></p>
	          </div>
	          <div class="modal-footer">
	            <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
	            <input type="submit" class="btn btn-danger" value="Delete">
	          </div>
	        </form>
	      </div>
	    </div>
	  </div>
		';
	}
}
?>