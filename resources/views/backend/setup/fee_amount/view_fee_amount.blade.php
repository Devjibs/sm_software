@extends('admin.admin_master')
@section('admin')




<div class="col-md-12">
	<div class="card">

		<div class="card-header card-header-primary">
			<h4 class="card-title "><b>Student Fee Amount List</b></h4>
		</div>
	<button type="button" class="btn btn-secondary btn-lg btn-block"><a href="{{ route('fee.amount.add') }}"> Add Fee Amount</a></button>		  

				
	<div class="card-body">
		<div class="table-responsive">
			<table id="example1" class="table">
				<thead class="text-primary">
					<tr>
				<th width="5%">SL</th>  
				<th>Fee Category</th> 
				<th width="25%">Action</th>
				 
			</tr>
		</thead>
		<tbody>
			@foreach($allData as $key => $amount )
			<tr>
				<td>{{ $key+1 }}</td>
				<td> {{ $amount['fee_cateogry']['name'] }}</td>				 
				<td>
<a href="{{ route('fee.amount.edit',$amount->fee_category_id) }}" class="btn btn-info">Edit</a>
<a href="{{ route('fee.amount.details',$amount->fee_category_id) }}" class="btn btn-primary" >Details</a>

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
		  </div>




@endsection
























































