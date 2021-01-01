{{-- section upload index --}}

@extends('layouts.app')

@section('content')

<div class="container-fluid">
	<div class="card">
		<div class="card-header clearfix">
			<h4 class="card-title font-weight-bold text-muted float-left">My Sections</h4>
			<a href="{{ route('mySections.create') }}" class="btn btn-primary btn-sm float-right">Create a new Section</a>
		</div>
		<div class="card-body">
			@foreach($sections as $key => $section)	
				<div id="accordion">
					<div class="card">
						<div class="card-header clearfix">
							<a class="card-link float-left m-1" data-toggle="collapse" href="#collapse{{ $key }}">{{ $section->name }}</a>
							<div class="float-right">
								<div class="btn-group btn-group-sm">
									<a href="{{ route('mySections.show',$section->id) }}" class="btn btn-primary btn-sm"><i class="fas fa-plus fa-fw"></i> Add Lecture</a>
									<a href="{{ route('mySections.destroy') }}" class="btn btn-primary btn-sm"><i class="fas fa-edit fa-fw"></i> Edit</a>
									<a href="{{ route('mySections.destroy') }}" class="btn btn-primary btn-sm"><i class="fas fa-trash-alt fa-fw"></i> Delete</a>	
								</div>
							</div>
						</div>
						<div id="collapse{{ $key }}" class="collapse" data-parent="#accordion">
							<div class="card-body">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
							</div>
						</div>
					</div>
				</div>
			@endforeach
		</div>
	</div>
</div>


@endsection
