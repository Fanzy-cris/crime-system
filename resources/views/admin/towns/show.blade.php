@extends('layouts.app')
@section('title', 'Show town')
@section('content')
    <div class="container-fluid">
        <h3 class="text-dark mb-4">Show</h3>
        <div class="row mb-3">
            <div class="col-lg-8">
                <div class="row">
                    <div class="col">
                        <div class="card shadow mb-3">
                            <div class="card-header py-3">
                                <p class="text-primary m-0 fw-bold">Show town</p>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label" for="first_name">
                                                <strong>town Name</strong>
                                            </label>
                                            @if($town->count())
                                                <input class="form-control" placeholder="{{ $town->townName }}" type="text" id="first_name-1" name="nameType" disabled>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
@endsection