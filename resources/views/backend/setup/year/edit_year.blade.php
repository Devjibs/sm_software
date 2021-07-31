@extends('admin.admin_master')
@section('admin')

<div class="card">
	<div class="card-header card-header-primary">
		<h4 class="card-title"></h4>
		<p class="card-category">Edit <strong>Student Year</strong></p>
	</div>
	<div class="card-body">	

	 <form method="post" action="{{ route('update.student.year',$editData->id) }}">
	 	@csrf
					  <div class="row">
						<div class="col-12">	
 

 

		<div class="form-group">
		<h5>Student Year Name <span class="text-danger">*</span></h5>
		<div class="controls">
	 <input type="text" name="name" class="form-control" value="{{ $editData->name }}" > 
	 @error('name')
	 <span class="text-danger">{{ $message }}</span>
	 @enderror
	  </div>
		 
	</div>
 
	  
  
							 
						<div class="text-xs-right">
	 <input type="submit" class="btn btn-rounded btn-primary" value="Update">
						</div>
					</form>

				</div>
				<!-- /.col -->
			  </div>
			  <!-- /.row -->





@endsection
