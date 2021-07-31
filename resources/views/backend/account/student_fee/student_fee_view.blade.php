@extends('admin.admin_master')
@section('admin')


				<div class="col-md-12">
					<div class="card">
				
						<div class="card-header card-header-primary">
							<h4 class="card-title "><b>Student Fee List </b></h4>
						</div>
					<button type="button" class="btn btn-secondary btn-lg btn-block"><a href="{{ route('student.fee.add') }}"> Add / Edit Student Fee</a></button>		  
				
								
					<div class="card-body">
						<div class="table-responsive">
							<table id="example1" class="table">
								<thead class="text-primary">
									<tr>
				<th width="5%">SL</th>  
				<th>ID No</th> 
				<th>Name </th>
				<th>Year</th>
				<th>Class </th>
				<th>Fee Type</th>
				<th>Amount</th>
				<th>Date</th> 
				 
				 
			</tr>
		</thead>
		<tbody>
			@foreach($allData as $key => $value )
			<tr>
				<td>{{ $key+1 }}</td>
				<td> {{ $value['student']['id_no'] }}</td>	
				<td> {{ $value['student']['name'] }}</td>	
				<td> {{ $value['student_year']['name'] }}</td>	
				<td> {{ $value['student_class']['name'] }}</td>	
				<td> {{ $value['fee_category']['name'] }} </td>	
				<td> {{ $value->amount }}</td>
				<td> {{ date('M Y', strtotime($value->date))  }}</td>
				 		  
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





@endsection


