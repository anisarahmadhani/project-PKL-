@extends('layout.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Project</h1>
      </div>

@if (session()->has('pesan'))
	<div class="alert alert-success" role="alert">
		{{ session('pesan') }}
	</div>
@endif

	<a href="/project/create" class="btn btn-dark mb-3 mx-2"><i class="fa fa-plus-circle align-text-bottom mx"></i> New Data</a>

	<table class="table table-boredered mx-2">	
		<tr>
			<th>No</th>
			<th>Name</th>
			<th>Client</th>
			<th>Project Start</th>
			<th>Project End</th>
			<th>Project Status</th>
			<th>Aksi</th>
		</tr>
		@foreach ($projects as $project)

		<tr>
			<td>{{ $loop->iteration }} </td>
			<td>{{ $project->name }} </td>
			<td>{{ $project->client->client_name ?? 'data not found'}} </td>
			<td>{{ $project->project_start }} </td>
			<td>{{ $project->project_end }} </td>
			<td>{{ $project->project_status }} </td>


			<td>
				<a href="/project/{{ $project->id }}/edit" class="btn btn-warning btn-sm"><i
                                    class="fa fa-pencil-square-o align-text-bottom"></i>Edit</a>
				<form action="/project/{{ $project->id }}" method="post" class="d-inline">
					@method('DELETE')
					@csrf
					<button class="btn btn-danger btn-sm" type="submit" onclick="return confirm('Yakin akan menghapus data ?')"><i
                                    class="fa fa-trash-o align-text-bottom"></i>Delete</button>
				</form>

			</td>
		</tr>
		@endforeach
	</table>

{{ $projects->links('pagination::bootstrap-5') }}

@endsection