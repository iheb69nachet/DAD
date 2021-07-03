<?php 
session_start();

$_SESSION['loaded_page']= "Edit_super";


?>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js" /></script>
          <script type="text/javascript">
            $(document).ready(function() {
                $('#edit_form').submit(function(ev){
                    ev.preventDefault();
                    var Nom = $('#Nom').val();
                    var prenom = $('#prenom').val();
                    var Email = $('#Email').val();
                    var status = $('#status').val();
                    var Supervisor = $('#Supervisor').val();
                    var Experience = $('#Experience').val();
                    var Tel = $('#Tel').val();
                    var ville = $('#ville').val();
                    $.ajax({
                      url : '../Gestion/Menu_Super_admin/Contenue_Edit_Profil/connxion_edit.php',
                      type : 'POST',
                      data: {
                          'Nom' : Nom,
                          'prenom' : prenom,
                          'Email': Email,
                          'status': status,
                          'Supervisor': Supervisor,
                          'Experience': Experience,
                          'Tel': Tel,
                          'ville': ville,
                      },
                      success: function(data) {
                          console.log(data);
                         $('#target').load('../Gestion/Menu_Super_admin/Contenue_Charge_Profil/Charge.php');
                         
                      }
                  });
                  //return false; 
                });
              });  

            </script>
<div class="main">
		<!-- row -->
            <div class="row">
			<!-- col 12 -->
              <div class="col-md-12">
          
                <section class="tile color transparent">



                  <!-- tile header -->
                  <div class="tile-header color transparent">
                    <h1><strong>Edit</strong> Profil</h1>
                    <div class="controls">
                      <a href="#" class="refresh"><i class="fa fa-refresh"></i></a>
                      <a href="#" class="remove"><i class="fa fa-times"></i></a>
                    </div>
                  </div>
                  <!-- /tile header -->

                  <!-- tile body -->
               

                     <div class="tile-body tile color transparent-black" >           
                       <?php 
                        $connect = mysqli_connect("localhost:3306","chocoest","chocoest","projetphase1") ;
                        
                        $query=sprintf("SELECT * FROM compte_user");

                        $result = mysqli_query($connect, $query);
                       $row = $result->fetch_array(MYSQLI_ASSOC);
                      ?>
              
                     <form class="form-horizontal" id="edit_form" role="form" methode="POST" >
                     <div class="form-group">
                        <label for="Nom" class="col-sm-2 control-label">Nom</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" id="Nom"value="<?php echo $row['Nom'];?>" name="Nom">
                        </div>
                      </div>
            
             <div class="form-group">
                        <label for="prenom" class="col-sm-2 control-label">prenom</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" id="prenom" value="<?php echo $row['prenom'];?>" name="prenom">
                        </div>
                      </div>
            
            
             <div class="form-group">
                        <label for="Email" class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" id="Email" value="<?php echo $row['Email'];?>" name="Email">
                        </div>
                      </div>
            
            
            
             <div class="form-group">
                        <label for="status" class="col-sm-2 control-label">status</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" id="status" value="<?php echo $row['status'];?>" name="status">
                        </div>
                      </div>
                      
             <div class="form-group">
                        <label for="Supervisor" class="col-sm-2 control-label">Supervisor</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" id="Supervisor" value="<?php echo $row['Supervisor'];?>" name="Supervisor">
                        </div>
                      </div>
            
             <div class="form-group">
                        <label for="Experience" class="col-sm-2 control-label">Experience</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" id="Experience" value="<?php echo $row['Experience'];?>" name="Experience">
                        </div>
                      </div>
            
            
             <div class="form-group">
                        <label for="Tel" class="col-sm-2 control-label">Tel </label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" id="Tel" value="<?php echo $row['Tel'];?>" name="Tel">
                        </div>
                      </div>  
            
            
            
             <div class="form-group">
                        <label for="ville" class="col-sm-2 control-label">ville</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" id="ville" value="<?php echo $row['ville'];?>" name="ville">
                        </div>
                      </div>
            
            
            <div class="form-group form-footer footer-white">
                        <div class="col-sm-offset-8 col-sm-8">
                   
                          <button type="submit" class="btn btn-red" name="Envoyer">Enregistrer</button>
                        </div>
                      </div>
            
            
                 </form>

                  </div>
                 
                </section>
             </div>
       
      </div>
    
    </div>
   

    


      