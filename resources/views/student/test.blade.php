<button class="btn" data_toggle="modal" data-target="#myModal1">
</button>
<div class="modal" id="myModal1">
	<div class="modal-dialog">
		<div class="modal-header"></div>
		<div class="modal-body"></div>
		<div class="modal-footer"></div>
	</div>
</div>
<video width="320" height="240" controls>
	<source src="{{ asset($video->video_path.$video->lecture_name) }}">
</video >
<h4 class="modal-title">{{ $video->name }}</h4>
#myModal{{ $key }}