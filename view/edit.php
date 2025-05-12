
 <?php
      $titre ="modifier des stagiaires";
      ob_start();
?>
   
  <form action="index.php?action=update" method="post">
    <div class="form-group">
        <input type="hidden" id="id" name="id" value="<?= $stagiaire['id'] ?>" ><br><br>
    </div>
    <div class="form-group">
        <label for="nom">Nom :</label><br>
        <input type="text" id="nom" name="nom" value="<?= $stagiaire['nom'] ?>" ><br><br>
    </div>
    <div class="form-group">
        <label for="prenom">Prénom :</label><br>
        <input type="text" id="prenom" name="prenom" value="<?= $stagiaire['prenom'] ?>" ><br><br>

    </div>
    <div class="form-group">
        <label for="age">Âge :</label><br>
        <input type="number" id="age" name="age" min="0" value="<?= $stagiaire['age'] ?>" ><br><br>

    </div>
    <div class="form-group">
        <label for="login">Login :</label><br>
        <input type="text" id="login" name="login" value="<?= $stagiaire['login'] ?>" ><br><br>

    </div>
    <div class="form-group">
        <label for="password">Mot de passe :</label><br>
        <input type="password" id="password" name="password" value="<?= $stagiaire['password'] ?>" ><br><br>

    </div>
    <div class="form-group">
        <input type="submit" class="btn btn-success my-2" value="modifier" name="modifier">
    </div>
  </form>
</body>
</html>

<?php $contenu=ob_get_clean();?>
<?php  include_once 'view/layout.php';?>