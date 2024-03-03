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
		<div class="card shadow-lg o-hidden border-0 my-5">
			<div class="card-body p-0">
				<div class="row">
					<div class="col-lg-5 d-none d-lg-flex bg-white"><img class="img-fluid border rounded-0" src="{{asset('img/policecrime.jpeg')}}" width="441" height="707"></div>
					<div class="col-lg-7">
						<div class="p-5">
							<div class="text-center">
								<h4 class="text-dark mb-4">Create an Account!</h4> </div>

							<form class="user" method="POST" action="{{ route('register') }}">
                                @csrf
								<div class="row mb-3">
									<div class="col-sm-6 mb-3 mb-sm-0">
										<input class="form-control form-control-user @error('nameUser') is-invalide @enderror" type="text" id="exampleFirstName" value="{{old('nameUser')}}" placeholder="Enter First Name" name="nameUser">

                                        @error('nameUser')

                                           <span class="invalide-feedback" role="alart">
                                            <strong>{{$message}}</strong>
                                           </span>
                                            
                                        @enderror
									</div>
									<div class="col-sm-6">
										<input class="form-control form-control-user @error('surNameUser') is-invalide @enderror" type="text" id="exampleLastName" placeholder="Enter Last Name" name="surNameUser">

                                        @error('surNameUser')
                                        <span class="invalide-feedback" role="alart">
                                            <strong>{{$message}}</strong>  

                                        </span>
                                        
                                        @enderror
                                        


									</div>
								</div>
								<div class="mb-3">
									<input class="form-control form-control-user @error('emailUser') is-invalide @enderror" type="email" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address" name="emailUser" required>

                                    @error('emailUser')
                                        <span class="invalide-feedback" role="alart">
                                            <strong>{{$message}}</strong>  

                                        </span>
                                        
                                    @enderror
								</div>
								<div class="mb-3">
									<input class="form-control form-control-user @error('phoneUser') is-invalide @enderror" type="text" id="exampleInputEmail-1" aria-describedby="emailHelp" placeholder="Enter phone number" name="phoneUser">

                                    @error('phoneUser')
                                        <span class="invalide-feedback" role="alart">
                                            <strong>{{$message}}</strong>  

                                        </span>
                                        
                                    @enderror
								</div>
                                <div class="mb-3">
									<input class="form-control form-control-user @error('badgeNumUser') is-invalide @enderror" type="text" id="exampleInputEmail-1" aria-describedby="emailHelp" placeholder="Enter your badge number" name="badgeNumUser">

                                    @error('badgeNumUser')
                                        <span class="invalide-feedback" role="alart">
                                            <strong>{{$message}}</strong>  

                                        </span>
                                        
                                    @enderror
								</div>
								<div class="row mb-3">
									<div class="col-sm-6 mb-3 mb-sm-0">
										<input class="form-control form-control-user @error('passwordUser') is-invalide @enderror" type="password" id="examplePasswordInput" placeholder="Password" name="passwordUser">

                                        @error('passwordUser')
                                        <span class="invalide-feedback" role="alart">
                                            <strong>{{$message}}</strong>  

                                        </span>
                                        
                                        @enderror
									</div>
									<div class="col-sm-6">
										<input class="form-control form-control-user @error('passwordUser') is-invalide @enderror" type="password" id="exampleRepeatPasswordInput" placeholder="Repeat Password" name="password_repeat">

                                        @error('password_repeat')
                                        <span class="invalide-feedback" role="alart">
                                            <strong>{{$message}}</strong>  

                                        </span>
										@enderror
									</div>
								</div>
								<div class="mb-3">
									<select class="form-select form-control-user">

										@foreach ($Type as $Type )
											
										
										<optgroup value="{{$Type->id}}">{{$Type->nameType}}

										@endforeach

											<option value="12" selected="">HEAD</option>
											<option value="13">IN CHARGE</option>
											<option value="14">POLICE</option>
										</optgroup>
									</select>
								</div>
								<div class="mb-3">
									<select class="form-select form-control-user">

										@foreach ( $station as $station  )
											
										
										<optgroup value="{{$station->id}}">{{$station->stationName}}

									 @endforeach
											<option value="12" selected="">This is item 1</option>
											<option value="13">This is item 2</option>
											<option value="14">This is item 3</option>
										</optgroup>
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