var count = 1;
var topic_lecture_count = 1;
var lecture_count = 1;
var topic_lecture_saved_count;


function addNewTopicRow(course_id) {
	
	event.preventDefault();
	topic_lecture_count = 1;

	var form = $('#courseDetails');


	form.append(`
		<div id="topic_row_${count}" class="col-12 mb-4">
			<div type="button" class="card shadow" >
				<div class="card-header clearfix">
			        <h3 class="float-left card-title font-weight-bold" data-toggle="collapse" data-target="#demo${count}" >Topic #</h3>
				<div class="float-right mb-2"> 
		            	<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#topicDocumentModal${count}">+ Document</button>
		            	<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#topicQuizModal${count}">Quiz</button>
		            	<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#topicAssignmentModal${count}">Assignment</button>
		            	<button type="button" class="btn btn-outline-primary btn-sm" onclick="addNewLectureRow(${count})">Add Lecture</button>
		            	<button type="button" class="btn btn-danger btn-sm" onclick="deleteTopicRow(${count})">Remove</button>
		        </div>
				</div>
				<div class="card-body collapse" id="demo${count}">
		        <div class="form-group">
		        	<label for="topic_name">Topic Name</label>
		        	<input name="topic_name" id="topic_name_${count}" type="text" class="form-control" placeholder="Enter Topic Name">
		        	<label for="summernote" >Topic Description</label>
		        	<textarea id="topic_description_${count}" name="topic_description" class="form-control"></textarea>
				</div>
				
	        	<div id="append_topic_lecture_${count}" class="mb-3"></div>
					<div id="topicDocumentModal${count}" class="modal fade" role="dialog">
						<div class="modal-dialog">
							<div class="modal-content">
						    	<div class="modal-header">
						    		<h4 class="modal-title">Upload Document for topic</h4>
						    	</div>
						    	<div class="modal-body">
						        	<input type="file" class="custom-file-input form-control" id="customFile${count}" name="lecture_Document">
					   				<label class="custom-file-label" for="customFile">Choose file</label>	
						      	</div>
						      	<div class="modal-footer">
								<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
								</div>
						    </div>
						</div>
					</div>
					<div id="topicQuizModal${count}" class="modal fade" role="dialog">
						<div class="modal-dialog">
							<div class="modal-content">
						    	<div class="modal-header">
						    		<h4 class="modal-title">Upload Quiz for topic</h4>
						    	</div>
						    	<div class="modal-body">	
						    	</div>
						    	<div class="modal-footer">
						        	<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
						    	</div>
						    </div>
						</div>
					</div>	
					<div id="topicAssignmentModal${count}" class="modal fade" role="dialog">
						<div class="modal-dialog">
							<div class="modal-content">
						    	<div class="modal-header">
						    		<h4 class="modal-title">Upload Assignment for topic</h4>
						    	</div>
						    	<div class="modal-body">
						        	<input type="file" class="custom-file-input" id="customFile${count}" name="lecture_Document">
									<label class="custom-file-label" for="customFile">Choose file</label>	
						    	</div>
						    	<div class="modal-footer">
						        	<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
						    	</div>
						    </div>
						</div>
					</div>
					<div class="form-group">
        				<button class="btn btn-outline-success m-2" onclick=saveCourseDetailsForm(${count},${course_id})>Save form</button>
					</div>	
				</div>			
	        </div>
        </div>

	`);

	count++;
	

}




function deleteTopicRow(count) {
	event.preventDefault();
	$('#topic_row_'+count).remove();
}



function addNewLectureRow(count) {
	event.preventDefault();
	// topic_lecture_count = topic_lecture_saved_count[count];
	//topic_1_lecture_1
	$('#append_topic_lecture_'+count).append(`
		<div type="button" class="card shadow mb-2" id="topic_${count}_lecture_${topic_lecture_count}">
			<div class="card-header clearfix">
				<h4 class="card-title float-left" data-toggle="collapse" data-target="#lecture${lecture_count}">Lecture</h4>
				<div class="float-right mb-2"> 
		            	<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#lectireDocumentModal${lecture_count}">+ Document</button>
		            	<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#lectireQuizModal${lecture_count}">Quiz</button>
		            	<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#lectireAssignmentModal${lecture_count}">Assignment</button>
		            	<button type="button" class="btn btn-danger btn-sm" onclick="deleteLectureRow(${count},${topic_lecture_count})">Remove</button>
		          	</div>
				</div>
			<div class="card-body collapse" id="lecture${lecture_count}">
				<label for="lecture_name">Lecture Name</label>
			    	<input name="lecture_name" id="topic_${count}_lecture_name_${topic_lecture_count}" type="text" class="form-control" placeholder="Enter Lecture Name">
				<label for="summernote" >Lecture Description</label>
		        	<textarea id="topic_${count}_lecture_description_${topic_lecture_count}" name="summernote" class="form-control"></textarea>
				<div class="custom-file mt-4">
				   <input type="file" class="custom-file-input" id="customFile" name="lecture_video">
				   <label class="custom-file-label" for="customFile">Choose file</label>	
				</div> 
				<div id="lectireDocumentModal${lecture_count}" class="modal fade" role="dialog">
					<div class="modal-dialog">
						<div class="modal-content">
					    	<div class="modal-header">
					    		<h4 class="modal-title">Upload Document</h4>
					    	</div>
					    	<div class="modal-body">
					        	<input type="file" class="custom-file-input" id="customFile${lecture_count}" name="lecture_Document">
				   				<label class="custom-file-label" for="customFile">Choose file</label>	
					      	</div>
					      	<div class="modal-footer">
					        	<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
					      	</div>
					    </div>
					</div>
				</div>	
				<div id="lectireQuizModal${lecture_count}" class="modal fade" role="dialog">
					<div class="modal-dialog">
						<div class="modal-content">
					    	<div class="modal-header">
					    		<h4 class="modal-title">Upload Document</h4>
					    	</div>
					    	<div class="modal-body">
					        	QuizModal	
					      	</div>
					      	<div class="modal-footer">
					        	<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
					      	</div>
					    </div>
					</div>
				</div>
				<div id="lectireAssignmentModal${lecture_count}" class="modal fade" role="dialog">
					<div class="modal-dialog">
						<div class="modal-content">
					    	<div class="modal-header">
					    		<h4 class="modal-title">Upload Document</h4>
					    	</div>
					    	<div class="modal-body">
								AssignmentModal	
					      	</div>
					      	<div class="modal-footer">
					        	<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
					      	</div>
					    </div>
					</div>
				</div>
			</div>
		</div>	

		`);
	lecture_count++;
	++topic_lecture_count;
	// topic_lecture_saved_count[count] = ++topic_lecture_count;
	
}

function deleteLectureRow(count,topic_lecture_count) {
	event.preventDefault();
	$('#topic_'+count+'_lecture_'+topic_lecture_count).prop('hidden',true);

}



function saveCourseDetailsForm(topic_id,course_id) {
	event.preventDefault();
	// const data = Object.fromEntries(new FormData(form).entries());
	// console.log(data);
	alert(course_id);
	var i;
	var lecture_name=[];
	var lecture_description=[];
	var topic_name = document.getElementById('topic_name_'+topic_id).value;
	var topic_description = document.getElementById('topic_description_'+topic_id).value;
	for(i=1;i<topic_lecture_count;i++){
		lecture_name[i]=document.getElementById('topic_'+topic_id+'_lecture_name_'+i).value;
		lecture_description[i]=document.getElementById('topic_'+topic_id+'_lecture_description_'+i).value;
	}

    $.ajax({
    	url: '/mySections/store',
    	type: 'POST',
    	data: {
	    	"topic_name":topic_name,
	    	"topic_description":topic_description,
	    	"lecture_name":lecture_name,
	    	"lecture_description":lecture_description,
	    	"course_id":course_id,
		},
    	success: function(response) {
    		alert();
    	}
    })
}