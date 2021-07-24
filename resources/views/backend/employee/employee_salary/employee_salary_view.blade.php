@extends('admin.admin_master')
@section('admin')


    <div class="col-md-12">
        <div class="card">

            <div class="card-header card-header-primary">
                <h4 class="card-title "><b>Employee Salary List</b></h4>
            </div>


            <button type="button" class="btn btn-secondary btn-lg btn-block"><a href="{{ route('employee.registration.add') }}">Add
                    Employee Salary</a></button>


            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead class="text-primary">
							<tr>
								<th width="5%">SL</th>  
								<th>Name</th> 
								<th>ID NO</th>
								<th>Mobile</th>
								<th>Gender</th>
								<th>Join Date</th>
								<th>Salary</th>
								
								<th width="20%">Action</th>
								
							</tr>
						</thead>
						<tbody>
                            @foreach($allData as $key => $value )
							<tr>
								<td>{{ $key+1 }}</td>
								<td> {{ $value->name }}</td>	
								<td> {{ $value->id_no }}</td>	
								<td> {{ $value->mobile }}</td>	
								<td> {{ $value->gender }}</td>	
								<td> {{ date('d-m-Y',strtotime($value->join_date))  }}</td>	
								<td> {{ $value->salary }}</td>
								<a title="Increment" href="{{ route('employee.salary.increment',$value->id) }}" class="btn btn-info"> <i class="fa fa-plus-circle"></i></a>

								<a title="Details" target="_blank" href="{{ route('employee.salary.details',$value->id) }}" class="btn btn-danger"><i class="fa fa-eye"></i></a>
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
