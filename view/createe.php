
 <?php
      $titre ="Ajouter des stagiaires";
      ob_start();
    ?>
   
  <form action="index.php?action=store" method="post">
    <div class="form-group">
        <label for="nom">Nom :</label><br>
        <input type="text" id="nom" name="nom" required><br><br>
    </div>
    <div class="form-group">
        <label for="prenom">Prénom :</label><br>
        <input type="text" id="prenom" name="prenom" required><br><br>

    </div>
    <div class="form-group">
        <label for="age">Âge :</label><br>
        <input type="number" id="age" name="age" min="0" required><br><br>

    </div>
    <div class="form-group">
        <label for="login">Login :</label><br>
        <input type="text" id="login" name="login" required><br><br>

    </div>
    <div class="form-group">
        <label for="password">Mot de passe :</label><br>
        <input type="password" id="password" name="password" required><br><br>

    </div>
    <div class="form-group">
        <input type="submit" class="btn btn-success my-2" value="Ajouter" name="Ajouter">
    </div>
  </form>
</body>
</html>

<?php $contenu=ob_get_clean();?>
<?php  include_once 'view/layout.php';?>