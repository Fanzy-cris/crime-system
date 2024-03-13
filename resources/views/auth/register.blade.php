<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<title>Register - POLICE SYSTEM</title>
	<link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/Nunito.css')}}"> </head>

<body class="bg-white">
	<div class="container">
		<div class="my-5 border-0 shadow-lg card o-hidden">
			<div class="p-0 card-body">
				<div class="row">
					<div class="bg-white col-lg-5 d-none d-lg-flex"><img class="border img-fluid rounded-0" src="{{asset('img/policecrime.jpeg')}}" width="441" height="707"></div>
					<div class="col-lg-7">
						<div class="p-5">
							<div class="text-center">
								<h4 class="mb-4 text-dark">Create an Account!</h4> </div>

							<form class="user" method="POST" action="{{ route('register') }}">
                                @csrf
								<div class="mb-3 row">
									<div class="mb-3 col-sm-6 mb-sm-0">
										<input class="form-control form-control-user @error('nameUser') is-invalid @enderror" type="text" id="exampleFirstName" value="{{old('nameUser')}}" placeholder="Enter First Name" name="nameUser">

                                        @error('nameUser')

                                           <span class="invalide-feedback" role="alart">
                                            <strong>{{$message}}</strong>
                                           </span>
                                            
                                        @enderror
									</div>
									<div class="col-sm-6">
										<input class="form-control form-control-user @error('surNameUser') is-invalid @enderror" type="text" id="exampleLastName" placeholder="Enter Last Name" name="surNameUser">

                                        @error('surNameUser')
                                        <span class="invalide-feedback" role="alart">
                                            <strong>{{$message}}</strong>  

                                        </span>
                                        
                                        @enderror
                                        


									</div>
								</div>
								<div class="mb-3">
									<input class="form-control form-control-user @error('email') is-invalid @enderror" type="email" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address" name="email" required>

                                    @error('email')
                                        <span class="invalide-feedback" role="alart">
                                            <strong>{{$message}}</strong>  

                                        </span>
                                        
                                    @enderror
								</div>
								<div class="mb-3">
									<input class="form-control form-control-user @error('phoneUser') is-invalid @enderror" type="text" id="exampleInputEmail-1" aria-describedby="emailHelp" placeholder="Enter phone number" name="phoneUser">

                                    @error('phoneUser')
                                        <span class="invalid-feedback" role="alart">
                                            <strong>{{$message}}</strong>  

                                        </span>
                                        
                                    @enderror
								</div>
                                <div class="mb-3">
									<input class="form-control form-control-user @error('badgeNumUser') is-invalid @enderror" type="text" id="exampleInputEmail-1" aria-describedby="emailHelp" placeholder="Enter your badge number" name="badgeNumUser">

                                    @error('badgeNumUser')
                                        <span class="invalide-feedback" role="alart">
                                            <strong>{{$message}}</strong>
                                        </span>
                                        
                                    @enderror
								</div>
								<div class="mb-3 row">
									<div class="mb-3 col-sm-6 mb-sm-0">
										<input class="form-control form-control-user @error('password') is-invalid @enderror" type="password" id="examplePasswordInput" placeholder="Password" name="password">

                                        @error('password')
                                        <span class="invalide-feedback" role="alart">
                                            <strong>{{$message}}</strong>
                                        </span>
                                        
                                        @enderror
									</div>
									<div class="col-sm-6">
										<input class="form-control form-control-user @error('password_confirmation') is-invalid @enderror" type="password" id="exampleRepeatPasswordInput" placeholder="Repeat Password" name="password_confirmation" autocomplete="new-password">
                                        @error('password_confirmation')
                                        <span class="invalide-feedback" role="alart">
                                            <strong>{{$message}}</strong>  
                                        </span>
										@enderror
									</div>
								</div>
								<div class="mb-3">
									<select class="form-select form-control-user @error('TypeId') is-invalid @enderror" name="TypeId">

										@foreach ($Types as $Type )
											<option value="{{$Type->id}}">{{$Type->nameType}}</option>
										@endforeach
									</select>
								</div>
								<div class="mb-3">
									<select class="form-select form-control-user @error('StationId') is-invalid @enderror" name="StationId">

										@foreach ( $Stations as $Station  )
											<option value="{{$Station->id}}">{{$Station->stationName}}</option>
									 	@endforeach
									</select>
								</div>
								<button class="btn btn-primary bg-success d-block btn-user w-100" type="submit">Register Account</button>
								<hr>
								<hr> </form>
							<div class="text-center"><a class="small" href="{{route('password.request')}}">Forgot Password?</a></div>
							<div class="text-center"><a class="small" href="{{route('login')}}">Already have an account? Login!</a></div>
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