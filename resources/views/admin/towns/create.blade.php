@extends('layouts.app')
@section('title', 'Create towns')
@section('content')
<div class="container-fluid">
    <h3 class="text-dark mb-4">Create Type</h3>
    <div class="row mb-3">
        <div class="col-lg-8">
            <div class="row">
                <div class="col">
                    <div class="card shadow mb-3">
                        <div class="card-header py-3">
                            <p class="text-primary m-0 fw-bold">create town</p>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('town.store') }}">
                                @csrf
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label" for="first_name">
                                                <strong>town Name</strong>
                                            </label>
                                            <input class="form-control @error('townName') is-invalid @enderror" type="text" id="first_name-1" name="townName">
                                            @error('townName')
                                                <span class="invalide-feedback" role="alert">
                                                    <strong>{{$message}}</strong>
                                                </span>                                                   
                                            @enderror
                                        </div>
                                    </div>
                                <div class="mb-3">
                                    <button class="btn btn-primary btn-sm" type="submit">create</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection