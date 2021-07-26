@extends('admin.admin_master')
@section('admin')


<div class="col-md-12">
	<div class="card">

		<div class="card-header card-header-primary">
			<h4 class="card-title "><b>Grade Marks List </b></h4>
		</div>

		<button type="button" class="btn btn-secondary btn-lg btn-block"><a href="{{ route('marks.grade.add') }}">Add Grade Scores</a></button>


				<div class="card-body">
                <div class="table-responsive">
                    <table id="example1" class="table">
                        <thead class="text-primary">
							<tr>
							<th width="5%">SL</th>  
							<th>Grade Name</th> 
							<th>Grade Point</th>
							<th>Start Marks</th>
							<th>End Marks </th>
							<th>Point Range</th>
							<th>Remarks</th>
							
							<th width="15%">Action</th>
							
							</tr>
						</thead>
						<tbody>
						@foreach($allData as $key => $value )
						<tr>
							<td>{{ $key+1 }}</td>
							<td> {{ $value->grade_name }}</td>	
							<td> {{ number_format((float)$value->grade_point,2)  }}</td>	
							<td> {{ $value->start_marks }}</td>	
							<td> {{ $value->end_marks }}</td>	
							<td> {{ $value->start_point }} -  {{ $value->end_point }}</td>	
							<td> {{ $value->remarks }}</td>
									
							<td>
			<a href="{{ route('marks.grade.edit',$value->id) }}" class="btn btn-info">Edit</a>
			

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







