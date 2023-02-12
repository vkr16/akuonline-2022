<section id="navbar-section">
    <nav class="navbar bg-white">
        <div class="container-md" style="max-width:1080px">
            <span class="navbar-brand mb-0 h1">
                <a href="<?= base_url('') ?>"><img src="public/assets/img/logo.png" width="60px" alt=""></a>
            </span>
            <span>
                <a href="<?= base_url('projects') ?>" class="btn <?= $nav_pos == 'projects' ? 'btn-red' : 'btn-outline-red' ?> rounded-0 me-3">Projects</a>
                <a href="<?= base_url('#contact-section') ?>" class="btn btn-outline-red rounded-0 me-3">Contact Me</a>
                <a href="<?= base_url('') ?>" class="btn <?= $nav_pos == 'home' ? 'btn-red' : 'btn-outline-red' ?> rounded-0">Home</a>
            </span>
        </div>
    </nav>
</section>