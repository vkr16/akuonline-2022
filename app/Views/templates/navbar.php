<section id="navbar-section">
    <nav class="navbar bg-white">
        <div class="container-md" style="max-width:1080px">
            <span class="navbar-brand mb-0 h1">
                <a href="<?= base_url('') ?>"><img src="public/assets/img/logo.png" width="60px" alt=""></a>
            </span>
            <span class="d-flex flex-wrap justify-content-center">
                <a href="<?= base_url('about-me') ?>" class="btn <?= $nav_pos == 'aboutme' ? 'btn-red' : 'btn-outline-red' ?> rounded-0 me-3 mb-2 mb-md-0">About Me</a>
                <a href="<?= base_url('projects') ?>" class="btn <?= $nav_pos == 'projects' ? 'btn-red' : 'btn-outline-red' ?> rounded-0 me-3 mb-2 mb-md-0">Projects</a>
                <a href="<?= base_url('#contact-section') ?>" class="btn btn-outline-red rounded-0 me-3 mb-2 mb-md-0">Contact Me</a>
                <a href="https://fma.my.id" class="btn btn-outline-red rounded-0 me-3 mb-2 mb-md-0">Tools</a>
                <a href="<?= base_url('') ?>" class="btn <?= $nav_pos == 'home' ? 'btn-red' : 'btn-outline-red' ?> rounded-0 mb-2 mb-md-0">Home</a>
            </span>
        </div>
    </nav>
</section>