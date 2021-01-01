@extends('layouts.app')

@section('content')


<div class="container-fluid">
	<div class="card">
		<div class="card-header clearfix">
			<h4 class="card-title font-weight-bold text-muted float-left">Create a new Course</h4>
			<a href="{{ route('myCourses.index') }}" class="btn btn-primary btn-sm float-right">Go Back</a>
		</div>
		<div class="card-body">
         <div class="row m-1">
            <div class="col bg-dark m-1 text-white">    
                <form action={{  route('myCourses.store')}} method="get" class="p-2 m-1">
                    <h1 class="bg-dark test-white">Add Course</h1>
                    <label for="title">title<span class="text-danger">*</span></label>
                    <input type="text" name="name" id="title" class="form-control" required>
                    <label for="description">description<span class="text-danger">*</span></label>
                    <input type="text" name="description" id="description" class="form-control" required>
                    <label for="price">price $<span class="text-danger">*</span></label>
                    <input type="number" name="price" id="price" class="form-control" required>
                    <button class="btn border p-2 m-1 text-white">+ Add Course</button>
                    @csrf
                </form> 
            </div>
        </div>
    </div>
</div>



@endsection