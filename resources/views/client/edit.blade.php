@extends('layout.main')
@section('container')
<div class="row">
	<div class="col-lg-6 mx-2">
		<form action="/client/{{ $clients->id }}" method="post">
			@method('PUT')
			@csrf
			<div class="mb-3">
				<label class="form-label">Client Name</label>
				<input type="text" class="form-control @error('client_name') is-invalid @enderror" name ="client_name" id="client_name" value="{{ old('client_name',$clients->client_name) }}">
				@error('client_name')
				<div class="invalid-feedback">
					Please select a valid state.
					{{ $message }}
				</div>
				@enderror
			<div class="mb-3">
	  <label class="form-label">Client Address</label>
	  <textarea class="form-control" rows="3" name="client_address">{{ old('client_address',$clients->client_address) }}</textarea>
	</div>
	<div class="mb-3">
		<button type="submit" name="submit" class="btn btn-primary">Update</button>
	</div>
		</form>
	</div>
</div>

@endsection