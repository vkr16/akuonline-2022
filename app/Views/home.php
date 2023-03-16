<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AkuOnline</title>
    <link rel="shortcut icon" href="public/assets/img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="public/assets/library/bootstrap-5.2.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/assets/library/fontawesome-6.2.0/css/all.min.css">
    <link rel="stylesheet" href="public/assets/css/custom.css">
</head>

<body>
    <?= $this->include('templates/navbar.php') ?>

    <section id="hero-section">
        <div class="d-flex flex-wrap justify-content-between container-md my-md-5 py-5" style="max-width:1080px">
            <div class="col-md-8 mt-5 pe-md-5">
                <h2 class="text-slate font-signika-negative fw-semibold">Hi, I'am <span class="text-red">Fikri Miftah</span> and</h2>
                <h1 class="text-slate font-signika-negative fw-semibold display-4 lh-1">I'll Help You Build Your <span class="text-red"><br class="d-none d-md-block">Web App</span></h1>
                <p class="text-muted font-nunito">I’m a web app developer that using PHP as my most used programming language and MySQL as my favorite database, and I’ll help you with your web development.</p>
                <a href="#service-section" class="btn btn-red rounded-0">Learn more <i class="fa-solid fa-arrow-right-long"></i></a>
            </div>
            <div class="col-md-4 d-none d-md-block">
                <img src="public/assets/img/developer-sitdown.png" width="100%" alt="">
            </div>
        </div>
    </section>

    <section id="service-section" class="bg-light">
        <div class="container-md my-5 py-5" style="max-width: 1080px">
            <h1 class="font-signika-negative fw-semibold text-slate mb-0">Services</h1>
            <p class="font-nunito-sans fw-light text-slate mb-0">What I can provide </p>
            <hr style="width: 128px; border: 2px solid #ef4444" class="opacity-100 mt-1">

            <div class="row m-0 mt-4">
                <div class="col-md-4 ps-md-0 mb-3">
                    <span class="fa-stack fa-2x">
                        <i class="fa-solid fa-circle fa-stack-2x text-red"></i>
                        <i class="fa-solid fa-code fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="text-slate font-nunito-sans fw-semibold mt-3">Web Development</h4>
                    <p class="text-muted font-nunito-sans">Need a web application? Don't worry I can help you build one using CodeIgniter 4 PHP Framework and Bootstrap Front-end kit.</p>
                </div>
                <div class="col-md-4 mb-3">
                    <span class="fa-stack fa-2x">
                        <i class="fa-solid fa-circle fa-stack-2x text-red"></i>
                        <i class="fa-solid fa-bug-slash fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="text-slate font-nunito-sans fw-semibold mt-3">Web Maintenance</h4>
                    <p class="text-muted font-nunito-sans">I know everyone hates bugs, so do I, you too right? but don't worry I'll fix it for you</p>
                </div>
                <div class="col-md-4 pe-md-0 mb-3">
                    <span class="fa-stack fa-2x">
                        <i class="fa-solid fa-circle fa-stack-2x text-red"></i>
                        <i class="fa-solid fa-server fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="text-slate font-nunito-sans fw-semibold mt-3">Web Deployment</h4>
                    <p class="text-muted font-nunito-sans">Already have a website? want to see it running on the Internet? I can help you with it.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="project-section">
        <div class="container-md my-5 py-5" style="max-width: 1080px">
            <div class="row m-0">
                <div class="col-md-3 col-sm-6 d-flex align-items-center">
                    <span>
                        <h1 class="font-signika-negative fw-semibold mb-0">Projects</h1>
                        <p class="font-nunito-sans">Projects that I've completed</p>
                        <a href="<?= base_url('projects') ?>" class="btn btn-red rounded-0">Show all <i class="fa-solid fa-arrow-right-long"></i></a>
                    </span>
                </div>
                <a href="<?= base_url('project/mandrapostel') ?>" class="col-md-3 col-sm-6 p-2">
                    <img src="public/assets/img/project-thumbnail/mandrapostel.png" width="100%" alt="" class="project-thumb">
                </a>
                <a href="<?= base_url('project/ptrksn') ?>" class="col-md-3 col-sm-6 p-2">
                    <img src="public/assets/img/project-thumbnail/ptrksn.png" width="100%" alt="" class="project-thumb">
                </a>
                <a href="<?= base_url('project/edu-bmn') ?>" class="col-md-3 col-sm-6 p-2">
                    <img src="public/assets/img/project-thumbnail/edubmn.png" width="100%" alt="" class="project-thumb">
                </a>
            </div>
        </div>
    </section>

    <section id="testimonial-section" class="bg-light">
        <div class="container-md my-5 py-5" style="max-width: 1080px">
            <h1 class="font-signika-negative fw-semibold text-slate mb-0 text-center">Testimonials</h1>
            <p class="font-nunito-sans fw-light text-slate mb-4 text-center">Check out what my client say</p>
            <div id="testimonials" class="carousel carousel-dark slide font-nunito-sans" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active text-center">
                        <span>
                            <img src="public/assets/img/testimonial-photo/kaharudin.jpg" width="100px" class="rounded-circle mb-3" alt="">
                            <div class="text-center">
                                <blockquote class="blockquote">
                                    <p class="col-8 offset-2 lh-sm fs-5">“Kerjasama yang baik dengan mas Fikri, cukup fast respon dan sangat memahami hal yang dibutuhkan saya selaku client.”</p>
                                    <span class="text-red">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </span>
                                </blockquote>
                                <figcaption class="blockquote-footer">
                                    Kaharudin Aldian S. <cite title="Source Title" class="text-slate">(via Fastwork.id)</cite>
                                </figcaption>
                            </div>
                        </span>
                    </div>
                    <div class="carousel-item text-center">
                        <span>
                            <img src="public/assets/img/testimonial-photo/iqbal.png" width="100px" class="rounded-circle mb-3" alt="">
                            <div class="text-center">
                                <blockquote class="blockquote">
                                    <p class="col-8 offset-2 lh-sm fs-5">“Responsif dan responsible terhadap request client, serta koperatif terhadap clientnya. Sangat puas dengan pelayanan yg diberkan 👍”</p>
                                    <span class="text-red">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </span>
                                </blockquote>
                                <figcaption class="blockquote-footer">
                                    Ahmad Iqbal Maulana L. <cite title="Source Title" class="text-slate">(via Fastwork.id)</cite>
                                </figcaption>
                            </div>
                        </span>
                    </div>
                    <div class="carousel-item text-center">
                        <span>
                            <img src="public/assets/img/testimonial-photo/user-silhouette.png" width="100px" class="rounded-circle mb-3" alt="">
                            <div class="text-center">
                                <blockquote class="blockquote">
                                    <p class="col-8 offset-2 lh-sm fs-5">“Pemahaman mengenai proyek sangat baik, respon dan kwalitas kerja diselesaikan sesuai ekspektasi. Thank you.”</p>
                                    <span class="text-red">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </span>
                                </blockquote>
                                <figcaption class="blockquote-footer">
                                    Sugardaddy Daddy <cite title="Source Title" class="text-slate">(via Fastwork.id)</cite>
                                </figcaption>
                            </div>
                        </span>
                    </div>
                    <div class="carousel-item text-center">
                        <span>
                            <img src="public/assets/img/testimonial-photo/wellyne.jpg" width="100px" class="rounded-circle mb-3" alt="">
                            <div class="text-center">
                                <blockquote class="blockquote">
                                    <p class="col-8 offset-2 lh-sm fs-5">“Pengerjaan project sangat cepat. Memuaskan dan sangat membantu.”</p>
                                    <span class="text-red">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </span>
                                </blockquote>
                                <figcaption class="blockquote-footer">
                                    Wellyne Victoria <cite title="Source Title" class="text-slate">(via Fastwork.id)</cite>
                                </figcaption>
                            </div>
                        </span>
                    </div>
                    <div class="carousel-item text-center">
                        <span>
                            <img src="public/assets/img/testimonial-photo/user-silhouette2.png" width="100px" class="rounded-circle mb-3" alt="">
                            <div class="text-center">
                                <blockquote class="blockquote">
                                    <p class="col-8 offset-2 lh-sm fs-5">“Alhamdulillah, friendly juga dalam pekerjaannya. waktu sesuai dengan permintaanya. Keep it up!”</p>
                                    <span class="text-red">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </span>
                                </blockquote>
                                <figcaption class="blockquote-footer">
                                    Iqbal F. <cite title="Source Title" class="text-slate">(via Fastwork.id)</cite>
                                </figcaption>
                            </div>
                        </span>
                    </div>
                    <div class="carousel-item text-center">
                        <span>
                            <img src="public/assets/img/testimonial-photo/user-silhouette.png" width="100px" class="rounded-circle mb-3" alt="">
                            <div class="text-center">
                                <blockquote class="blockquote">
                                    <p class="col-8 offset-2 lh-sm fs-5">“Bisa mengerti kemauan client dan bisa improve dari kemauan client. Recommended!”</p>
                                    <span class="text-red">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </span>
                                </blockquote>
                                <figcaption class="blockquote-footer">
                                    Winaldi W. <cite title="Source Title" class="text-slate">(via Fastwork.id)</cite>
                                </figcaption>
                            </div>
                        </span>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#testimonials" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#testimonials" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>

    <section id="contact-section">
        <div class="container-md my-5 py-5" style="max-width: 1080px">
            <div class="row d-flex align-items-center">
                <div class="col-md-6">
                    <div class="d-flex">
                        <i class="fa-brands fa-square-whatsapp fa-3x me-3 text-red"></i>
                        <span>
                            <p class="fs-5 font-nunito-sans fw-semibold text-red mb-0">Whatsapp</p>
                            <a href="https://wa.me/message/KWKNR5G555M5E1">
                                <p class="font-nunito-sans fw-normal text-slate">+62 897 9565 131</p>
                            </a>
                        </span>
                    </div>
                    <div class="d-flex">
                        <i class="fa-solid fa-at fa-3x me-3 text-red"></i>
                        <span>
                            <p class="fs-5 font-nunito-sans fw-semibold text-red mb-0">Email</p>
                            <a href="mailto:fm@akuonline.my.id">
                                <p class="font-nunito-sans fw-normal text-slate">fm@akuonline.my.id</p>
                            </a>
                        </span>
                    </div>
                </div>
                <div class="col-md-6">
                    <h2 class="font-signika-negative fw-semibold mb-3">I'll be glad to hear from you, Let's get in touch👋</h2>
                    <div class="mb-3">
                        <label for="inputName">Name</label>
                        <input class="form-control rounded-0" type="text" name="name" id="inputName" required autocomplete="name">
                    </div>
                    <div class="mb-3">
                        <label for="inputEmail">Email</label>
                        <input class="form-control rounded-0" type="email" name="email" id="inputEmail" required autocomplete="email">
                    </div>
                    <div class="mb-3">
                        <label for="inputMessage">Message</label>
                        <textarea required class="form-control rounded-0" name="message" id="inputMessage" style="max-height: 200px; min-height: 90px;"></textarea>
                    </div>
                    <button class="btn btn-red rounded-0" onclick="sendmail()">Send <i class="fa-solid fa-paper-plane"></i></button>

                    <div class="alert alert-success rounded-0 mt-3 alert-dismissible" role="alert" id="mail-success-feedback" style="display: none">
                        Message has been sent successfully!
                        <span type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></span>
                    </div>
                    <div class="alert alert-danger rounded-0 mt-3 alert-dismissible" role="alert" id="mail-fail-feedback" style="display: none">
                        Failed to sent message!
                        <span type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?= $this->include('templates/footer') ?>
    <script src="public/assets/library/bootstrap-5.2.1/js/bootstrap.bundle.min.js"></script>
    <script src="public/assets/library/jquery-3.6.1.min.js"></script>
    <script src="public/assets/library/notiflix-aio-3.2.5.min.js"></script>
    <script>
        Notiflix.Loading.init({
            svgColor: '#ef4444',
        });

        function requiredFieldCheck() {
            $('#inputName').val() == '' ? $('#inputName').addClass('is-invalid') : $('#inputName').removeClass('is-invalid')
            $('#inputEmail').val() == '' ? $('#inputEmail').addClass('is-invalid') : $('#inputEmail').removeClass('is-invalid')
            $('#inputMessage').val() == '' ? $('#inputMessage').addClass('is-invalid') : $('#inputMessage').removeClass('is-invalid')
        }

        function sendmail() {
            requiredFieldCheck()
            var name = $('#inputName').val()
            var email = $('#inputEmail').val()
            var message = $('#inputMessage').val()
            if ($('#inpurName').val() != '' &&
                $('#inputEmail').val() != '' &&
                $('#inputMessage').val() != '') {
                Notiflix.Loading.hourglass()
                $.post("contact/sendmail", {
                        name: name,
                        email: email,
                        message: message
                    })
                    .done(function(data) {
                        Notiflix.Loading.remove()
                        if (data == "berhasil") {
                            $('#mail-success-feedback').show()
                            $('#mail-fail-feedback').hide()
                            $('#inputName').val('')
                            $('#inputEmail').val('')
                            $('#inputMessage').val('')
                        } else {
                            $('#mail-success-feedback').hide()
                            $('#mail-fail-feedback').show()
                        }
                    });
            }
        }

        function comingsoon() {
            Notiflix.Notify.info("I'm so sorry, this feature is under maintenance 🙏")
        }
    </script>
</body>

</html>