@extends('layouts.app')
@section('title', 'Create Station')
@section('content')
<div class="container-fluid">
	<h3 class="text-dark mb-4">Create station</h3>
	<div class="row mb-3">
		<div class="col-lg-8">
			<div class="row">
				<div class="col">
					<div class="card shadow mb-3">
						<div class="card-header py-3">
							<p class="text-primary m-0 fw-bold">Create station</p>
						</div>
						<div class="card-body">
							<form method="POST" action="{{ route('station.store') }}">
                                @csrf
								<div class="row">
									<div class="col">
										<div class="mb-3">
											<label class="form-label" for="username">
												<strong>station name</strong>
											</label>
											<input class="form-control" type="text" id="username-1" name="stationName">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col">
										<div class="mb-3">
											<select class="form-select form-control-user @error('town_id') is-invalid @enderror" name="town_id">
                                                @foreach ($towns as $town )
                                                    <option value="{{$town->id}}">{{$town->townName}}</option>
                                                @endforeach
                                            </select>
                                        </div>
									</div>
								</div>
								<div class="mb-3">
									<button class="btn btn-primary btn-sm" type="submit">save</button>
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