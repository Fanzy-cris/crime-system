@extends('layouts.app')
@section('title', 'Types edit')
@section('content')
<div class="container-fluid">
	<div class="row mb-3"> <div class="col-lg-8">
			<div class="row">
				<div class="col">
					<div class="card shadow mb-3">
						<div class="card-header py-3">
							<p class="text-primary m-0 fw-bold">update type</p>
						</div>
						<div class="card-body">
                            @if($type->count())
                                <form method="POST" action="{{ route('type.update', $type->id) }}">
                                    @csrf
                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3">
                                                <label class="form-label" for="first_name">
                                                    <strong>Type Name</strong>
                                                </label>
                                                <input class="form-control @error('nameType') is-invalid @enderror" type="text" id="first_name-1" placeholder="{{ $type->nameType }}" name="nameType">
                                                @error('nameType')

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