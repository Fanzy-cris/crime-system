@extends('layouts.app')
@section('title', 'Station show')
@section('content')
<div class="container-fluid">
	<h3 class="text-dark mb-4">Show station</h3>
	<div class="row mb-3">
		<div class="col-lg-8">
			<div class="row">
				<div class="col">
					<div class="card shadow mb-3">
						<div class="card-header py-3">
							<p class="text-primary m-0 fw-bold">Show</p>
						</div>
						<div class="card-body">
                            @if($policeStation->count())
                                <form>
                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3">
                                                <label class="form-label" for="username">
                                                    <strong>station name</strong>
                                                </label>
                                                <input placeholder="{{ $policeStation->stationName }}" class="form-control" type="text" id="username-1"disabled>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3">
                                                <label class="form-label" for="first_name">
                                                    <strong>town</strong>
                                                </label>
                                                <input placeholder="{{ $policeStation->town->townName }}" class="form-control" type="text" id="first_name-1" disabled>
                                            </div>
                                        </div>
                                    </div>
                                </form>   
                            @endif
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>   
@endsection