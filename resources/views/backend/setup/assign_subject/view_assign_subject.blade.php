@extends('admin.admin_master')
@section('admin')

				
				<div class="col-md-12">
					<div class="card">
				
						<div class="card-header card-header-primary">
							<h4 class="card-title "><b>Assign Subject List</b></h4>
						</div>
					<button type="button" class="btn btn-secondary btn-lg btn-block"><a href="{{ route('assign.subject.add') }}"> Add Assign Subject</a></button>		  
				
								
					<div class="card-body">
						<div class="table-responsive">
							<table id="example1" class="table">
								<thead class="text-primary">
									<tr>
										<th width="5%">SL</th>  
				<th>Class Name</th> 
				<th width="25%">Action</th>
		</thead>
		<tbody>
			@foreach($allData as $key => $assign )
			<tr>
				<td>{{ $key+1 }}</td>
				<td> {{ $assign['student_class']['name'] }}</td>				 
				<td>
<a href="{{ route('assign.subject.edit',$assign->class_id ) }}" class="btn btn-info">Edit</a>
<a href="{{ route('assign.subject.details',$assign->class_id ) }}" class="btn btn-primary" >Details</a>

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
			  <!-- /.box -->

			       
			</div>
			<!-- /.col -->



@endsection










