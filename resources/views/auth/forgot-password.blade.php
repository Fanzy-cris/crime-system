<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Forgotten Password - POLICE SYSTEM</title>
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/Nunito.css')}}">
</head>

<body class="bg-white">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9 col-lg-12 col-xl-10">
                <div class="card shadow-lg o-hidden border-0 my-5">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-flex"><img src="{{asset('img/policecrime.jpeg')}}" width="418" height="602"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h4 class="text-dark mb-2">Forgot Your Password?</h4>
                                        <p class="mb-4">We get it, stuff happens. Just enter your email address below and we'll send you a link to reset your password!</p>
                                    </div>

                                    <form class="user" method="POST" action="{{ route('password.store') }}">
                                      @csrf

                                        <div class="mb-3"><input class="form-control form-control-user @error('emailUser') is-invaide @enderror" type="email" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address..." name="email"></div><button class="btn btn-success d-block btn-user w-100" type="submit">Reset Password</button>

                                        @error('emailUser')
                                              <span class="invalide-feedback" role="alart">
                                                <strong>{{$message}}</strong> 

                                              </span>
                                        @enderror
                                    </form>
                                    <div class="text-center">
                                        <hr><a class="link-success small" href="{{route('register')}}" style="border-color: rgb(78, 115, 223);">Create an Account!</a>
                                    </div>
                                    <div class="text-center"><a class="link-success small" href="{{route('login')}}">Already have an account? Login!</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/bs-init.js')}}"></script>
    <script src="{{asset('js/theme.js')}}"></script>
</body>

</html>