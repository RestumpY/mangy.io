<?php ob_start(); ?>
<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <!-- Row -->
    <div class="row">
        <!-- Column -->
        <div class="col-lg-4 col-xlg-3 col-md-12">
            <div class="white-box">
                <div class="user-bg">
                    <div class="overlay-box">
                        <div class="user-content">
                            <a href="javascript:void(0)"><img id="photo" src="plugins/images/users/<?=$src;?>" class="thumb-lg img-circle" alt="img"></a>
                            <h4 class="text-white mt-2"><?php echo $user[0]['first_name'] . " " . $user[0]['last_name']; ?></h4>
                            <h5 class="text-white mt-2"><?php echo $user[0]['email']; ?></h5>
                        </div>
                    </div>
                </div>
                <!--<div class="user-btm-box mt-5 d-md-flex">
                                <div class="col-md-4 col-sm-4 text-center">
                                    <h1>258</h1>
                                </div>
                                <div class="col-md-4 col-sm-4 text-center">
                                    <h1>125</h1>
                                </div>
                                <div class="col-md-4 col-sm-4 text-center">
                                    <h1>556</h1>
                                </div>
                            </div>-->
            </div>
        </div>
        <!-- Column -->
        <!-- Column -->
        <div class="col-lg-8 col-xlg-9 col-md-12">
            <div class="card">
                <div class="card-body">
                    <form class="form-horizontal form-material" action="" method="POST" enctype="multipart/form-data">
                        <div class="form-group mb-4">
                            <label class="col-md-12 p-0">Prénom</label>
                            <div class="col-md-12 border-bottom p-0">
                                <input type="text" value="<?php echo $user[0]['first_name']; ?>" name="first_name" class="form-control p-0 border-0">
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label class="col-md-12 p-0">Nom</label>
                            <div class="col-md-12 border-bottom p-0">
                                <input type="text" value="<?php echo $user[0]['last_name']; ?>" name="last_name" class="form-control p-0 border-0">
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label for="example-email" class="col-md-12 p-0">Email</label>
                            <div class="col-md-12 border-bottom p-0">
                                <input type="email" value="<?php echo $user[0]['email']; ?>" name="email" class="form-control p-0 border-0" name="example-email" id="example-email">
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label class="col-md-12 p-0">Password</label>
                            <div class="col-md-12 border-bottom p-0">
                                <input type="password" value="" name="password" class="form-control p-0 border-0">
                            </div>
                        </div>
                        <input name="photo" type="file" id="fileInput" hidden/>
                        <div class="form-group mb-4">
                            <div class="col-sm-12">
                                <button class="btn btn-success">Valider</button>
                                </a>
                            </div>
                        </div>
                        <a href="index.php?page=settings&action=delete" style="color:red;">Supprimer mon compte</a>
                    </form>
                </div>
            </div>
        </div>
        <!-- Column -->
    </div>
    <!-- /.col-lg-12 -->
</div>
<script type="text/javascript" src="js/profil.js"></script>
<?php $content = ob_get_clean();
require('template4.php'); ?>