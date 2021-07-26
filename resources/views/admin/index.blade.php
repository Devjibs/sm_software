



@extends('admin.admin_master')
@section('admin')






















        {{-- @include('admin.body.sidebar') --}}
        <div class="content">
            <div class="container-fluid">
              <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                  <div class="card card-stats">
                    <div class="card-header card-header-warning card-header-icon">
                      <div class="card-icon">
                        <i class="material-icons">people</i>
                      </div>
                      <p class="card-category">Total Users</p>
                      <h3 class="card-title">{{count($users)}}
                        <small></small>
                      </h3>
                    </div>
                    <div class="card-footer">
                      <div class="stats">
                        <i class="material-icons">visibility_off</i>
                        <a href="#"> view users</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                  <div class="card card-stats">
                    <div class="card-header card-header-success card-header-icon">
                      <div class="card-icon">
                        <i class="material-icons">house</i>
                      </div>
                      <p class="card-category"><b>MY</b></p>
                      <h3 class="card-title">School</h3>
                    </div>
                    <div class="card-footer">
                      <div class="stats">
                        <i class="material-icons">language</i> 
                        <a class="" data-toggle="modal" data-target="#exampleModal" href="#">visit website</a>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6">
                  <div class="card card-stats">
                    <div class="card-header card-header-danger card-header-icon">
                      <div class="card-icon">
                        <i class="material-icons">menubook</i>
                      </div>
                      <p class="card-category">Total Subjects</p>
                      <h3 class="card-title">84</h3>
                    </div>
                    <div class="card-footer">
                      <div class="stats">
                        <i class="material-icons">visibility_off</i> view subjects
                      </div>
                    </div>
                  </div>
                </div>
              </div>






              <!--Row Section 2-->
            <div class="row">
            <div class="col-lg-6 col-md-12">
              <div class="card">
                <div class="card-header card-header-warning">
                  <h4 class="card-title">TOP ADMINS</h4>
                  <p class="card-category"></p>
                </div>
                <div class="card-body table-responsive">
                  <table class="table table-hover">
                    <thead class="thead-light">
                      <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Photo</th>
                    </tr></thead>
                    <tbody>
                      @foreach ($users as $user)
                      @if($user->usertype == 'Admin')
                      <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td><img class="rounded-circle" width="50px" src="{{(!empty($user->image))? url('upload/user_images/'.$user->image):url('upload/user_images/noimage.png')}}" alt="User Avatar"></td>
                      </tr>
                      @endif
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>




            <div class="col-lg-6 col-md-12">
              <div class="card">
                <div class="card-header card-header-warning">
                  <h4 class="card-title">TOP USERS</h4>
                  <p class="card-category"></p>
                </div>
                <div class="card-body table-responsive">
                  <table class="table table-hover">
                    <thead class="thead-light">
                      <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Photo</th>
                    </tr></thead>
                    <tbody>
                      @foreach ($users as $user)
                      @if($user->usertype == 'User')
                      <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td><img class="rounded-circle" width="50px" src="{{(!empty($user->image))? url('upload/user_images/'.$user->image):url('upload/user_images/noimage.png')}}" alt="User Avatar"></td>
                      </tr>
                      @endif
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            </div>












              <div class="row">
                <div class="col-md-12">
                  <div class="card card-chart">
                    <div class="card-header card-header-success">
                      <div class="ct-chart" id="dailySalesChart"></div>
                    </div>
                    <div class="card-body">
                      <h4 class="card-title">School Chart</h4>
                      <p class="card-category">
                        <span class="text-success"><i class="fa fa-long-arrow-up"></i> 55% </span> Newly Enrolled.</p>
                    </div>
                    <div class="card-footer">
                      <div class="stats">
                        <i class="material-icons">access_time</i> updated 4 minutes ago
                      </div>
                    </div>
                  </div>
                </div>
                </div>
            </div>
        </div>




<script>
   $('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})
</script>










@endsection
