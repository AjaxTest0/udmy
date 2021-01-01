{{-- Video upload index --}}



@extends('layouts.app')
@section('content')

<div class="container">
	<H1 class="container-fluid">
	Section : {{ $CourseSection->name }}
</H1><br>

<div class="container-fluid">
	<div class="card m-2">
		<div class="card-header">
			<h4 class="card-title font-weight-bold">Upload Leacture</h4>
		</div>
		<div class="card-body">
			<form method="post" action="{{ route('myVideos.store') }}" enctype="multipart/form-data">
				@csrf
				<div class="form-group">
					<label>Lecture Title:<span class="text-danger">*</span></label>
					<input type="text" class="form-control" placeholder="Enter Lecture Title" name="lecture_name">
				</div>

				<div class="form-group">
					<label>Lecture Description:</label>
					<textarea class="form-control" placeholder="Enter Lecture Description" name="lecture_description" rows="4"></textarea>
				</div>

				<div class="form-group">
					<label>Lecture Video:<span class="text-danger">*</span></label>
					<div class="custom-file">
					   <input type="file" class="custom-file-input @error('lecture_video') is-invalid @enderror" id="customFile" name="lecture_video">
					   <label class="custom-file-label" for="customFile">Choose file</label>
						@error('lecture_video') <div class="invalid-feedback">{{ $message }}</div> @enderror
					</div>						
					
				</div>

				<div class="form-group">
					<div class="form-group custom-control custom-switch">
					   <input type="checkbox" class="custom-control-input" id="switch1" name="lecture_free">
					   <label class="custom-control-label" for="switch1">Free Lecture</label>
					</div>
				</div>
				<div>
					<button type="submit" class="btn btn-primary">Save & Upload Lecture</button>
				</div>
			</form>
		</div>
	</div>
</div>
</div>


@endsection
@include('layouts.footer')
@include('layouts.footer_inc')