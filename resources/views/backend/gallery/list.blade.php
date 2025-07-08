@extends('layouts.app')
<style>
	.btn-edit {
		background: #1761fd;
		color: white;
		padding: 5px 7px;
		border-radius: 5px;
		font-size: 14px;
	}

	.btn-edit:hover,
	.btn-delete:hover {
		color: white
	}

	.btn-delete {
		background: red;
		color: white;
		padding: 5px 7px;
		border-radius: 5px;
		font-size: 14px;
	}

	.code.buttons {
		display: flex;
		align-items: center;
		padding: 20px;
		justify-content: space-around;
		text-transform: capitalize;
	}
</style>
@section('content')

<div class="row">
	<div class="col-lg-12">
		<div class="card no-export">
			<div class="card-header d-flex align-items-center">
				<span class="panel-title">{{ _lang('Gallery List') }}</span>
				<a class="btn btn-primary btn-xs ml-auto" href="{{ route('gallery.create') }}">{{ _lang('Add New') }}</a>
			</div>
			<div class="card-body">
				<table id="coupons_table" class="table table-bordered data-table">
					<thead>
						<tr>
							<th class="text-center">{{ _lang('#') }}</th>
							<th>{{ _lang('Image') }}</th>
							<th>{{ _lang('Date') }}</th>
							<th class="text-center">{{ _lang('Delete') }}</th>
						</tr>
					</thead>
					<tbody>
						@foreach($Gallery as $data)
						<tr data-id="{{ $data->id }}">
							<td class="text-center">{{$loop->index +1}}</td>
							<td>
								@if(is_array(json_decode($data->image)))
								<img src="{{ asset('public/' . json_decode($data->image)[0]) }}" alt="Gallery Image" width="70px" height="70px">
								@else 
								<img src="{{ asset('public/' . $data->image) }}" alt="Gallery Image" width="70px" height="70px">
								@endif
							</td>
							<td class='code'>{{ $data->date }}</td>
							<td class="text-center">
								<div class="dropdown">
									<button class="btn btn-light dropdown-toggle btn-xs" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										{{ _lang('Action') }}
										<i class="fas fa-angle-down"></i>
									</button>
									<form action="{{ route('gallery.delete', $data->id) }}" method="post">
										@csrf
										@method('DELETE')

										<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
											<a href="{{ route('gallery.edit', $data->id) }}" class="dropdown-item"><i class="mdi mdi-pencil"></i> {{ _lang('Edit') }}</a>
											<button class="btn-remove dropdown-item" type="submit"><i class="mdi mdi-delete"></i> {{ _lang('Delete') }}</button>
										</div>
									</form>
								</div>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
@endsection