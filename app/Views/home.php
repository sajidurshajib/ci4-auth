<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<div class="container">
    <section class="jumbotron text-center">
        <div class="container">
            <?php if(session()->getFlashdata('success')): ?>
                <div class="alert alert-success">
                    <?= session()->getFlashdata('success') ?>
                </div>
            <?php endif;?>
            <h1 class="jumbotron-heading">Home example</h1>
            <p class="lead text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium illo mollitia culpa, deleniti iste ad debitis facilis odio tempore non reprehenderit numquam, distinctio velit autem. Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore adipisci doloremque autem iste at assumenda. </p>
            <p>
                <a href="#" class="btn btn-primary my-2">Main call to action</a>
                <a href="#" class="btn btn-secondary my-2">Secondary action</a>
            </p>
        </div>
    </section>
</div>

<?= $this->endSection() ?>