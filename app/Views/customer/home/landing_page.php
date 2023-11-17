<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap" rel="stylesheet">
    <!-- css -->
    <link rel="stylesheet" href="<?=base_url("assets/css/landingpage.css")?>">
    <link rel="stylesheet" href="<?=base_url("assets/css/footer.css")?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <!-- icon -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

    <title>Ecommerce Thrifting</title>
</head>
<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
    <div class="container-fluid ms-5 me-5">
        <a class="navbar-brand" href="#">Thrifting<span>Web</span>.</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mx-auto">
            <li class="nav-item">
                <a class="nav-link" href="#home">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#about">About Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#contact">Contact</a>
            </li>
        </ul>
        </div>
        <ul class="navbar-nav mx-auto">
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('/login')?>">Sign In</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('/register')?>">Sign Up</a>
            </li>
        </ul>
    </div>
</nav>

<section class="hero" id="home">
    <main class="content">
    <div class="text-and-image">
        <div class="text">
        <h1>"Discovering Treasures at the <br><span>Thrift</span> Store"</h1>
        <p>Exploring the vintage and secondhand wonders in the thrift store, where every item <br>tells a unique story and offers an eco-friendly and budget-conscious shopping experience.</p>
        <a href="#" type="button" class="btn btn-primary" style="font-weight: 700;">Sign in</a>
        <form action="<?= url_to('logout') ?>">
            <?= csrf_field() ?>
            <button type="submit">Logout</button>
        </form>
        </div>
        <div class="hero-img">
            <img src="<?= base_url('assets/img/hero.png') ?>" alt="" >
        </div>
    </div>
    </main>
</section>

<!-- about -->
<section id="about" class="about">
    <h2><span>About</span> Us</h2>

    <div class="row">
        <div class="about-img">
            <img src="<?= base_url('assets/img/about.jpg') ?>" alt="About Us">
        </div>
        <div class="content">
            <h3>Why Thrifting?</h3>
            <p>Thrifting is more than just shopping; it's a conscious lifestyle. By choosing thrifting, you're not only finding unique fashion pieces, but also reducing the environmental impact of fast fashion. It's about embracing pre-loved items, reducing waste, and supporting a more sustainable future. Join the thrifting movement today and be a part of positive change.</p> 
        </div>
    </div>
</section>

<!-- footer -->
    <footer class="footer" id="contact">
        <div class="footer-container">
            <div class="footer-row">
                <div class="footer-col">
                    <h4>Contact Us</h4>
                    <div class="contact-links">
                    <ul>
                        <li><a href="#"><i class="fas fa-map-marker-alt"></i></a><span>Indonesia, Bandar Lampung</span></li>
                        <a href="#"><i class="fas fa-envelope"></i></a><span>thriftingwebindo@gmail.com<span>
                        </ul>
                    </div>
                </div>
                <div class="footer-col">
                    <h4>follow us</h4>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-bar"><p>@2023 ThriftingWeb | All Right Reserved</p></div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>