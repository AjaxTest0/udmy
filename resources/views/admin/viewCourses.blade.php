@include("layouts.app")

{{-- not working in link files  --}}
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>

<script type="text/javascript">

$(document).ready(function() {
$('.js-example-basic-multiple').select2();
});

 function dublicateForm() {
        var elmnt = document.getElementById("formid");
        var cln = elmnt.cloneNode(true);
        document.body.appendChild(cln);
    }
function show() {
  var x = document.getElementById("myDIV");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
} 
</script>


{{-- add courses --}}
<div class="container">
	<form method="get" action="{{ route('myCourses.store') }}">
		<div class="card">
			<div class="card-header">
				<div class="card-title">Add Course</div>
			</div>
			<div class="card-body form-group">
				<label for="name" class="input-group">Course Name<span class="text-danger">*</span></label>
				<input type="test" name="name" id="name" class="form-control" placeholder="Enter Course name" required>
				<label for="description" class="input-group">Description<span class="text-danger">*</span></label>
				<textarea class="form-control" id="description" name="description" required></textarea>
				<label for="price" class="input-group">Price<span class="text-danger">*</span></label>
				<input type="test" name="price" id="price" class="form-control" placeholder="Enter Price $" required>
				<label for="teacher_name" class="input-group">offered by<span class="text-danger">*</span></label>
				<select class="js-example-basic-multiple form-control" name="teacher_name[]" id="teacher_name"  multiple="multiple" required>
				  @foreach($users as $user)
				  	<option value="{{ $user->id }}">{{ $user->name }}</option>
				  @endforeach
				</select>
				<button type="submit" class="btn btn-primary m-1 ">Add Course</button>
        @if(Auth::user()->Type != 1)
        <a class="btn btn-warning" onclick="show()" >Add Section</a>
        @endif
			</div>
		</div>
	</form>
</div>
 {{-- Hide/Show --}}
<div class="container" id="myDIV">
  <div class="card">
    <div class="card-header">
      <div class="card-title">Add Section</div>
      </div>
      <div class="card-body">
        <div >
          <input type="text" name="formid[]" id="formid" class="form-control">
          <button onclick="dublicateForm()" name="topic[]" class="btn btn-success">Duplicate form</button>
        </div>
      </div>
    
  </div>
   
</div>
{{-- show Courses --}}
<div class="container">
  <h2>Courses</h2>        
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Name</th>
        <th>Offered By</th>
        <th>Description</th>
        <th>Price</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody>
    @foreach($courses as $course)
      <tr>
        <td>{{ $course->name }}</td>
        <td>{{ $course->teacher_id }}</td>
        <td>{{ $course->description }}</td>
        <td>{{ $course->price }} $</td>
        <td>{{ $course->status }}</td>
      </tr>
    @endforeach
    </tbody>
  </table>
</div>
