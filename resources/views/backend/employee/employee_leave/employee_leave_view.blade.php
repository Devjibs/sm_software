@extends('admin.admin_master')
@section('admin')


    <div class="col-md-12">
        <div class="card">

            <div class="card-header card-header-primary">
                <h4 class="card-title "><b>Employee Leave</b></h4>
            </div>


            <button type="button" class="btn btn-secondary btn-lg btn-block"><a href="{{ route('employee.leave.add') }}">Add
                    Employee Leave</a></button>


            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead class="text-primary">
							<tr>
								<th width="5%">SL</th>  
								<th>Name</th>
								<th>ID No </th>
								<th>Purpose </th>
								<th>Start Date</th>
								<th>End Date</th> 
								<th width="25%">Action</th>
								
							</tr>
						</thead>
						<tbody>
							@foreach($allData as $key => $leave )
							<tr>
								<td>{{ $key+1 }}</td>
								<td> {{ $leave['user']['name'] }}</td>
								<td> {{ $leave['user']['id_no'] }}</td>
								<td> {{ $leave['purpose']['name'] }}</td>
								<td> {{ $leave->start_date }}</td>
								<td> {{ $leave->end_date }}</td>
								<td>
                              </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>



@endsection
