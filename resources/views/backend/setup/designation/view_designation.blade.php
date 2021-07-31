@extends('admin.admin_master')
@section('admin')


				<div class="col-md-12">
					<div class="card">
				
						<div class="card-header card-header-primary">
							<h4 class="card-title "><b>Designation List</b></h4>
						</div>
					<button type="button" class="btn btn-secondary btn-lg btn-block"><a href="{{ route('designation.add') }}"> Add Designation</a></button>		  
				
								
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
			@foreach($allData as $key => $designation )
			<tr>
				<td>{{ $key+1 }}</td>
				<td> {{ $designation->name }}</td>				 
				<td>
<a href="{{ route('designation.edit',$designation->id) }}" class="btn btn-outline-info">Edit</a>
<a href="{{ route('designation.delete',$designation->id) }}" class="btn btn-outline-danger" id="delete">Delete</a>

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



@endsection















