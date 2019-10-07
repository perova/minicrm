@extends('layouts.app')

@section('content')

<div class="jumbotron text-center">
	<div align="right">
		<a href="{{ route('companies.index') }}" class="btn btn-primary">Back</a>
	</div>
	<br />
	<h3>Logo</h3>
	<img src="{{ URL::to('/') }}/images/{{ $data->image }}" class="img-thumbnail" />
	<h3> Company Name - {{ $data->name }} </h3>
	<h3> Company Email - {{ $data->email }}</h3>
	<h3>Comapny Website - {{ $data->website }}</h3>
</div>
@endsection
