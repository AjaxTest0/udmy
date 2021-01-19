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
			<div class="table-responsive">
				<table class="table table-striped table-hover">
					<thead class="thead-dark">
						<th>Name</th>
						<th>Description</th>
						<th>Status</th>
						<th>Price</th>
						<th style="width: 20%">Actions</th>
					</thead>
					<tbody>
						@foreach($courses as $course)
						<tr>
							<td>{{ $course->name }}</td>
							<td>{{ $course->description }}</td>
							<td><span class="btn btn-{{ $course->status ? 'success' : 'danger' }} btn-sm">{{ $course->status ? 'Active' : 'In Active' }}</span></td>
							<td>{{ $course->price }}$</td>
							<td>
								<div class="btn-group btn-group-sm">
									<a href="{{ route('myCourses.updateStatus',[$course->id, !$course->status ? '1' : '0']) }}" class="btn btn-primary"><i class="fas fa-eye fa-fw"></i> {{ !$course->status ? 'Enable' : 'Disable' }}</a>
									<a href="{{ route('myCourses.show',$course->id) }}" class="btn btn-primary"><i class="fas fa-eye fa-fw"></i> View</a>
									<a href="{{ route('myCourses.edit', $course->id) }}" class="btn btn-primary"><i class="fas fa-edit fa-fw"></i> Edit</a>
									<a href="{{ route('myCourses.destroy',$course->id) }}" class="btn btn-primary btn-sm"><i class="fas fa-trash fa-fw"></i> Delete</a>
								</div>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>



@endsection