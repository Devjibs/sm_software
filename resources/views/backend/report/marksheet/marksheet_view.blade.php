@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


					<div class="card">
						<div class="card-header card-header-primary">
							<h4 class="card-title"></h4>
							<p class="card-category">Manage <strong>MarkSheet Generate</strong></p>
						</div>
						<div class="card-body">				
 <form method="GET" action="{{ route('report.marksheet.get') }}" target="_blank">
			@csrf
			<div class="row">



<div class="col-md-6">

 		 <div class="form-group">
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
	  
 			</div> <!-- End Col md 3 --> 


 			
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

 		 <div class="form-group">
		<h5>Exam Type <span class="text-danger"> </span></h5>
		<div class="controls">
 <select name="exam_type_id" id="exam_type_id"  required="" class="form-control">
			<option value="" selected="" disabled="">Select Class</option>
			 @foreach($exam_type as $exam)
			<option value="{{ $exam->id }}">{{ $exam->name }}</option>
		 	@endforeach
			 
		</select>
	  </div>		 
	  </div>
	  
 			</div> <!-- End Col md 3 --> 




 <div class="col-md-6">

 		 <div class="form-group">
		<h5>ID No <span class="text-danger">*</span></h5>
		<div class="controls">
	 <input type="text" name="id_no" class="form-control" required="" > 
	  </div>		 
	  </div>
	  
 			</div> <!-- End Col md 3 --> 	
		</div>		





 			<div class="col-md-6"  >

  <input type="submit" class="btn btn-rounded btn-primary" value="Search">

	  
 			</div> <!-- End Col md 3 --> 		
			</div><!--  end row --> 

 

		</form> 

			       
			</div>
			<!-- /.col -->
		  </div>
		  <!-- /.row -->

 


@endsection














