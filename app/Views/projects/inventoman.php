<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventoman - AkuOnline</title>
    <link rel="shortcut icon" href="<?= base_url('public/assets/img/logo.png') ?>" type="image/x-icon">
    <link rel="stylesheet" href="<?= base_url('public/assets/library/bootstrap-5.2.1/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('public/assets/library/fontawesome-6.2.0/css/all.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('public/assets/css/custom.css') ?>">
</head>

<body>

    <section id="navbar-section">
        <nav class="navbar bg-white">
            <div class="container-md" style="max-width:1080px">
                <span class="navbar-brand mb-0 h1">
                    <a href="<?= base_url('') ?>"><img src="<?= base_url('public/assets/img/logo.png') ?>" width="60px" alt=""></a>
                </span>
                <span>
                    <a href="<?= base_url('projects') ?>" class="btn btn-red rounded-0 me-3">Projects</a>
                    <a href="<?= base_url('#contact-section') ?>" class="btn btn-outline-red rounded-0 me-3">Contact Me</a>
                    <a href="<?= base_url('') ?>" class="btn btn-outline-red rounded-0">Home</a>
                </span>
            </div>
        </nav>
    </section>

    <section id="projects-section">
        <div class="container-md my-5 py-5" style="max-width: 1080px">
            <h1 class="text-center font-signika-negative fw-semibold mb-0">Project Info</h1>
            <hr style="width: 128px; border: 2px solid #ef4444" class="opacity-100 mt-1 mb-1 mx-auto">
            <h5 class="text-center font-signika-negative mt-0 mb-5">Inventoman</h5>
            <div id="carouselScreenshots" class="carousel carousel-dark slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <?php
                    for ($i = 0; $i < 10; $i++) {
                    ?>
                        <button type="button" data-bs-target="#carouselScreenshots" data-bs-slide-to="<?= $i ?>" <?= $i == 0 ? 'class="active"' : '' ?> aria-current="true" aria-label="Slide <?= $i ?>"></button>
                    <?php
                    }
                    ?>
                </div>
                <div class="carousel-inner">
                    <?php
                    for ($i = 1; $i <= 10; $i++) {
                    ?>
                        <div class="carousel-item <?= $i == 1 ? 'active' : '' ?>">
                            <img src="<?= base_url('public/assets/img/screenshots/inventoman/' . $i . '.png') ?>" class="d-block w-100">
                        </div>
                    <?php
                    }
                    ?>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselScreenshots" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselScreenshots" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

            <div class="mt-5">
                <p class="fw-semibold mb-0">Project Name</p>
                <p>"Inventoman" Inventory Assets Data Management System</p>
                <p class="fw-semibold mb-0">Development Date</p>
                <p>Sep 2022</p>
                <p class="fw-semibold mb-0">Tech Stack</p>
                <ul>
                    <li>PHP 8.1</li>
                    <li>CodeIgniter 4</li>
                    <li>HTML</li>
                    <li>CSS</li>
                    <li>Javascript</li>
                    <li>Bootstrap 5 Front-End Kit</li>
                    <li>jQuery 3.6</li>
                    <li>AJAX</li>
                    <li>MariaDB / MySQL Database</li>
                </ul>
                <p class="fw-semibold mb-0">App Description</p>
                <p style="text-align: justify">This system was developed to help companies manage and record every handover of company assets to employees and vice versa.</p>
            </div>
        </div>
    </section>

    <section id="footer-section">
        <div class="container-md mt-5 py-5 text-center" style="max-width: 1080px">
            <h4 class="text-slate font-signika-negative fw-semibold">Aku<span class="text-red">Online</span></h4>
            <p class="font-nunito-sans text-muted">&copy; 2022 AkuOnline by Fikri Miftah A.</p>
        </div>
    </section>

    <script src="<?= base_url('public/assets/library/bootstrap-5.2.1/js/bootstrap.bundle.min.js') ?>"></script>
</body>

</html>