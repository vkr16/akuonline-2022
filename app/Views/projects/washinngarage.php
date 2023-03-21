<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wash Inn Garage - AkuOnline</title>
    <link rel="shortcut icon" href="<?= base_url('public/assets/img/logo.png') ?>" type="image/x-icon">
    <link rel="stylesheet" href="<?= base_url('public/assets/library/bootstrap-5.2.1/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('public/assets/library/fontawesome-6.2.0/css/all.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('public/assets/css/custom.css') ?>">
</head>

<body>

    <?= $this->include('templates/navbar') ?>

    <section id="projects-section">
        <div class="container-md my-5 py-5" style="max-width: 1080px">
            <h1 class="text-center font-signika-negative fw-semibold mb-0">Project Info</h1>
            <hr style="width: 128px; border: 2px solid #ef4444" class="opacity-100 mt-1 mb-1 mx-auto">
            <h5 class="text-center font-signika-negative mt-0 mb-5">Wash Inn Garage</h5>
            <div id="carouselScreenshots" class="carousel carousel-dark slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <?php
                    for ($i = 0; $i < 12; $i++) {
                    ?>
                        <button type="button" data-bs-target="#carouselScreenshots" data-bs-slide-to="<?= $i ?>" <?= $i == 0 ? 'class="active"' : '' ?> aria-current="true" aria-label="Slide <?= $i ?>"></button>
                    <?php
                    }
                    ?>
                </div>
                <div class="carousel-inner">
                    <?php
                    for ($i = 1; $i <= 12; $i++) {
                    ?>
                        <div class="carousel-item <?= $i == 1 ? 'active' : '' ?>">
                            <img src="<?= base_url('public/assets/img/screenshots/washinngarage/' . $i . '.png') ?>" class="d-block w-100">
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
                <p>"Wash Inn Garage" Operational & Order Management System</p>
                <p class="fw-semibold mb-0">Development Date</p>
                <p>Jan 2022 - Feb 2022</p>
                <p class="fw-semibold mb-0">Tech Stack</p>
                <ul>
                    <li>PHP 7.4 Native</li>
                    <li>HTML</li>
                    <li>CSS</li>
                    <li>Javascript</li>
                    <li>Bootstrap 4 Front-End Kit</li>
                    <li>jQuery 3.6</li>
                    <li>MariaDB / MySQL Database</li>
                </ul>
                <p class="fw-semibold mb-0">App Description</p>
                <p style="text-align: justify">This application was made to manage order data and business management of "Wash Inn Garage" car wash & detailing service. The most important feature provided by this application is managing customer order data, starting from receiving customer orders, processing orders, to printing invoices and making monthly data recapitulation reports.</p>

                <p class="fw-semibold mb-0">GitHub Repository & Live Demo</p>
                <a href="https://github.com/vkr16/washinngarage" target="_blank"><img src="https://img.shields.io/static/v1?label=GitHub&message=vkr16/washinngarage&color=ff4444&show-icon=true&logo=github&logoColor=fff&labelColor=181717&style=for-the-badge" class="mt-2 d-inline mb-4" alt=""></a>

                <br>
                <button disabled target="_blank" class="btn btn btn-red d-inline rounded-0">Live Demo Unavailable</button>
            </div>
        </div>
    </section>

    <?= $this->include('templates/footer') ?>

    <script src="<?= base_url('public/assets/library/bootstrap-5.2.1/js/bootstrap.bundle.min.js') ?>"></script>
</body>

</html>