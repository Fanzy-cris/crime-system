@extends('layouts.app')
@section('title', 'Profile')
@section('content')
    <div class="container-fluid">
        <h3 class="text-dark mb-4">Profile</h3>
        <div class="row mb-3">
            <div class="col-lg-4">
                <div class="card mb-3">
                    <div class="card-body text-center bg-primary shadow" style="background: var(--bs-card-cap-bg);"><img class="bg-primary border rounded-circle" src="../assets/img/pexels-photo-7785098.jpeg" width="253" height="292">
                        <div class="mb-3"><button class="btn btn-primary btn-sm" type="button">Change Photo</button></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="row mb-3 d-none">
                    <div class="col">
                        <div class="card text-white bg-primary shadow">
                            <div class="card-body">
                                <div class="row mb-2">
                                    <div class="col">
                                        <p class="m-0">Peformance</p>
                                        <p class="m-0"><strong>65.2%</strong></p>
                                    </div>
                                    <div class="col-auto"><i class="fas fa-rocket fa-2x"></i></div>
                                </div>
                                <p class="text-white-50 small m-0"><i class="fas fa-arrow-up"></i>&nbsp;5% since last month</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card text-white bg-success shadow">
                            <div class="card-body">
                                <div class="row mb-2">
                                    <div class="col">
                                        <p class="m-0">Peformance</p>
                                        <p class="m-0"><strong>65.2%</strong></p>
                                    </div>
                                    <div class="col-auto"><i class="fas fa-rocket fa-2x"></i></div>
                                </div>
                                <p class="text-white-50 small m-0"><i class="fas fa-arrow-up"></i>&nbsp;5% since last month</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="card shadow mb-3">
                            <div class="card-header py-3">
                                <p class="text-primary m-0 fw-bold">User Settings</p>
                            </div>
                            <div class="card-body">
                                <form>
                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3"><label class="form-label" for="username"><strong>Phone number</strong></label><input class="form-control" type="text" id="username" name="username"></div>
                                        </div>
                                        <div class="col">
                                            <div class="mb-3"><label class="form-label" for="email"><strong>Email Address</strong></label><input class="form-control" type="email" id="email" placeholder="user@example.com" name="email"></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3"><label class="form-label" for="username">Name</label><input class="form-control" type="text" id="username-1" name="username" placeholder="john"></div>
                                        </div>
                                        <div class="col">
                                            <div class="mb-3"><label class="form-label" for="email"><strong>Sur Name</strong></label><input class="form-control" type="email" id="email-1" placeholder="che" name="email"></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3"><label class="form-label" for="first_name"><strong>Password</strong></label><input class="form-control" type="text" id="first_name" placeholder="*****" name="first_name"></div>
                                        </div>
                                        <div class="col">
                                            <div class="mb-3"><label class="form-label" for="last_name"><strong>Repeat Password</strong></label><input class="form-control" type="text" id="last_name" placeholder="*****" name="last_name"></div>
                                        </div>
                                    </div>
                                    <div class="mb-3"><button class="btn btn-primary btn-sm" type="submit">Save Settings</button></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card shadow mb-5"></div>
    </div>  
@endsection