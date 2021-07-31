@extends('admin.admin_master')
@section('admin')



<div class="col-md-12">
	<div class="card">

		<div class="card-header card-header-primary">
			<h4 class="card-title "><b>Student Shift List</b></h4>
		</div>
	<button type="button" class="btn btn-secondary btn-lg btn-block"><a href="{{ route('student.shift.add') }}">Add Student Shift</a></button>		  

				<!-- /.box-header -->
				<div class="card-body">
                <div class="table-responsive">
                    <table id="example1" class="table">
                        <thead class="text-primary">
							<tr>
				<th width="5%">SL</th>  
				<th>Name</th> 
				<th width="25%">Action</th>
				 
			</tr>
		</thead>
		<tbody>
			@foreach($allData as $key => $shift )
			<tr>
				<td>{{ $key+1 }}</td>
				<td> {{ $shift->name }}</td>				 
				<td>
<a href="{{ route('student.shift.edit',$shift->id) }}" class="btn btn-info">Edit</a>
<a href="{{ route('student.shift.delete',$shift->id) }}" class="btn btn-danger" id="delete">Delete</a>

				</td>
				 
			</tr>
			@endforeach
							 
						</tbody>
						<tfoot>
							 
						</tfoot>
					  </table>
					</div>
				</div>
				<!-- /.box-body -->
			  </div>
				</div>



@endsection
























































