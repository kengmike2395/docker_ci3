<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agilab</title>
    <link rel="stylesheet" href="/assets/style/common.css?<?= time() ?>">
    <link rel="stylesheet" href="/assets/style/login/login.css?<?= time() ?>">
    <link rel="stylesheet" href="/assets/font-awesome-4.7.0/css/font-awesome.min.css?<?= time() ?>">
    <script type="module" src="/assets/js/login/login_view.js?<?= time() ?>"></script>


</head>

<body>
    <header class="header">
        <nav class="header_nav wrapper">
            <div class="header_nav_logo">
                <img class="header__nav_logo" src="/assets/images/global-images/agilab.png" alt="agilablogo" width="150"
                    height="40">
            </div>

            <div class="header_nav_buttons">
                <button class="header__nav_login-btn">LOG IN</button>
                <button class="header__nav_signup-btn">SIGN UP</button>
            </div>

        </nav>
    </header>

    <main class="hero wrapper">
        <div class="hero-container">
            <h1 class="hero-container__main-text">Learn the Skills to Build & Grow You Business</h1>
            <p class="hero-container__para">Expert-led courses, hands-on mentorship, and a thriving community-all in one
                place.</p>

            <a href="_blank">create an account</a>
        </div>


    </main>

    <section class="features">
        <h1 class="features__heading">Why Choose Agilab</h1>

        <!--Login_view.js-->
        <div class="features__block"></div>
    </section>

    <section class="learning-methods">
        <h1 class="learning-methods__heading">How You'll Learn</h1>

        <!--Login_view.js-->
        <div class="learning-methods__block"></div>
    </section>

    <section class="testimonials">
        <h1 class="testimonials__heading">What Our Learners Say</h1>

        <!--Login_view.js-->
        <div class="testimonials__block"></div>
    </section>

    <footer class="footer">
        <div class="footer__upper">
            <h1 class="footer__content-heading">Take classes alongside over <br>52 Thousand Learners</h1>

            <a href="_blank">start learning now</a>
        </div>

        <div class="footer__lower">
            <p class="footer__lower_para">&copy;<?= date("Y") ?> Agilab All rights reserved</p>

            <div class="footer__lower-socialmedia">
                <a href="_blank">
                    <i class="fa fa-instagram" aria-hidden="true"></i>
                </a>

                <a href="_blank">
                    <i class="fa fa-dribbble" aria-hidden="true"></i>
                </a>

                <a href="_blank">
                    <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>

                <a href="_blank">
                    <i class="fa fa-youtube-play" aria-hidden="true"></i>
                </a>
            </div>
        </div>
    </footer>

</body>

</html>