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
<h2>New Employee</h2>
</div>
<div align="right">
	<a href="{{ route('employees.index') }}" class="btn btn-primary">Back</a>
</div>

<form method="post" action="{{ route('employees.store') }}" enctype="multipart/form-data">

	@csrf
	<div class="form-group row">
		<label class="col-md-4 text-center">Enter First Name</label>
		<div class="col-md-4">
			<input type="text" name="first_name" class="form-control input-lg" />
		</div>
	</div>
	<br />
	<div class="form-group row">
		<label class="col-md-4 text-center">Enter Last Name</label>
		<div class="col-md-4">
			<input type="text" name="last_name" class="form-control input-lg" />
		</div>
	</div>
	<br />
	<div class="form-group row">
		<label class="col-md-4 text-center">Enter Email</label>
		<div class="col-md-4">
			<input type="text" name="email" />
		</div>
	</div>
	<br />
	<div class="form-group row">
		<label class="col-md-4 text-center">Enter Phone</label>
		<div class="col-md-4">
			<input type="text" name="phone" />
		</div>
	</div>
	<br />
	<div class="form-group row">
		<label class="col-md-4 text-center">Select Company </label>
		<select name="company_id">
			@foreach($companies as $idCompany => $company)
			<option value="{{$idCompany}}">{{$company}}</option>
			@endforeach
		</select>
	</div>
	<br />
	<div class="form-group text-center">
		<input type="submit" name="add" class="btn btn-primary input-lg" value="Add" />
	</div>

</form>

@endsection



