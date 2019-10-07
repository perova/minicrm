@extends('layouts.app')

@section('content')

<div align="right">
	<a href="{{ route('companies.create') }}" class="btn btn-success btn-sm">Add</a>
</div>
<br />
@if ($message = Session::get('success'))
<div class="alert alert-success">
	<p>{{ $message }}</p>
</div>
@endif


<table class="table table-bordered table-striped">
	<tr>
		<th width="10%">Image</th>
		<th width="35%">Name</th>
		<th width="35%">Email</th>
		<th width="30%">Website</th>
	</tr>
	@foreach($data as $row)
		<tr>
			<td><img src="{{ URL::to('/') }}/images/{{ $row->image }}" class="img-thumbnail" width="75" /></td>
			<td>{{ $row->name }}</td>
			<td>{{ $row->email }}</td>
			<td>{{ $row->website }}</td>
			<td>
				
				<form action="{{ route('companies.destroy', $row->id) }}" method="post">
					<a href="{{ route('companies.show', $row->id) }}" class="btn btn-primary">Show</a>
					<a href="{{ route('companies.edit', $row->id) }}" class="btn btn-warning">Edit</a>
					@csrf
					@method('DELETE')
					<button type="submit" class="btn btn-danger">Delete</button>
				</form>
			</td>
		</tr>
	@endforeach
</table>
{!! $data->links() !!}
@endsection