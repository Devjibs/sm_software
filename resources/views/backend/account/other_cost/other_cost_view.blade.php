@extends('admin.admin_master')
@section('admin')

			
				<div class="col-md-12">
					<div class="card">
				
						<div class="card-header card-header-primary">
							<h4 class="card-title "><b>Other Cost List </b></h4>
						</div>
					<button type="button" class="btn btn-secondary btn-lg btn-block"><a href="{{ route('other.cost.add') }}"> Add Other Cost</a></button>		  
				
								
					<div class="card-body">
						<div class="table-responsive">
							<table id="example1" class="table">
								<thead class="text-primary">
									<tr>
				<th width="5%">SL</th>  
				<th>Date</th> 
				<th>Amount </th>
				<th>Description</th>
				<th>Image</th> 
				<th>Action</th>
				 
				 
			</tr>
		</thead>
		<tbody>
			@foreach($allData as $key => $value )
			<tr>
				<td>{{ $key+1 }}</td>
				<td> {{ date('d-m-Y', strtotime($value->date)) }}</td>	
				<td> {{ $value->amount }}</td>	
				<td> {{ $value->description }}</td>	 
				<td>  
					<img src="{{ (!empty($value->image))? url('upload/cost_images/'.$value->image):url('upload/no_image.jpg') }}" style="width: 70px; height: 50px;">
				  </td>

				  <td> <a href="{{ route('edit.other.cost',$value->id ) }}" class="btn btn-info"> Edit</a> </td>
				 		  
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



