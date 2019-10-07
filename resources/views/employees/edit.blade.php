@extends('layouts.app')

@section('content')
<div class="col-md-4 text-center">
<h2>Edit Employee Details</h2>
</div>
<div align="right">
	<a href="{{ route('employees.index') }}" class="btn btn-primary">Back</a>
</div>
<br />

<form method="post" action="{{ route('employees.update', $data->id) }}">

	@csrf
	@method('PATCH')
	<div class="form-group row">
		<label class="col-md-4 text-center">Enter First Name</label>
		<div class="col-md-4">
			<input type="text" name="first_name" value="{{ $data->first_name }}" class="form-control input-lg" />
		</div>
	</div>
	<br />
	<br />
	<br />
	<div class="form-row">
		<label class="col-md-4 text-center">Enter Last Name</label>
		<div class="col-md-4">
			<input type="text" name="last_name" value="{{ $data->last_name }}" class="form-control input-lg" />
		</div>
	</div>
	<br />
	<br />
	<br />
	<div class="form-group row">
		<label class="col-md-4 text-center">Enter Email</label>
		<div class="col-md-4">
			<input type="text" name="email" value="{{ $data->email }}" class="form-control input-lg" />
		</div>
	</div>
	
	<br /><br /><br />
	<div class="form-group row">
		<label class="col-md-4 text-center">Enter Phone</label>
		<div class="col-md-4">
			<input type="text" name="phone" value="{{ $data->phone }}" class="form-control input-lg" />
		</div>
	</div>
	<br /><br /><br />
	<div class="form-group row">
		<label class="col-md-4 text-center">Enter Company</label>
		<div class="col-md-4">
			
			<select name="company_id" class="form-control">
				@foreach($companies as $company)
				<option value="{{$company->id}}">{{$company->name}}</option>
				@endforeach
			</select>
			
		
		</div>
	</div>
	<div class="form-group text-center">
		<input type="submit" name="edit" class="btn btn-primary input-lg" value="Edit" />
	</div>
</form>
@endsection



