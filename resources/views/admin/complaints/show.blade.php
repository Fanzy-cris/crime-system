@extends('layouts.app')
@section('title', 'Show complaint')
@section('content')
<div class="container-fluid">
	<h3 class="text-dark mb-4">Show Complaints</h3>
	<div class="row mb-3">
		<div class="col-lg-8">
			<div class="row">
				<div class="col">
					<div class="card shadow mb-3">
						<div class="card-header py-3">
							<p class="text-primary m-0 fw-bold">show</p>
						</div>
						<div class="card-body">
                            @if($complaint->count())
                                <form method="POST" action="{{ route('complaint.update', $complaint->id) }}">
                                    @csrf
                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3">
                                                <label class="form-label" for="username">
                                                    <strong>object complaints</strong>
                                                </label>
                                                <input class="form-control" placeholder="{{ $complaint->objectComplaints }}" type="text" id="username-1" disabled>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3">
                                                <label class="form-label" for="email">
                                                    <strong>content complaints</strong>
                                                </label>
                                                <textarea class="form-control" disabled>{{ $complaint->contentComplaints }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3">
                                                <label class="form-label" for="first_name">
                                                    <strong>name of user</strong>
                                                </label>
                                                <input class="form-control" type="text" id="first_name-1" placeholder="{{ $complaint->nameUserComplaints }}" disabled>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="mb-3">
                                                <label class="form-label" for="last_name">
                                                    <strong>email of user</strong>
                                                </label>
                                                <input class="form-control" type="text" id="last_name-1" placeholder="{{ $complaint->userEmailComplaints }}" disabled>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3">
                                                <label class="form-label" for="last_name">
                                                    <strong>phone number of user</strong>
                                                </label>
                                                <input class="form-control" type="text" id="last_name-1" placeholder="{{ $complaint->userNumComplaints }}" disabled>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3">
                                                <div class="form-check">
                                                    <input type="radio" class="form-check-input @error('state') is-invalid @enderror" id="radio1" name="state" value="1" checked>Validate
                                                    <label class="form-check-label" for="radio1"></label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="radio" class="form-check-input @error('state') is-invalid @enderror" id="radio2" name="state" value="0">reject
                                                    <label class="form-check-label" for="radio2"></label>
                                                </div>
                                                @error('state')

                                                    <span class="invalide-feedback" role="alert">
                                                        <strong>{{$message}}</strong>
                                                    </span>
                                                    
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="mb-3">
                                                <label class="form-label" for="last_name">
                                                    <strong>If validate choose the time for meet</strong>
                                                </label>
                                                <input class="form-control @error('datetime') is-invalid @enderror" type="datetime-local" id="last_name-1" name="datetime">
                                                @error('datetime')

                                                    <span class="invalide-feedback" role="alert">
                                                        <strong>{{$message}}</strong>
                                                    </span>
                                                    
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <button class="btn btn-primary btn-sm" type="submit">Validate</button>
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