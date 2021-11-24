<?php ob_start(); ?>
<form class="form-signin" method="POST" action="">
      <img class="mb-4" src="http://pngimg.com/uploads/padlock/padlock_PNG9445.png" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Connexion</h1>
      <?php if($alert==1) echo '<div class="alert alert-danger" role="alert">Cet utilisateur n\'existe pas !</div>';?>
      <a href="index.php?page=signin">Pas encore de compte compte ? Inscrivez-vous !</a>
      <input type="email" name="email" class="form-control mb-3" placeholder="Email address" required autofocus>
      <input type="password" name="password" class="form-control mb-3" placeholder="Password" required>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
</form>
<?php $content = ob_get_clean(); require('template.php'); ?>