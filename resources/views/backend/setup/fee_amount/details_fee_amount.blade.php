@extends('admin.admin_master')
@section('admin')


<div class="card">
	<div class="card-header card-header-primary">
		<h4 class="card-title"></h4>
		<p class="card-category">Fee <strong>Fee Amount Details</strong></p>
	<a href="{{ route('fee.amount.add') }}" style="float: right;" class="btn btn-rounded btn-success mb-5"> Add Fee Amount</a>			  

				</div>
				<!-- /.box-header -->
				<div class="box-body">

<h4><strong>Fee Category : </strong>{{ $detailsData['0']['fee_cateogry']['name'] }} </h4>					
					<div class="table-responsive">
					  <table class="table table-bordered table-striped">
						<thead class="thead-light">
			<tr>
				<th width="5%">SL</th>  
				<th>Class Name</th> 
				<th width="25%">Amount</th>
				 
			</tr>
		</thead>
		<tbody>
			@foreach($detailsData as $key => $detail )
			<tr>
				<td>{{ $key+1 }}</td>
				<td> {{ $detail['student_class']['name'] }}</td>				 
				<td> {{ $detail->amount }}</td>
				 
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
