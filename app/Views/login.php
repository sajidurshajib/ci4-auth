<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<div class="container">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <div class="form-wrapper">
                
                <div class="h-header alert alert-dismissible alert-secondary">
                    <h3 class="">Login</h3>
                </div>

                <form action="<?= base_url().'/login'?>" method="post">

                    <div class="form-group">
                        <input type="email" name="email" class="form-control" id="inputEmail" placeholder="email@domain.com">
                    </div>

                    <div class="form-group">
                        <input type="password" name="password" class="form-control" id="inputPass" placeholder="password">
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                    </div>
                </form>
                <ul class="ext-link">
                    <li class="ext-left"><a href="<?= base_url()?>/">Home</a></li>          
                    <li class="ext-right"><a href="<?= base_url()?>/register">Register</a></li>          
               </ul>

               <?php if(isset($validation)): ?>
                    <div class="aler alert-danger">
                        <?= $validation->listErrors(); ?>
                    </div>
                <?php endif; ?>

                <?php if(session()->getFlashdata('wrong')): ?>
                    <div class="alert alert-danger">
                        <?= session()->getFlashdata('wrong') ?>
                    </div>
                <?php endif;?>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>