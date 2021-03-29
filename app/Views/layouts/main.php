<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= (isset($meta_title) ? $meta_title : 'CI4_Auth')?></title>
    <link rel="stylesheet" href="<?= base_url()?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url()?>/assets/style.css">
</head>
<body>

<?php if(empty($nomenu)):?>
<nav>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h3>CI4 Auth</h3>
            </div>
            <div class="col-md-8">
                <ul class="menu">
                    <?php 
                        $data = session()->get('ci4logged');
                        if(empty($data)):
                    ?>
                    <li><a href="<?= base_url().'/register'?>">Register</a></li>
                    <li><a href="<?= base_url().'/login'?>">Login</a></li>
                    <?php endif;?>
                    
                    <?php 
                        $data = session()->get('ci4logged');
                        if(!empty($data)):
                    ?>
                    <li><a href="<?= base_url().'/logout'?>">Logout</a></li>
                    <?php endif;?>

                </ul>
            </div>
        </div>
    </div>    
</nav>
<?php endif?>




    <?= $this->renderSection('content') ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
</body>
</html>