@extends('layouts.app')
@section('title', 'Show town')
@section('content')
<div class="container-fluid">
	<div class="row mb-3"> <div class="col-lg-8">
			<div class="row">
				<div class="col">
					<div class="card shadow mb-3">
						<div class="card-header py-3">
							<p class="text-primary m-0 fw-bold">update town</p>
						</div>
						<div class="card-body">
                            @if($town->count())
                                <form method="POST" action="{{ route('town.update', $town->id) }}">
                                    @csrf
                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3">
                                                <label class="form-label" for="first_name">
                                                    <strong>Town Name</strong>
                                                </label>
                                                <input class="form-control @error('townName') is-invalid @enderror" type="text" id="first_name-1" placeholder="{{ $town->townName }}" name="townName">
                                                @error('townName')

                                                    <span class="invalide-feedback" role="alert">
                                                        <strong>{{$message}}</strong>
                                                    </span>
                                                    
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <button class="btn btn-primary btn-sm" type="submit">SAVE</button>
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