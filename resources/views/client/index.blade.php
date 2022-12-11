@extends('layout.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Client</h1>
      </div>

@if (session()->has('pesan'))
	<div class="alert alert-success" role="alert">
		{{ session('pesan') }}
	</div>
@endif

	<a href="/client/create" class="btn btn-dark mb-3 mx-2"><i class="fa fa-plus-circle align-text-bottom mx"></i> New Data</a>

	<table class="table table-boredered mx-2">	
		<tr>
			<th>No</th>
			<th>Client Name</th>
			<th>Client Address</th>
			<th>Aksi</th>
		</tr>
		@foreach ($clients as $client)

		<tr>
			<td>{{ $loop->iteration }} </td>
			<td>{{ $client->client_name }} </td>
			<td>{{ $client->client_address }} </td>

			<td>
				<a href="/client/{{ $client->id }}/edit" class="btn btn-warning btn-sm"><i
                                    class="fa fa-pencil-square-o align-text-bottom"></i>Edit</a>
				<form action="/client/{{ $client->id }}" method="post" class="d-inline">
					@method('DELETE')
					@csrf
					<button class="btn btn-danger btn-sm" type="submit" onclick="return confirm('Yakin akan menghapus data ?')"><i
                                    class="fa fa-trash-o align-text-bottom"></i>Delete</button>
				</form>

			</td>
		</tr>
		@endforeach
	</table>

{{ $clients->links('pagination::bootstrap-5') }}

@endsection