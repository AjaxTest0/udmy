@extends('layouts.app')

@section('content')


<div class="m-1 p-1">
	<div ><img src="images/cool.jpg" class="mx-auto d-block"></div>
	<div >
		<h1 class="d-flex justify-content-center">The world's largest selection of courses</h1>
		<p class="d-flex justify-content-center">Choose from 130,000 online video courses with new additions published every month</p>
	</div>

	<div>
		<table class="table d-flex justify-content-center ">
			<thead>
				<tr>
					<th>130,000 online courses</th>
					<th>Expert instruction</th>
					<th>Lifetime access</th>
				</tr>
			</thead>
		</table>
	</div>
	<div class="container-fluid">
		<div class="row">
			@foreach($courses as $course)
			{{-- View Course --}}
			@if($course->status == 1)
			<div class="col-sm-4">
				<div class="card bg-dark text-light mb-1" >
					<div class="card-body">
						<h4 class="card-title "><b>{{ $course->name }}</b></h4>
						<p class="card-text">{{ $course->description }}</p>
						<p class="card-text">{{ $course->price }} $</p>
						<a href="{{ route('myStudents.show',$course->id) }}" class="btn btn-primary">View Course</a>
					</div>
				</div>
			</div>
			@endif
			@endforeach
		</div>
	</div>
</div>






@endsection