<?php ob_start(); ?>
<h1 class="h3 mb-3 font-weight-normal">Bonjour <?=$user[0]['first_name'];?></h1>
<marquee>Lieu : <?=$meteo['name'];?> | Température : <?=ceil($meteo['main']['temp']);?>° | <?=ucfirst($meteo['weather'][0]['description']);?></marquee>
<div class="row">
    <div class="col-md-3">
        <a href="index.php?page=settings">
            <i class="fas fa-cog"></i>
            Réglages
        </a>
    </div>
</div>
<?php $content = ob_get_clean(); require('template2.php'); ?>