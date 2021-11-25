<?php ob_start(); ?>
<h1 class="h3 mb-3 font-weight-normal">Bonjour <?=$user[0]['first_name'];?></h1>
<marquee>Lieu : <?=$meteo['name'];?> | Température : <?=ceil($meteo['main']['temp']);?>° | <?=ucfirst($meteo['weather'][0]['description']);?></marquee>
<div class="row">
    <div class="col-md-12">
        <h2>Publier un post</h2>
        <form action="" method="POST">
            <div class="form-group">
                <input type="text" class="form-control" name="title" aria-describedby="emailHelp" placeholder="Titre du post">
            </div>
            <div class="form-group">
                <textarea class="form-control" name="content" rows="3" placeholder="Contenu du post"></textarea>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Envoyer</button>
        </form>
    </div>
    <div class="col-md-12 mt-3">
        <h2>Fil d'actualité</h2>
        <?php foreach($posts as $post): ?>
        <h3><?=$post['title'];?></h3>
        <p><?=$post['content'];?></p>
        <br>
        <?php endforeach; ?>
    </div>
    <!--<div class="col-md-3">
        <a href="index.php?page=settings">
            <i class="fas fa-cog"></i>
            Réglages
        </a>
    </div>-->
</div>
<?php $content = ob_get_clean(); require('template4.php'); ?>