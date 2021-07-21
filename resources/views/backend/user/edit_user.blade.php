@extends('admin.admin_master')
@section('admin')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <div class="card">
        <div class="card-header card-header-primary">
            <h4 class="card-title">Edit User</h4>
            <p class="card-category"></p>
        </div>
        <div class="card-body">
          <form method="POST" action="{{route('users.update', $editData->id )}}">
            @csrf
                <div class="row">
                    <div class="col-md-2">
                        <div class="form-group bmd-form-group">
                            <label class="">User Role</label>
                            <select name="usertype" id="usertype" required="" class="form-control">
                              <option value="" selected="" disabled="">Select Role</option>
                              <option value="Admin" {{($editData->usertype == "Admin" ? "selected": "")}}>Admin</option>
                              <option value="User" {{($editData->usertype == "User" ? "selected": "")}}>User</option>
                          </select>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group bmd-form-group">
                            <label class="bmd-label-floating">UserName</label>
                            <input type="text" name="name" class="form-control" 
                                    value="{{$editData->name}}"required="">
                        </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">Email Address</label>
                          <input type="email" name="email" class="form-control" 
                                  value="{{$editData->email}}" required="">
                      </div>
                  </div>
                </div>



                




					<div class="col-md-6">
					<button type="submit" class="btn btn-primary pull-right" value="Update">Update User</button>
                    <div class="clearfix"></div>
				</div>
				</div>


                    
            </form>

        </div><!-- End Col Md-6 -->
    </div>
    </div>


    </div>
    </div>


    </div>
    </div>


@endsection
