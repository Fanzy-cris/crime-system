<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<title>Login - POLICE SYSTEM</title>
	<link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/Nunito.css')}}"> </head>

<body class="bg-white">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-9 col-lg-12 col-xl-10">
				<div class="card shadow-lg o-hidden border-0 my-5">
					<div class="card-body p-0">
						<div class="row">
							<div class="col-lg-6 d-none d-lg-flex"><img src="{{asset('img/policecrime.jpeg')}}" width="398" height="601"></div>
							<div class="col-lg-6">
								<div class="p-5">
									<div class="text-center">
										<h4 class="text-dark mb-4">Welcome Back!</h4> </div>
									<form class="user"  method="POST" action="{{ route('login') }}">
										@csrf
										<div class="mb-3">
											<input class="form-control form-control-user @error('email') is-invalide @enderror" type="email" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email" name="email">

                                              
									        @error ('email')
                                              <span class="invalide-feedback" role="alart">
                                                <strong>{{$message}}</strong> 

                                              </span>
                                            @enderror

                                        
										</div>
										<div class="mb-3">
											<input class="form-control form-control-user @error('password') is-invalide @enderror" type="password" id="exampleInputPassword" placeholder="Password" name="password">

                                            @error('password')
                                              <span class="invalide-feedback" role="alart">
                                                <strong>{{$message}}</strong> 

                                              </span>
											@enderror
										</div>
										<div class="mb-3">
											<div class="custom-control custom-checkbox small">
												<div class="form-check">
													<input class="form-check-input custom-control-input" type="checkbox" id="formCheck-1">
													<label class="form-check-label text-success custom-control-label" for="formCheck-1">Remember Me</label>
												</div>
											</div>
										</div>
										<button class="btn btn-success d-block btn-user w-100" type="submit">Login</button>
										<hr> </form>
									<div class="text-center"><a class="link-success small" href= "{{route('password.request')}}">Forgot Password?</a></div>
									<div class="text-center"><a class="link-success small" href="{{route('register') }}">Create an Account!</a></div>
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