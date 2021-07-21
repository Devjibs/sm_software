








    {{-- @extends('admin.admin_master')
    @section('admin') --}}


    {{-- @extends('admin.admin_master')
    @section('admin')

        {{-- @include('admin.body.sidebar') --}}
        
            {{-- <div class="container-fluid">
              <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                  <div class="card card-stats">
                    <div class="card-header card-header-warning card-header-icon">
                      <div class="card-icon">
                        <i class="material-icons">content_copy</i>
                      </div>
                      <p class="card-category">Used Space</p>
                      <h3 class="card-title">49/50
                        <small>GB</small>
                      </h3>
                    </div>
                    <div class="card-footer">
                      <div class="stats">
                        <i class="material-icons text-danger">warning</i>
                        <a href="javascript:;">Get More Space...</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                  <div class="card card-stats">
                    <div class="card-header card-header-success card-header-icon">
                      <div class="card-icon">
                        <i class="material-icons">store</i>
                      </div>
                      <p class="card-category">Revenue</p>
                      <h3 class="card-title">$34,245</h3>
                    </div>
                    <div class="card-footer">
                      <div class="stats">
                        <i class="material-icons">date_range</i> Last 24 Hours
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                  <div class="card card-stats">
                    <div class="card-header card-header-danger card-header-icon">
                      <div class="card-icon">
                        <i class="material-icons">info_outline</i>
                      </div>
                      <p class="card-category">Fixed Issues</p>
                      <h3 class="card-title">75</h3>
                    </div>
                    <div class="card-footer">
                      <div class="stats">
                        <i class="material-icons">local_offer</i> Tracked from Github
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                  <div class="card card-stats">
                    <div class="card-header card-header-info card-header-icon">
                      <div class="card-icon">
                        <i class="fa fa-twitter"></i>
                      </div>
                      <p class="card-category">Followers</p>
                      <h3 class="card-title">+245</h3>
                    </div>
                    <div class="card-footer">
                      <div class="stats">
                        <i class="material-icons">update</i> Just Updated
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-4">
                  <div class="card card-chart">
                    <div class="card-header card-header-success">
                      <div class="ct-chart" id="dailySalesChart"></div>
                    </div>
                    <div class="card-body">
                      <h4 class="card-title">Daily Sales</h4>
                      <p class="card-category">
                        <span class="text-success"><i class="fa fa-long-arrow-up"></i> 55% </span> increase in today sales.</p>
                    </div>
                    <div class="card-footer">
                      <div class="stats">
                        <i class="material-icons">access_time</i> updated 4 minutes ago
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="card card-chart">
                    <div class="card-header card-header-warning">
                      <div class="ct-chart" id="websiteViewsChart"></div>
                    </div>
                    <div class="card-body">
                      <h4 class="card-title">Email Subscriptions</h4>
                      <p class="card-category">Last Campaign Performance</p>
                    </div>
                    <div class="card-footer">
                      <div class="stats">
                        <i class="material-icons">access_time</i> campaign sent 2 days ago
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="card card-chart">
                    <div class="card-header card-header-danger">
                      <div class="ct-chart" id="completedTasksChart"></div>
                    </div>
                    <div class="card-body">
                      <h4 class="card-title">Completed Tasks</h4>
                      <p class="card-category">Last Campaign Performance</p>
                    </div>
                    <div class="card-footer">
                      <div class="stats">
                        <i class="material-icons">access_time</i> campaign sent 2 days ago
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
           --}}
          {{-- @include('admin.body.footer') --}}
    

    {{-- @endsection --}} 





































































































































@extends('admin.body.sidebar')













{{-- @php
$prefix = Request::route()->getPrefix();
$route = Route::current()->getName();

@endphp


 <div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
  <!--
    Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

    Tip 2: you can also add an image using data-image tag
-->
  <div class="logo"><a href="http://www.github.com/jibogithub" class="simple-text logo-normal">
      SM SOFTWARE
    </a></div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item active  ">
        <a class="nav-link" href="{{ route('dashboard') }}">
          <i class="material-icons">dashboard</i>
          <p class="{{ ($route == 'dashboard')?'active':'' }}" >
           Dashboard</p>
        </a>
      </li>
      @if(Auth::user()->usertype == 'Admin')
        <div class="btn-group dropright {{ ($prefix == '/users')?'active':'' }} ">
          <button class="btn btn-secondary dropdown-toggle" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Manage User
          </button>
          <div class="dropdown-menu">
            <!-- Dropdown menu links -->
            <a class="dropdown-item" href="{{ route('user.view') }}">View Users</a>
            <a class="dropdown-item" href="{{ route('users.add') }}">Add User</a>
          </div>
        </div>
      @endif
      <br>
      <div class="btn-group dropdown {{ ($prefix == '/profile')?'active':'' }}">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Manage Profile
        </button>
          <div class="dropdown-menu">
            <!-- Dropdown menu links -->
            <a class="dropdown-item" href="{{ route('profile.view') }}">Your Profile</a>
            <a class="dropdown-item" href="{{ route('password.view') }}">Change Password</a>
          </div>
      </div>






<!-- Default dropright button -->
<div class="btn-group dropdown {{ ($prefix == '/students')?'active':'' }}">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Student Management
  </button>
  <div class="dropdown-menu">
    <!-- Dropdown menu links -->
    <a class="dropdown-item" href="{{ route('student.registration.view') }}">Student Registration</a>
    <a class="dropdown-item" href="{{ route('student.year.view') }}">Student Year</a>
    <a class="dropdown-item" href="{{ route('roll.generate.view') }}">Roll Generate</a>
    <a class="dropdown-item" href="{{ route('registration.fee.view') }}">Registration Fee</a>
    <a class="dropdown-item" href="{{ route('monthly.fee.view') }}">Monthly Fee</a>
    <a class="dropdown-item" href="{{ route('exam.fee.view') }}">Exam Fee</a>
  </div>
</div> --}}







{{-- 
<!-- Default dropright button -->
<div class="btn-group dropright {{ ($prefix == '/employees')?'active':'' }}">
  <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Employee Management
  </button>
  <div class="dropdown-menu">
    <!-- Dropdown menu links -->
    <a class="dropdown-item {{ ($route == 'employee.registration.view')?'active':'' }}" href="">Employee Registration</a>
    <a class="dropdown-item {{ ($route == 'employee.salary.view')?'active':'' }}" href="{{ route('employee.salary.view') }}">Employee Salary</a>
    <a class="dropdown-item" href="{{ route('employee.leave.view') }}">Employee Leave</a>
    <a class="dropdown-item" href="{{ route('employee.attendance.view') }}">Employee Attendance</a>
    <a class="dropdown-item" href="{{ route('employee.monthly.salary') }}">Employee Monthly Salary</a>

  </div>
</div>










        

<!-- Default dropright button -->
<div class="btn-group dropright {{ ($prefix == '/marks')?'active':'' }}">
  <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Marks Management
  </button>
  <div class="dropdown-menu">
    <!-- Dropdown menu links -->
    <a class="dropdown-item {{ ($route == 'marks.entry.add')?'active':'' }}" href="{{ route('marks.entry.add') }}">Marks Entry</a>
          <a class="dropdown-item {{ ($route == 'marks.entry.edit')?'active':'' }}" href="{{ route('marks.entry.edit') }}">Marks Edit</a>
          <a class="dropdown-item {{ ($route == 'marks.entry.grade')?'active':'' }}" href="{{ route('marks.entry.grade') }}">Marks Grade</a>
  </div>
</div>





<!-- Default dropright button -->
<div class="btn-group dropright  {{ ($prefix == '/setups')?'active':'' }}">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Setup Management
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <!-- Dropdown menu links -->
    <a class="dropdown-item" href="{{ route('student.class.view') }}">Student Class</a>
    <a class="dropdown-item" href="{{ route('student.year.view') }}">Student Year</a>
    <a class="dropdown-item" href="{{ route('student.group.view') }}">Student Group</a>
    <a class="dropdown-item" href="{{ route('student.shift.view') }}">Student Shift</a>
    <a class="dropdown-item" href="{{ route('fee.category.view') }}">Fee Category</a>
    <a class="dropdown-item" href="{{ route('fee.amount.view') }}">Fee Amount</a>
    <a class="dropdown-item" href="{{ route('exam.type.view') }}">Exam Type</a>
    <a class="dropdown-item" href="{{ route('school.subject.view') }}">School Subject</a>
    <a class="dropdown-item" href="{{ route('assign.subject.view') }}">Assign Subject</a>
    <a class="dropdown-item" href="{{ route('designation.view') }}">Designation</a>
  </div>
</div>




<!-- Default dropright button -->
<div class="btn-group dropright {{ ($prefix == '/accounts')?'active':'' }}">
  <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Accounts Management
  </button>
  <div class="dropdown-menu">
    <!-- Dropdown menu links -->
    <a class="dropdown-item {{ ($route == 'student.fee.view')?'active':'' }}" href="{{ route('student.fee.view') }}">Student Fee</a>
          <a class="dropdown-item {{ ($route == 'account.salary.view')?'active':'' }}" href="{{ route('account.salary.view') }}">Employee Salary</a>
          <a class="dropdown-item {{ ($route == 'other.cost.view')?'active':'' }}" href="{{ route('other.cost.view') }}">Other Cost</a>
  </div>
</div>








<!-- Default dropright button -->
<div class="btn-group dropright {{ ($prefix == '/reports')?'active':'' }}">
  <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Report Management
  </button>
  <div class="dropdown-menu">
    <!-- Dropdown menu links -->
    <a class="dropdown-item {{ ($route == 'monthly.profit.view')?'active':'' }}" href="{{ route('monthly.profit.view') }}">Monthly-Yearly Profit</a>

          <a class="dropdown-item {{ ($route == 'attendance.report.view')?'active':'' }}" href="{{ route('marksheet.generate.view') }}">Attendance Report</a>

          <a class="dropdown-item {{ ($route == 'student.result.view')?'active':'' }}" href="{{ route('student.result.view') }}">Student Result </a>

          <a class="dropdown-item {{ ($route == 'student.idcard.view')?'active':'' }}" href="{{ route('student.idcard.view') }}">Student ID Card </a>
  </div>
</div>






      <li class="nav-item active-pro ">
        <a class="nav-link" href="./upgrade.html">
          <i class="material-icons">unarchive</i>
          <p>Logout</p>
        </a>
      </li>
      </div>
      
</div> --}}