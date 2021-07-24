@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="card">
	<div class="card-header card-header-primary">
		<h4 class="card-title"></h4>
		<p class="card-category">Student <strong>Marks Entry</strong></p>
	</div>
	<div class="card-body">
		<form method="post" action="{{ route('marks.entry.store') }}">
			@csrf
			<div class="row">
					<div class="col-md-6">
						<div class="form-group bmd-form-group">
							<h5>Year <span class="text-danger"> </span></h5>
							<div class="controls">
								<select name="year_id" id="year_id" required="" class="form-control">
									<option value="" selected="" disabled="">Select Year</option>
									@foreach($years as $year)
									<option value="{{ $year->id }}" >{{ $year->name }}</option>
									@endforeach
								</select>
							</div>
						</div>
					</div>
					
				<div class="col-md-6">
					<div class="form-group">
						<h5>Class <span class="text-danger"> </span></h5>
						<div class="controls">
							<select name="class_id" id="class_id"  required="" class="form-control">
							<option value="" selected="" disabled="">Select Class</option>
							@foreach($classes as $class)
							<option value="{{ $class->id }}">{{ $class->name }}</option>
							@endforeach
							</select>
						</div>		 
					</div>
				</div> <!-- End Col md 3 --> 
			</div>


			<div class="row">
				<div class="col-md-6">
					<div class="form-group bmd-form-group">
						<h5>Subject <span class="text-danger"> </span></h5>
						<div class="controls">
						<select name="assign_subject_id" id="assign_subject_id"  required="" class="form-control">
						 <option  selected="" >Select Subject</option>
						</select>
					</div>
				</div>
			</div> <!-- End Col md 3 --> 
			
			
					<div class="col-md-6">
						<div class="form-group">
							<h5>Exam Type <span class="text-danger"> </span></h5>
							<div class="controls">
								<select name="exam_type_id" id="exam_type_id"  required="" class="form-control">
								<option value="" selected="" disabled="">Select Class</option>
								@foreach($exam_types as $exam)
								<option value="{{ $exam->id }}">{{ $exam->name }}</option>
								@endforeach
							</select>
						</div>
					</div>
				</div> <!-- End Col md 3 -->
			</div>





 			<div class="col-md-3"  >
				 <button id="search" class="btn btn-primary" name="search"> Search</button>
	  
 			</div> <!-- End Col md 3 --> 		
			</div><!--  end row --> 


 <!--  ////////////////// Mark Entry table /////////////  -->


 <div class="row d-none" id="marks-entry">
 	<div class="col-md-12">
 		<table class="table table-bordered table-striped" style="width: 100%">
 			<thead>
 				<tr>
 					<th>ID No</th>
 					<th>Student Name </th>
 					<th>Father Name </th>
 					<th>Gender</th>
 					<th>Marks</th>
 				 </tr> 				
 			</thead>
 			<tbody id="marks-entry-tr">
 				
 			</tbody>
 			
 		</table>
 <input type="submit" class="btn btn-rounded btn-primary" value="Submit">

 	</div>
 	
 </div>
 

		</form> 

			       
	</div>

</div><!-- End Col Md-6 -->
</div>
</div>


</div>
</div>


</div>
</div>




<script type="text/javascript">
  $(document).on('click','#search',function(){
    var year_id = $('#year_id').val();
    var class_id = $('#class_id').val();
    var assign_subject_id = $('#assign_subject_id').val();
    var exam_type_id = $('#exam_type_id').val();
     $.ajax({
      url: "{{ route('student.marks.getstudents')}}",
      type: "GET",
      data: {'year_id':year_id,'class_id':class_id},
      success: function (data) {
        $('#marks-entry').removeClass('d-none');
        var html = '';
        $.each( data, function(key, v){
          html +=
          '<tr>'+
          '<td>'+v.student.id_no+'<input type="hidden" name="student_id[]" value="'+v.student_id+'"> <input type="hidden" name="id_no[]" value="'+v.student.id_no+'"> </td>'+
          '<td>'+v.student.name+'</td>'+
          '<td>'+v.student.fname+'</td>'+
          '<td>'+v.student.gender+'</td>'+
          '<td><input type="text" class="form-control form-control-sm" name="marks[]" ></td>'+
          '</tr>';
        });
        html = $('#marks-entry-tr').html(html);
      }
    });
  });

</script>


<!--   // for get Student Subject  -->

<script type="text/javascript">
  $(function(){
    $(document).on('change','#class_id',function(){
      var class_id = $('#class_id').val();
      $.ajax({
        url:"{{ route('marks.getsubject') }}",
        type:"GET",
        data:{class_id:class_id},
        success:function(data){
          var html = '<option value="">Select Subject</option>';
          $.each( data, function(key, v) {
            html += '<option value="'+v.id+'">'+v.school_subject.name+'</option>';
          });
          $('#assign_subject_id').html(html);
        }
      });
    });
  });
</script>



@endsection