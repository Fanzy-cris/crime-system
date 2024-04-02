@extends('layouts.app')
@section('title', 'Profile')
@section('content')
<div class="container-fluid">
    <h3 class="text-dark mb-4">Profile</h3>
    <div class="row mb-3">
      <div class="col-lg-8">
        <div class="row">
          <div class="col">
            <div class="card shadow mb-3">
              <div class="card-header py-3">
                <p class="text-primary m-0 fw-bold">User Settings</p>
                <div class="col-md-6 text-nowrap">
                    @if ( $message = session('message'))
                        <div class="alert alert-success">{{ $message }}</div>
                    @endif
                </div>
              </div>
              <div class="card-body">
                <form method="POST" action="{{ route('profile.update', Auth::user()->id) }}">
                    @csrf
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label class="form-label" for="username">
                                    <strong>Phone number</strong>
                                </label>
                                <input class="form-control @error('phoneUser') is-invalid @enderror" value="{{ Auth::user()->phoneUser }}" type="text" id="username" name="phoneUser">
                                @error('phoneUser')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{$message}}</strong>  
                                    </span>                   
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label class="form-label" for="username">
                                    <strong>Name</strong>
                                </label>
                                <input class="form-control @error('nameUser') is-invalid @enderror" value="{{ Auth::user()->nameUser }}" type="text" id="username-1" name="nameUser">
                                @error('nameUser')
                                    <span class="invalide-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                    </span>                             
                                @enderror
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label class="form-label" for="email">
                                    <strong>Sur Name</strong>
                                </label>
                                <input class="form-control @error('surNameUser') is-invalid @enderror" value="{{ Auth::user()->surNameUser }}" type="text" id="email-1" name="surNameUser">
                                @error('surNameUser')
                                    <span class="invalide-feedback" role="alert">
                                        <strong>{{$message}}</strong>  
                                    </span>                               
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label class="form-label" for="first_name">
                                    <strong>Password</strong>
                                </label>
                                <input class="form-control @error('password') is-invalid @enderror" type="password" id="first_name" name="password">
                                    @error('password')
                                        <span class="invalide-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                    @enderror
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label class="form-label" for="last_name">
                                    <strong>Repeat Password</strong>
                                </label>
                                <input class="form-control @error('password_confirmation') is-invalid @enderror" type="password" id="last_name" name="password_confirmation" autocomplete="new-password">
                                @error('password_confirmation')
                                    <span class="invalide-feedback" role="alert">
                                        <strong>{{$message}}</strong>  
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-primary btn-sm" type="submit">Save Settings</button>
                    </div>
                </form>  
                <div class="mb-3">
                    <form id="delete-form-{{ Auth::user()->id }}" action="{{ route('profile.destroy', Auth::user()->id ) }}" method="post" style="display: none;">
                        @csrf
                    </form>
                    <a onclick="event.preventDefault(); document.getElementById('delete-form-{{ Auth::user()->id }}').submit();" class="btn btn-danger btn-sm" type="submit">Delete account</a>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="card shadow mb-5"></div>
  </div>  
@endsection