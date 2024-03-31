@extends('layouts.app')
@section('title', 'Station show')
@section('content')
<div class="container-fluid">
    <h3 class="text-dark mb-4">Update town</h3>
    <div class="row mb-3">
        <div class="col-lg-8">
            <div class="row">
                <div class="col">
                    <div class="card shadow mb-3">
                        <div class="card-header py-3">
                            <p class="text-primary m-0 fw-bold">update station</p>
                        </div>
                        <div class="card-body">
                            @if($policeStation->count() && $towns->count())
                                <form method="POST" action="{{ route('station.update', $policeStation->id) }}">
                                    @csrf
                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3">
                                                <label class="form-label" for="username">
                                                    <strong>station Name</strong>
                                                </label>
                                                <input class="form-control" type="text" id="username-1" placeholder="{{ $policeStation->stationName }}" name="stationName">
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