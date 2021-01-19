@include("layouts.header_inc")
@include('layouts.navigation')


<div class="container-fluid">
  <div class="card">
    <div class="card-header clearfix">
      <h4 class="card-title font-weight-bold text-muted float-left">Create a new Course</h4>      
      <a href="{{ route('myCourses.index') }}" class="btn btn-primary btn-sm float-right">Go Back</a>
    </div>
  </div>    
  <div class="card-body">
    <div class="row m-1">
      <div class="col bg-dark m-1 text-white">    
        <form action={{  route('mySections.store')}} method="get" class="p-2 m-1">
          <h1 class="bg-dark test-white">Add Section</h1>
          <label for="section">Section<span class="text-danger">*</span></label>
          <input type="section" name="section" id="section" class="form-control" required>
          <label for="course">Course<span class="text-danger">*</span></label>
          <select name="course" class="form-control"  required>
            @foreach($courses as $course)
              <option value="{{ $course->id }}">{{ $course->name }}</option>
            @endforeach
          </select>	
          <button class="btn border p-2 m-1 text-white bg-primary">+ Add Section</button>
         @csrf
       </form> 
     </div>
   </div> 
 </div>

