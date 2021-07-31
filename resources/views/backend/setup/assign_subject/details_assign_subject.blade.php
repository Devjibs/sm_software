@extends('admin.admin_master')
@section('admin')
<div class="card">
	<div class="card-header card-header-primary">
		<h4 class="card-title"></h4>
		<p class="card-category">Assign <strong>Subject Details</strong></p>

	<a href="{{ route('assign.subject.add') }}" style="float: right;" class="btn btn-rounded btn-success mb-5"> Add Assign Subject</a>			  

				</div>
				<!-- /.box-header -->
				<div class="box-body">

<h4><strong>Assign Subject : </strong>{{ $detailsData['0']['student_class']['name'] }} </h4>					
					<div class="table-responsive">
					  <table class="table table-bordered table-striped">
						<thead class="thead-light">
			<tr>
				<th width="5%">SL</th>  
				<th width="20%">Subject</th> 
				<th width="20%">Full Mark</th>
				<th width="20%">Pass Mark</th>
				<th width="20%">Subjective Mark</th>
				 
			</tr>
		</thead>
		<tbody>
			@foreach($detailsData as $key => $detail )
			<tr>
				<td>{{ $key+1 }}</td>
				<td> {{ $detail['school_subject']['name'] }}</td>				 
				<td> {{ $detail->full_mark }}</td>
				<td> {{ $detail->pass_mark }}</td>
				<td> {{ $detail->subjective_mark }}</td>
				 
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
