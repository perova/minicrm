@extends('layouts.app')

@section('content')
@if($errors->any())
<div class="alert alert-danger">
	<ul>
		@foreach($errors->all() as $error)
		<li>{{ $error }}</li>
		@endforeach
	</ul>
</div>
@endif
<div class="col-md-4 text-center">
<h2>New Company</h2>
</div>
<div align="right">
	<a href="{{ route('companies.index') }}" class="btn btn-primary">Back</a>
</div>

<form method="post" action="{{ route('companies.store') }}" enctype="multipart/form-data">

	@csrf
	<div class="form-group row">
		<label class="col-md-4 text-center">Enter Name</label>
		<div class="col-md-4">
			<input type="text" name="name" class="form-control input-lg" />
		</div>
	</div>
	<br />
	
	<div class="form-group row">
		<label class="col-md-4 text-center">Enter  Company Email</label>
		<div class="col-md-4">
			<input type="text-center" name="email" class="form-control" />
		</div>
	</div>
	<br />


	<div class="form-group row">
		<label class="col-md-4 text-center">Enter Company Website</label>
		<div class="col-md-4">
			<input type="text" name="website" class="form-control input-lg" />
		</div>
	</div>
	<div class="form-group row">
		<label class="col-md-4 text-center">Select Company Logo</label>
		<div class="col-md-4">
			<input type="file" name="image" />
		</div>
	</div>
	<br />
	<div class="form-group text-center">
		<input type="submit" name="add" class="btn btn-primary input-lg" value="Add" />
	</div>

</form>

@endsection



