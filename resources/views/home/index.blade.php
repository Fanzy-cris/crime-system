<!DOCTYPE html>
<html data-bs-theme="light">
    
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <title>
            Home - Brand
        </title>
        <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/styles.min.css') }}">
    </head>
    
    <body>
        <nav class="navbar navbar-expand-lg fixed-top portfolio-navbar gradient navbar-dark">
            <div class="container">
                <a class="navbar-brand logo" href="#">
                    <img src="{{ asset('img/clipboard-image.png') }}"
                    width="73" height="69" style="border-radius: 71px;">
                </a>
                <button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navbarNav">
                    <span class="visually-hidden">
                        Toggle navigation
                    </span>
                    <span class="navbar-toggler-icon">
                    </span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ route('home') }}">
                                Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">
                                About us
                            </a>
                        </li>
                    </ul>
                    <button class="btn btn-primary" type="button">
                        Sign in
                    </button>
                </div>
            </div>
        </nav>
        <main class="page lanidng-page">
            <section class="portfolio-block block-intro">
                <div class="row" style="margin-top: 67px;">
                    <div class="col">
                        <div>
                            <div>
                                <img class="img-thumbnail" src="{{ asset('img/report.jpeg') }}"
                                width="569" height="350" style="border-radius: 40px;">
                            </div>
                            <a href="Register-Complaints.html"><button a class="btn btn-primary btn-lg" type="button" style="width: 423.984px;font-size: 31px;">
                                Report&nbsp; Crime
                                <a href="Register-Complaints.html"></a>
                            </button></a>
                        </div>
                    </div>
                    <div class="col">
                        <div>
                            <img width="410" height="342" src="{{ asset('img/call.jpeg') }}"
                            style="border-radius: 35px;background: var(--bs-indigo);">
                            <div class="dropdown">
                                <button class="btn btn-primary btn-lg dropdown-toggle" aria-expanded="false"
                                data-bs-toggle="dropdown" type="button" style="width: 434.953px;font-size: 28px;height: 71px;">
                                    call in case of emegency&nbsp;
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">
                                        call 
                                    </a>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="portfolio-block photography">
                <div class="container">
                    <h1 style="text-align: center;">
                        View Related Crimes
                    </h1>
                    <div class="row g-0">
                        <div class="col-md-6 col-lg-4 item zoom-on-hover">
                            <a href="#">
                                <img class="img-fluid image" src="{{ asset('img/kidnap.jpeg') }}"
                                style="width: 430px;border-radius: 40px;">
                            </a>
                        </div>
                        <div class="col-md-6 col-lg-4 item zoom-on-hover">
                            <a href="#">
                                <img class="img-fluid image" src="{{ asset('img/asult.jpeg') }}"
                                style="border-radius: 51px;">
                            </a>
                        </div>
                        <div class="col-md-6 col-lg-4 item zoom-on-hover">
                            <a href="#">
                                <img class="img-fluid image" src="{{ asset('img/arm robberry.jpeg') }}"
                                style="width: 434px;border-radius: 62px;">
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <section class="portfolio-block call-to-action border-bottom">
                <div class="container">
                    <div class="d-flex justify-content-center align-items-center content">
                        <h3>
                            what can we do?
                        </h3>
                    </div>
                </div>
            </section>
            <section class="portfolio-block skills">
                <div class="container">
                    <div class="row">
                        <div class="col">
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <footer class="page-footer py-3 border-top">
            <div class="container my-4">
                <div class="links">
                    <a href="#">
                        About Us
                    </a>
                    <a href="#">
                        Report a Crime
                    </a>
                </div>
                <div class="social-icons">
                    <a class="me-3" href="#">
                    </a>
                    <p>
                        <span style="color: rgb(0, 0, 0);">
                            Copyright © Crime Report 2024
                        </span>
                    </p>
                </div>
            </div>
        </footer>
        <script src="{{asset('bootstrap/js/bootstrap.min.js')}}">
        </script>
        <script src="{{ asset('js/script.min.js') }}">
        </script>
    </body>

</html>