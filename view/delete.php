<?php 
    $titre= "supprimer stagiaire";
    var_dump($id);
    ob_start();
    ?>
    <p>voulez vous vraiment supprimer ce stagiaire ?</p> 
    <a class="btn btn-danger" href="index.php?action=destroy&id=<?php echo $id; ?>">valider la suppression</a>
    <a class="btn btn-warning" href="index.php?action=list">annuler la suppression</a>
    <?php
    $contenu = ob_get_clean();
    require_once 'view/layout.php';
?>