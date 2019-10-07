@extends('layouts.app')

@section('content')

<div align="right">
	<a href="{{ route('employees.create') }}" class="btn btn-success btn-sm">Add</a>
</div>
<br />
@if ($message = Session::get('success'))
<div class="alert alert-success">
	<p>{{ $message }}</p>
</div>
@endif


<table class="table table-bordered table-striped">
	<tr>
		
		<th width="20%">First Name</th>
		<th width="20%">Last Name</th>
		<th width="20%">Email</th>
		<th width="20%">Phone</th>
		<th width="20%">Company</th>
		<th width="20%">Action</th>
	</tr>
	@foreach($data as $row)
		<tr>
			
			<td>{{ $row->first_name }}</td>
			<td>{{ $row->last_name }}</td>
			<td>{{ $row->email }}</td>
			<td>{{ $row->phone }}</td>
			<td>{{ $row->company->name }}</td>
			<td>
				
				<form action="{{ route('employees.destroy', $row->id) }}" method="post">
					<a href="{{ route('employees.show', $row->id) }}" class="btn btn-primary">Show</a>
					<a href="{{ route('employees.edit', $row->id) }}" class="btn btn-warning">Edit</a>
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