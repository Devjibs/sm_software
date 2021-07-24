@extends('admin.admin_master')
@section('admin')


    <div class="col-md-12">
        <div class="card">

            <div class="card-header card-header-primary">
                <h4 class="card-title "><b>Student Class List</b></h4>
            </div>


            <button type="button" class="btn btn-secondary btn-lg btn-block"><a href="{{ route('student.class.add') }}">Add
                    Student Class</a></button>


            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead class="text-primary">
							<tr>
								<th width="5%">SL</th>  
								<th>Name</th> 
								<th width="25%">Action</th>
								
							</tr>
						</thead>
                        <tbody>
                            @foreach($allData as $key => $student )
								<tr>
									<td>{{ $key+1 }}</td>
									<td> {{ $student->name }}</td>				 
									<td>
                                    <a href="{{ route('student.class.edit',$student->id) }}"
                                        class="btn btn-outline-info">Edit</a>
                                    <a href="{{ route('student.class.delete',$student->id)}}" class="btn btn-outline-danger"
                                        id="delete">Delete</a>
                                  </td>
                              </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>



@endsection
