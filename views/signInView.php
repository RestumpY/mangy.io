<?php ob_start(); ?>
<br>
<div class="row">
      
      <div class="col-md-6  justify-content-center text-center mx-auto">
            <form class="form-signin" method="POST">
                  <img class="mb-4" src="https://cdn-icons-png.flaticon.com/512/149/149071.png" alt="" width="72" height="72">
                  <h1 class="h3 mb-3 font-weight-normal">Inscription</h1>
                  <a href="index.php?page=login">Vous avez déjà un compte ? Connectez-vous !</a>
                  <input type="text" name="first_name" class="form-control mb-3" placeholder="Prénom" required autofocus>
                  <input type="text" name="last_name" class="form-control mb-3" placeholder="Nom" required autofocus>
                  <input type="email" name="email" class="form-control mb-3" placeholder="Adresse mail" required autofocus>
                  <input type="password" name="password" class="form-control mb-3" placeholder="Password" required>
                  <button class="btn btn-lg btn-primary btn-block" type="submit">Inscription</button>
            </form>

      </div>
</div>




<?php $content = ob_get_clean();
require('template3.php'); ?>