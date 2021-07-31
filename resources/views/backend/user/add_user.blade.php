@extends('admin.admin_master')
@section('admin')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <div class="card">
        <div class="card-header card-header-primary">
            <h4 class="card-title">Add User</h4>
            <p class="card-category"></p>
        </div>
        <div class="card-body">
          <form method="POST" action="{{route('users.store')}}">
            @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group ">
                            <h6 class="">User Role</h6>
                            <select name="usertype" id="usertype" required="" class="form-control">
                              <option value="" selected="" disabled="">Select Role</option>
                              <option value="Admin">Admin</option>
                              <option value="User">User</option>
                          </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group ">
                            <h6 class="">UserName</h6>
                            <input class="form-control clearable" type="text" name="name" required="">
                          </div>
                        </div>
                </div>

                <div class="row">
                      <div class="col-md-6">
                        <div class="form-group ">
                          <h6 class="">Email</h6>
                          <input type="email" name="email" class="form-control" required="">
                        </div>
                      </div>
                    <div class="col-md-6">
                      <div class="form-group ">
                          <h6 class="">Password</h6>
                          <input class="form-control clearable"  type="password" name="password" required="">
                        </div>
                      </div>
                </div>


                <div class="row">
                  <div class="col-md-6">
                    <button type="submit" class="btn btn-primary pull-right" value="submit">Add User</button>
                              <div class="clearfix"></div>
                  </div>
                </div>

            </form>

                </div>
              </div>




@endsection
