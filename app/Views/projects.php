<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects - AkuOnline</title>
    <link rel="shortcut icon" href="public/assets/img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="public/assets/library/bootstrap-5.2.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/assets/library/fontawesome-6.2.0/css/all.min.css">
    <link rel="stylesheet" href="public/assets/css/custom.css">
</head>

<body>

    <?= $this->include('templates/navbar.php') ?>


    <section id="projects-section">
        <div class="container-md my-5 py-5" style="max-width: 1080px">
            <h1 class="text-center font-signika-negative fw-semibold mb-0">Projects</h1>
            <hr style="width: 128px; border: 2px solid #ef4444" class="opacity-100 mt-1 mb-5 mx-auto">
            <div class="row mx-0">
                <a href="<?= base_url('project/wash-inn-garage') ?>" class="col-md-3 col-sm-4 col-xs-6 col-12 mb-4 text-dark">
                    <img src="<?= base_url('public/assets/img/project-thumbnail/washinngarage.png') ?>" class="project-thumb" width="100%" alt="">
                    <p class="font-nunito text-center mt-3">"Wash Inn Garage" Operational & Order Management System</p>
                </a>
                <a href="<?= base_url('project/co-lab') ?>" class="col-md-3 col-sm-4 col-xs-6 col-12 mb-4 text-dark">
                    <img src="<?= base_url('public/assets/img/project-thumbnail/colab.png') ?>" class="project-thumb" width="100%" alt="">
                    <p class="font-nunito text-center mt-3">Lab & Co-working Space Booking System for Brawijaya University Vocational Campus</p>
                </a>
                <a href="<?= base_url('project/mandrapostel') ?>" class="col-md-3 col-sm-4 col-xs-6 col-12 mb-4 text-dark">
                    <img src="<?= base_url('public/assets/img/project-thumbnail/mandrapostel.png') ?>" class="project-thumb" width="100%" alt="">
                    <p class="font-nunito text-center mt-3">Data Management System For Post and Information Technology Operators</p>
                </a>
                <a href="<?= base_url('project/ptrksn') ?>" class="col-md-3 col-sm-4 col-xs-6 col-12 mb-4 text-dark">
                    <img src="<?= base_url('public/assets/img/project-thumbnail/ptrksn.png') ?>" class="project-thumb" width="100%" alt="">
                    <p class="font-nunito text-center mt-3">Inter-Institutional Activity Management System</p>
                </a>
                <a href="<?= base_url('project/edu-bmn') ?>" class="col-md-3 col-sm-4 col-xs-6 col-12 mb-4 text-dark">
                    <img src="<?= base_url('public/assets/img/project-thumbnail/edubmn.png') ?>" class="project-thumb" width="100%" alt="">
                    <p class="font-nunito text-center mt-3">State Property Data Management System For Parepare City State Islamic Institute</p>
                </a>
                <a href="<?= base_url('project/inventoman') ?>" class="col-md-3 col-sm-4 col-xs-6 col-12 mb-4 text-dark">
                    <img src="<?= base_url('public/assets/img/project-thumbnail/inventoman.png') ?>" class="project-thumb" width="100%" alt="">
                    <p class="font-nunito text-center mt-3">PT Daytech Tetra Sindo Inventory Asset Data Management System</p>
                </a>
                <a href="<?= base_url('project/simple-oms-woowprint') ?>" class="col-md-3 col-sm-4 col-xs-6 col-12 mb-4 text-dark">
                    <img src="<?= base_url('public/assets/img/project-thumbnail/woowprint.png') ?>" class="project-thumb" width="100%" alt="">
                    <p class="font-nunito text-center mt-3">Simple Order Management System For Woowprint Digital Media Printing Service</p>
                </a>
            </div>
        </div>
    </section>

    <section id="footer-section">
        <div class="container-md mt-5 py-5 text-center" style="max-width: 1080px">
            <h4 class="text-slate font-signika-negative fw-semibold">Aku<span class="text-red">Online</span></h4>
            <p class="font-nunito-sans text-muted">&copy; 2022 AkuOnline by Fikri Miftah A.</p>
        </div>
    </section>
</body>

</html>