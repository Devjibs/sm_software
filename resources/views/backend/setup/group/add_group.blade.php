@extends('admin.admin_master')
@section('admin')


<div class="card">
	<div class="card-header card-header-primary">
		<h4 class="card-title"></h4>
		<p class="card-category">Add <strong>Student Group</strong></p>
	</div>
	<div class="card-body">	
		 
				<div class="row"> 
				<div class="col">
	 <form method="post" action="{{ route('store.student.group') }}">
	 	@csrf
					  <div class="row">
						<div class="col-12">	
 

 

		<div class="form-group">
		<h5>Student Group Name <span class="text-danger">*</span></h5>
		<div class="controls">
	 <input type="text" name="name" class="form-control" > 
	 @error('name')
	 <span class="text-danger">{{ $message }}</span>
	 @enderror
	  </div>
		 
	</div>
 
	  
  
							 
						<div class="text-xs-right">
	 <input type="submit" class="btn btn-rounded btn-primary" value="Submit">
						</div>
					</form>

				</div>
				<!-- /.col -->
			  </div>
			  <!-- /.row -->
			</div>
			<!-- /.box-body -->
		  </div>
		  <!-- /.box -->


@endsection
