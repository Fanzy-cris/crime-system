@extends('layouts.app')
@section('title', 'Show complaint')
@section('content')
    <div class="container-fluid">
        <h3 class="text-dark mb-4">Show Complaints</h3>
        <div class="row mb-3">
            <div class="col-lg-4">
                <div class="card mb-3">
                    <div class="card-body text-center shadow"><img class="rounded-circle mb-3 mt-4" src="../assets/img/dogs/police1.jpeg" width="254" height="274">
                        <div class="mb-3"></div>
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
                                <p class="text-primary m-0 fw-bold">show</p>
                            </div>
                            <div class="card-body">
                                <form>
                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3"><label class="form-label" for="username"><strong>object complaints</strong></label><input class="form-control" type="text" id="username-1" name="object complaints" value="objectComplaints"></div>
                                        </div>
                                        <div class="col">
                                            <div class="mb-3"><label class="form-label" for="email"><strong>content complaints</strong></label><input class="form-control" type="email" id="email-1" placeholder="content complaints" name="content Complaints"></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3"><label class="form-label" for="first_name"><strong>name of user</strong></label><input class="form-control" type="text" id="first_name-1" placeholder="John" name="nameUserCompaint"></div>
                                        </div>
                                        <div class="col">
                                            <div class="mb-3"><label class="form-label" for="last_name"><strong>email of user</strong></label><input class="form-control" type="text" id="last_name-1" placeholder="objects" name="userEmailComplaint" value="userEmailComplaint"></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3"><label class="form-label" for="first_name"><strong>user phone number</strong></label><input class="form-control" type="text" id="first_name-2" placeholder="John" name="phoneNumComplaint" value="phoneNumComplaint"></div>
                                        </div>
                                        <div class="col">
                                            <div class="mb-3"><label class="form-label" for="last_name"><strong>complaint stage</strong></label><input class="form-control" type="text" id="last_name-2" name="state"></div>
                                        </div>
                                    </div>
                                    <div class="mb-3"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection