@include('layouts.app')
{{-- 
<img width="100%" src={{ asset('images/banner.jpg') }} class="mx-auto d-block">


	<div class="col-lg-8 border p-3 section bg-white container-fluid mt-2"> 
		<div class="row m-0">
			<div class="col-lg-12 pb-3">
			</div>
			<div class="col-lg-12">
				<div class="right-side-pro-detail">
					<div class="row">
						<div class="col-lg-12">
							<span></span>
							<h1 class="m-0 p-0">{{ $course->name }}</h1>
						</div>
						<div class="col-lg-12 ">
							<p class="m-0 p-0 price-pro float-right">$ {{ $course->price }}</p>	
						</div>
						<div class="col-lg-12 pt-2">
							<h4>Description</h4>
							<span>{{ $course->description }}</span><hr class="m-0 pt-2 mt-2">
						</div>
						
						<div class="col-lg-12 mt-3 mb-1">
							<div class="row">
								<div class="col-lg-6">
									<a href="{{ route('checkout') }}" class="btn btn-primary w-50">Buy This Course</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>




			<div class="col-lg-12 mt-3 mb-1">
				<h5 class="font-weight-bold">Course Content:</h5>
				<div class="d-inline-block">
					<div class="d-inline-block font-weight-bold">
						Total Sections: {{ count($course->sections) }}
					</div>
					<div class="d-inline-block ml-3 font-weight-bold">
						Total Lectures: {{ isset($course->sections()->with('videos')->get()->pluck('videos')[0]) ? $course->sections()->with('videos')->get()->pluck('videos')[0]->count() : '(No Lecture Uploaded)' }}	
					</div>
				</div>
				{{-- show sections --}}
				{{-- <div id="accordion" class="mt-3 mb-1">
					@foreach($course->sections as $key => $section)
					<div class="card">
						<div class="card-header bg-dark mb-1">
							@if($section->videos != null )
							<a class="card-link text-white" data-toggle="collapse" href="#collapse_{{ $key }}">
								{{ $section->name }}
							</a>
							@endif
						</div>
						<div id="collapse_{{ $key }}" class="collapse show mb-1" data-parent="#accordion">
							<div class="card-body mb-1">
								@foreach($section->videos as $key => $video)
									<button data-toggle="modal" data-target="#modal_simple{{ $key }}" class="btn" type="button">  {{ $video->name }}  </button><br>
									<div id="modal_simple{{ $key }}" class="modal fade" tabindex="-1" role="dialog">
									  <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
									    <div class="modal-content">
									      <div class="modal-header">
									        <h5 class="modal-title">{{ $video->name }}</h5>
									        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
									          <span aria-hidden="true">&times;</span>
									        </button>
									      </div>
									      <div class="modal-body">
									        <p>
									        <video width="100%" controls>
													<source src="{{ asset($video->video_path.$video->lecture_name) }}">
											</video >
											</p>
									      </div>
									      <div class="modal-footer">                                      
									      </div>
									    </div>
									  </div> <!-- modal-bialog .// -->        
									</div>
									@endforeach
							</div>
						</div>
						@endforeach
					</div> 
				</div>
			</div>
		</div>
	</div> --}} --}}