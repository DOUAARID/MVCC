
 <?php
      $titre ="Liste des stagiaires";
      ob_start();
    ?>
    <a href="index.php?action=create" class="btn btn-primary">Ajouter</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>id</th>
                <th>nom</th>
                <th>prenom</th>
                <th>age</th>
                <th>login</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
            
            <?php foreach($stagiaire as $stagi){ ?>
                <tr>
                    <td><?= $stagi[0]//->id ?></td>  
                    <td><?= $stagi[1]//->nom ?></td> 
                    <td><?= $stagi[2]//->prenom ?></td> 
                    <td><?= $stagi[3]//->age ?></td> 
                    <td><?= $stagi[4]//->login ?></td>    
                    <td>
                        <a href="index.php?action=edit&id=<?php echo $stagi[0] ?>" class="btn btn-success btn-sm">modifier</a>
                        <a href="index.php?action=delete&id=<?php echo $stagi[0] ?>" class="btn btn-danger btn-sm">supprimer</a>

                    </td>       
                </tr>
           <?php } ?>
        </tbody>
        
      <?php $contenu=ob_get_clean();?>
      
      <?php  include_once 'view/layout.php';?>