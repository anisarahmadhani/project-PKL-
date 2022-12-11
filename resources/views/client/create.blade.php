@extends('layout.main')

@section('container')
<h1 class="h2">Create Project</h1>

<div class="row mx-2">
	<div class="col-lg-6">
		<form action="/client" method="post">
			@csrf
			<div class="mb-3">
				<label class="form-label">Client Name</label>
				<input type="text" class="form-control" name="client_name" id="client_name" value="{{ old('name') }}" >
				
				@error('client_adress')
				<div class="invalid-feedback">
					{{ $message }}
				</div>
				@enderror
			</div>
			<div class="mb-3">
	  <label class="form-label">Client Address</label>
	  <textarea class="form-control" rows="3" name="client_address">{{ old('client_address') }}</textarea>
	</div>

		<div class="mb-3">
			<button type="submit" name="submit" class="btn btn-primary">Create</button>
		</div>

	</form>
</div>
</div>


@endsection



