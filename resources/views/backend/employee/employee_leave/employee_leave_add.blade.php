@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="card">
	<div class="card-header card-header-primary">
		<h4 class="card-title"></h4>
		<p class="card-category">Employee <strong>Leave</strong></p>
	</div>
	<div class="card-body">	

 <form method="post" action="{{ route('store.employee.leave') }}">
	 	@csrf
					  <div class="row">
						<div class="col-12">	
 

   <div class="row">



<div class="col-md-6">

    <div class="form-group">
	<h5>Employee Name <span class="text-danger">*</span></h5>
	<div class="controls">
	 <select name="employee_id" required="" class="form-control">
			<option value="" selected="" disabled="">Select Employee Name</option>
			 
			 @foreach($employees as $employee)
			<option value="{{ $employee->id }}">{{ $employee->name }}</option>
			 @endforeach
		</select>
	 </div>
          </div>


   	</div> <!-- // end col md-6 -->



   	<div class="col-md-6">

    <div class="form-group">
		<h5>Start Date <span class="text-danger">*</span></h5>
		<div class="controls">
	 <input type="date" name="start_date" class="form-control" > 
	  </div>
		 
	</div>


   	</div> <!-- // end col md-6 -->





   	<div class="col-md-6">

   <div class="form-group">
	<h5>Leave Purpose <span class="text-danger">*</span></h5>
	<div class="controls">
	 <select name="leave_purpose_id" id="leave_purpose_id" required="" class="form-control">
			<option value="" selected="" disabled="">Select Employee Name</option>
			 
			 @foreach($leave_purpose as $leave)
			<option value="{{ $leave->id }}">{{ $leave->name }}</option>
			 @endforeach
			 <option value="0">New Purpose</option>
		</select>
<input type="text" name="name" id="add_another" class="form-control" placeholder="Write Purpose" style="display: none;">		
	 </div>
          </div>


   	</div> <!-- // end col md-6 -->


   		<div class="col-md-6">

   	 <div class="form-group">
		<h5>End Date  <span class="text-danger">*</span></h5>
		<div class="controls">
	 <input type="date" name="end_date" class="form-control" > 
	  </div>
		 
	</div>
   		
   	</div> <!-- // end col md-6 -->
   	
   </div> <!-- // end row -->

	 
							 
						<div class="text-xs-right">
	 <input type="submit" class="btn btn-rounded btn-primary" value="Submit">
						</div>
					</form>

				</div>
				<!-- /.col -->
			  </div>
			

<script type="text/javascript">
	$(document).ready(function(){
		$(document).on('change','#leave_purpose_id',function(){
			var leave_purpose_id = $(this).val();
			if (leave_purpose_id == '0') {
				$('#add_another').show();
			}else{
				$('#add_another').hide();
			}
		});
	});
</script>



@endsection
