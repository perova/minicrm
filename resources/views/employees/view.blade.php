@extends('layouts.app')

@section('content')

<div class="jumbotron text-center">
	<div align="right">
		<a href="{{ route('employees.index') }}" class="btn btn-primary">Back</a>
	</div>
	<br />
	
	<h3>First Name - {{ $data->first_name }} </h3>
	<h3>Last Name - {{ $data->last_name }}</h3>
	<h3>Email - {{ $data->email }}</h3>
	<h3>Phone- {{ $data->phone }}</h3>
	<h3>Company - {{ $data->company->name }}</h3>
</div>
@endsection
