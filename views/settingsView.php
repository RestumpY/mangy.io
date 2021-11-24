<?php ob_start(); ?>
<h1><?=$title;?></h1>
<h2>Informations</h2>
<div class="row">
    <div class="col-md-8 mx-auto">
<form method="POST" action="">
  <div class="form-group">
    <input type="text" class="form-control" name="first_name" placeholder="Prénom" value="<?=$user[0]['first_name'];?>" required>
  </div>
  <div class="form-group">
    <input type="text" class="form-control" name="last_name" placeholder="Nom" value="<?=$user[0]['last_name'];?>" required>
  </div>
  <div class="form-group">
    <input type="email" class="form-control" name="email" placeholder="Email" value="<?=$user[0]['email'];?>" required>
  </div>
  <div class="form-group">
    <input type="password" class="form-control" name="password" placeholder="Mot de passe" value="" required>
  </div>
  <button type="submit" class="btn btn-primary">Valider</button>
</form>
<a href="index.php?page=settings&action=delete" style="color:red;">Supprimer mon compte</span>
</div>
</div>
<?php $content = ob_get_clean(); require('template2.php'); ?>