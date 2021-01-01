{{-- Course upload index --}}
@extends('layouts.app')

@section('content')


<div class="container-fluid">
	<div class="card">
		<div class="card-header clearfix">
			<h4 class="card-title font-weight-bold text-muted float-left">My Courses</h4>
			<a href="{{ route('myCourses.create') }}" class="btn btn-primary btn-sm float-right">Create a new Course</a>
		</div>
		<div class="card-body">
			<table class="table">
				<thead class="thead-dark">
					<tr>
						<th>Name</th>
						<th>description</th>
						<th>Price</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
					@foreach($courses as $course)
					<tr>
						<td>{{ $course->name }}</td>
						<td>{{ $course->description }}</td>
						<td>{{ $course->price }}$</td>
						<td>
							<div class="btn-group btn-group-sm">
								<a class="btn btn-primary btn-sm fas fa-edit">Edit</a>
								<a href="{{ route('myCourses.destroy') }}" class="btn btn-primary btn-sm fas fa-trash p-1">Delete</a>
								<a href="{{ route('myCourses.show',$course->id) }}" class="btn btn-primary btn-sm fas fa-eye ">View</a>
							</div>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>



@endsection