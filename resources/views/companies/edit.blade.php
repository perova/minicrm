@extends('layouts.app')

@section('content')
<div class="col-md-4 text-center">
<h2>Edit Company</h2>
</div>
<div align="right">
	<a href="{{ route('companies.index') }}" class="btn btn-primary">Back</a>
</div>
<br />

<form method="post" action="{{ route('companies.update', $data->id) }}" enctype="multipart/form-data">

	@csrf
	@method('PATCH')
	<div class="form-group row">
		<label class="col-md-4 text-center">Edit Company Name</label>
		<div class="col-md-4">
			<input type="text" name="name" value="{{ $data->name }}" class="form-control input-lg" />
		</div>
	</div>
	<br />
	<div class="form-group row">
		<label class="col-md-4 text-center">Edit Company Email</label>
		<div class="col-md-4">
			<input type="text" name="email" value="{{ $data->email}}" class="form-control input-lg" />
		</div>
	</div>
	<br />
	<div class="form-group row">
		<label class="col-md-4 text-center">Edit Comapany Website</label>
		<div class="col-md-4">
			<input type="text" name="website" value="{{ $data->website}}" class="form-control input-lg" />
		</div>
	</div>
	<br />
	<div class="form-group row">
		<label class="col-md-4 text-center">Edit Company Logo</label>
		<div class="col-md-4">
			<input type="file" name="image" />
			<img src="{{ URL::to('/') }}/images/{{ $data->image }}" class="img-thumbnail" width="100" />
			<input type="hidden" name="hidden_image" value="{{ $data->image }}" />
		</div>
	</div>
	<br />
	<div class="form-group text-center">
		<input type="submit" name="edit" class="btn btn-primary input-lg" value="Edit" />
	</div>
</form>
@endsection



