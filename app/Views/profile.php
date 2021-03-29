<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<div class="container">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">


        <br>
        <div class="card">
            <div class="card-body">
                <div class="d-flex flex-column align-items-center text-center">
                    <img src="https://avatars.githubusercontent.com/u/7387879?v=4" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                        <h4><?php 
                                $data = session()->get('ci4logged');
                                echo $data['name'];
                        ?></h4>

                        <p class="text-secondary mb-1"><?php 
                                $data = session()->get('ci4logged');
                                echo $data['email'];
                        ?></p>
                        <button class="btn btn-primary">Follow</button>
                        <button class="btn btn-outline-primary">Message</button>
                    </div>
                </div>
            </div>
        </div>




            <h3></h3>
            <?php if(session()->getFlashdata('success')): ?>
                <div class="alert alert-success">
                    <?= session()->getFlashdata('success') ?>
                </div>
            <?php endif;?>
            
        </div>
    </div>
</div>


<?= $this->endSection() ?>