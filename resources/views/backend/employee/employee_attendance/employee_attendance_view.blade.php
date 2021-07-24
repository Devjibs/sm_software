@extends('admin.admin_master')
@section('admin')


    <div class="col-md-12">
        <div class="card">

            <div class="card-header card-header-primary">
                <h4 class="card-title "><b>Employee Attendance List</b></h4>
            </div>


            <button type="button" class="btn btn-secondary btn-lg btn-block"><a href="{{ route('employee.attendance.add') }}">Add
                    Attendance</a></button>


            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead class="text-primary">
							<tr>
								<th width="5%">SL</th>  
								<th>Date </th> 
								<th width="20%">Action</th>
							</tr>
						</thead>
						<tbody>
							@foreach($allData as $key => $value )
							<tr>
								<td>{{ $key+1 }}</td> 
								<td> {{ date('d-m-Y', strtotime($value->date)) }}</td> 
									<a href="{{ route('employee.attendance.edit',$value->date) }}" class="btn btn-info">Edit</a>
									<a href="{{ route('employee.attendance.details',$value->date) }}" class="btn btn-danger">Details</a>
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
