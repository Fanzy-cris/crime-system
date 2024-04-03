<!DOCTYPE html>
<html data-bs-theme="light">
    
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <title>
            Hire me - Brand
        </title>
        <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/styles.min.css')}}">
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
                            <a class="nav-link" href="/">
                                Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="projects-grid-cards.html">
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
        <main class="page hire-me-page">
            <section class="portfolio-block hire-me">
                <div class="container">
                    <div class="heading">
                        <h2>
                            <strong>
                                REGISTER YOUR COMPLAINT
                            </strong>
                        </h2>
                    </div>
                </div>
                <form method="POST" action="{{ route('complaint.store') }}" class="border rounded border-0 shadow-lg p-3 p-md-5" data-bs-theme="light">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 text-nowrap">
                            @if ( $message = session('message'))
                                <div class="alert alert-success">{{ $message }}</div>
                            @endif
                        </div>
                        <div class="col">
                            <div>
                                <label class="form-label" for="nameUserComplaints">
                                    <strong>
                                        Complainers Name
                                    </strong>
                                </label>
                                <input class="form-control @error('nameUserComplaints') is-invalid @enderror" type="text" name="nameUserComplaints">
                                @error('nameUserComplaints')
                                    <span class="invalide-feedback" role="alert">
                                        <strong>{{$message}}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col">
                            <div>
                                <label class="form-label" for="phoneNumComplaints">
                                    <strong>
                                        &nbsp;Phone Number
                                    </strong>
                                </label>
                                <input class="form-control @error('userNumComplaints') is-invalid @enderror" type="text" name="userNumComplaints">
                                @error('userNumComplaints')
                                    <span class="invalide-feedback" role="alert">
                                        <strong>{{$message}}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div>
                                <label class="form-label" for="userEmailComplaints">
                                    <strong>
                                        Complainers Email
                                    </strong>
                                </label>
                                <input class="form-control @error('userEmailComplaints') is-invalid @enderror" type="email" name="userEmailComplaints">
                                @error('userEmailComplaints')
                                    <span class="invalide-feedback" role="alert">
                                        <strong>{{$message}}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col">
                            <div>
                                <label class="form-label" for="objectComplaints">
                                    <strong>
                                        Complaint Title
                                    </strong>
                                </label>
                                <input class="form-control @error('objectComplaints') is-invalid @enderror" type="text" name="objectComplaints">
                                @error('objectComplaints')
                                    <span class="invalide-feedback" role="alert">
                                        <strong>{{$message}}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div>
                                <label class="form-label" for="userEmailComplaints">
                                    <strong>
                                        Complaint content
                                    </strong>
                                </label>
                                <textarea class="form-control @error('contentComplaints') is-invalid @enderror" name="contentComplaints"></textarea>
                                @error('contentComplaints')
                                    <span class="invalide-feedback" role="alert">
                                        <strong>{{$message}}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div>
                                <label class="form-label" for="userEmailComplaints">
                                    <strong>
                                        Police Station
                                    </strong>
                                </label>
                                @if($policeStations->count())
                                    <select class="form-select @error('police_station_id') is-invalid @enderror" name="police_station_id">

                                        @foreach ( $policeStations as $policeStation  )
                                            <option value="{{$policeStation->id}}">{{ $policeStation->town->townName }} || {{$policeStation->stationName}}</option>
                                        @endforeach
                                    </select>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div style="padding-left: 0px;padding-right: 0px;text-align: right;">
                        <button class="btn btn-primary" type="submit" style="width: 107.2656px;margin: 0px;margin-top: 28px;margin-right: 0px;padding-left: 12px;">
                            Submit
                        </button>
                    </div>
                </form>
            </section>
        </main>
        <footer class="page-footer py-3 border-top">
            <div class="container my-4">
                <div class="links">
                    <a href="#">
                        About Us
                    </a>
                    <a href="{{ route('complaint.create') }}">
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