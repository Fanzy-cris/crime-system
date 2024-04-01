@extends('layouts.app')
@section('title', 'Complaint')
@section('content')
<div class="container-fluid">
	<h3 class="text-dark mb-4">Complaints List</h3>
	<div class="card shadow">
		<div class="card-body">
			<div class="row">
				<div class="col-md-6 text-nowrap">
					@if ( $message = session('message'))
                        <div class="alert alert-success">{{ $message }}</div>
                    @endif
				</div>
			</div>
			<div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
				<table class="table table-striped-columns table-hover table-sm my-0" id="dataTable">
					<thead>
						<tr>
							<th>object Complaints</th>
							<th>name of complainer</th>
							<th>tel of complainer</th>
							<th>Email of complainer</th>
							<th>Stage</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
                        @if($complaints->count())
                            @foreach($complaints as $complaint)
                                <tr>
                                    <td>{{ $complaint->objectComplaints }}</td>
                                    <td>{{ $complaint->nameUserComplaints }}</td>
                                    <td>{{ $complaint->userNumComplaints }}</td>
                                    <td>{{ $complaint->userEmailComplaints }}</td>
                                    <td class="text-white {{ $complaint->state == 0 ? 'bg-danger' : 'bg-success' }}">{{ $complaint->state == 0 ? 'in process' : 'validate' }}</td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <a class="btn btn-success" href="{{ route('complaint.show', $complaint->id) }}" data-bs-toggle="tooltip" data-bss-tooltip="" data-bs-placement="bottom" type="button" title="SEE">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -32 576 576" width="1em" height="1em" fill="currentColor" data-bs-toggle="tooltip" data-bss-tooltip="" data-bs-placement="bottom" title="SHOW">
                                                    <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                                    <path d="M279.6 160.4C282.4 160.1 285.2 160 288 160C341 160 384 202.1 384 256C384 309 341 352 288 352C234.1 352 192 309 192 256C192 253.2 192.1 250.4 192.4 247.6C201.7 252.1 212.5 256 224 256C259.3 256 288 227.3 288 192C288 180.5 284.1 169.7 279.6 160.4zM480.6 112.6C527.4 156 558.7 207.1 573.5 243.7C576.8 251.6 576.8 260.4 573.5 268.3C558.7 304 527.4 355.1 480.6 399.4C433.5 443.2 368.8 480 288 480C207.2 480 142.5 443.2 95.42 399.4C48.62 355.1 17.34 304 2.461 268.3C-.8205 260.4-.8205 251.6 2.461 243.7C17.34 207.1 48.62 156 95.42 112.6C142.5 68.84 207.2 32 288 32C368.8 32 433.5 68.84 480.6 112.6V112.6zM288 112C208.5 112 144 176.5 144 256C144 335.5 208.5 400 288 400C367.5 400 432 335.5 432 256C432 176.5 367.5 112 288 112z"></path>
                                                </svg>
                                            </a>
                                            <form id="delete-form-{{ $complaint->id }}" action="{{ route('complaint.destroy', $complaint->id) }}" method="post" style="display: none;">
                                                @csrf
                                            </form>
                                            <a class="btn btn-danger" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $complaint->id }}').submit();" data-bs-toggle="tooltip" data-bss-tooltip="" data-bs-placement="bottom" type="button" title="DELETE">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="-32 0 512 512" width="1em" height="1em" fill="currentColor" data-bs-toggle="tooltip" data-bss-tooltip="" data-bs-placement="bottom" title="DELETE">
                                                    <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                                    <path d="M160 400C160 408.8 152.8 416 144 416C135.2 416 128 408.8 128 400V192C128 183.2 135.2 176 144 176C152.8 176 160 183.2 160 192V400zM240 400C240 408.8 232.8 416 224 416C215.2 416 208 408.8 208 400V192C208 183.2 215.2 176 224 176C232.8 176 240 183.2 240 192V400zM320 400C320 408.8 312.8 416 304 416C295.2 416 288 408.8 288 400V192C288 183.2 295.2 176 304 176C312.8 176 320 183.2 320 192V400zM317.5 24.94L354.2 80H424C437.3 80 448 90.75 448 104C448 117.3 437.3 128 424 128H416V432C416 476.2 380.2 512 336 512H112C67.82 512 32 476.2 32 432V128H24C10.75 128 0 117.3 0 104C0 90.75 10.75 80 24 80H93.82L130.5 24.94C140.9 9.357 158.4 0 177.1 0H270.9C289.6 0 307.1 9.358 317.5 24.94H317.5zM151.5 80H296.5L277.5 51.56C276 49.34 273.5 48 270.9 48H177.1C174.5 48 171.1 49.34 170.5 51.56L151.5 80zM80 432C80 449.7 94.33 464 112 464H336C353.7 464 368 449.7 368 432V128H80V432z"></path>
                                                </svg>
                                            </a>
                                        </div>
                                    </td>
                                </tr>                               
                            @endforeach
                        @endif
					</tbody>
				</table>
			</div>
			<div class="row">
				<div class="col-md-6">
					{{ $complaints->links() }}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection