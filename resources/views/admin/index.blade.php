



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
                      <h3 class="card-title">2,000
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
                  <h4 class="card-title">TOP 10 TEACHERS</h4>
                  <p class="card-category"></p>
                </div>
                <div class="card-body table-responsive">
                  <table class="table table-hover">
                    <thead class="text-warning">
                      <tr><th>ID</th>
                      <th>Name</th>
                      <th>Salary</th>
                      <th>Country</th>
                    </tr></thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>Dakota Rice</td>
                        <td>$36,738</td>
                        <td>Niger</td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>Minerva Hooper</td>
                        <td>$23,789</td>
                        <td>Curaçao</td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td>Sage Rodriguez</td>
                        <td>$56,142</td>
                        <td>Netherlands</td>
                      </tr>
                      <tr>
                        <td>4</td>
                        <td>Philip Chaney</td>
                        <td>$38,735</td>
                        <td>Korea, South</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>




            <div class="col-lg-6 col-md-12">
              <div class="card">
                <div class="card-header card-header-warning">
                  <h4 class="card-title">TOP 10 STUDENTS</h4>
                  <p class="card-category"></p>
                </div>
                <div class="card-body table-responsive">
                  <table class="table table-hover">
                    <thead class="text-warning">
                      <tr><th>ID</th>
                      <th>Name</th>
                      <th>Salary</th>
                      <th>Country</th>
                    </tr></thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>Dakota Rice</td>
                        <td>$36,738</td>
                        <td>Niger</td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>Minerva Hooper</td>
                        <td>$23,789</td>
                        <td>Curaçao</td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td>Sage Rodriguez</td>
                        <td>$56,142</td>
                        <td>Netherlands</td>
                      </tr>
                      <tr>
                        <td>4</td>
                        <td>Philip Chaney</td>
                        <td>$38,735</td>
                        <td>Korea, South</td>
                      </tr>
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




<script>
   $('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})
</script>










@endsection
