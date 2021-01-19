@include("layouts.header_inc")
@include('layouts.navigation')

  
<div class="container-fluid ">
  <div class="card">
    <div class="card-header clearfix">
      <h4 class="card-title font-weight-bold text-muted float-left">Add Course Detils for {{ $course->name }}</h4>
      <span hidden id="{{ $course->id }}" name='course_name' class="course_name"></span>      
      <a href="{{ route('myCourses.index') }}" class="btn btn-primary btn-sm float-right">Go Back</a>
    </div>
  </div>   
  <div class="card-body">
    <form action="" method="POST" onsubmit="saveCourseDetailsForm(this)">
      <div class="form-row">
        <div class="col-12 form-group text-right">
          <button class="btn btn-primary btn-sm" onclick="addNewTopicRow({{$course->id}})">Add Topic</button>
        </div>
      </div>
      {{-- dynamic data here --}}
      <div class="col-12 form-row" id="courseDetails">       
      </div>
    </form> 
</div>





@push('script')
  <script type="text/javascript" src="{{ asset('pages/courses/add_course_details.js') }}"></script>
@endpush

@include("layouts.footer_inc")

