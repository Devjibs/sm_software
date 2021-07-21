


























@php
$prefix = Request::route()->getPrefix();
$route = Route::current()->getName();

@endphp

<body class="">
  <div class="wrapper ">


    <div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"
        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo"><a href="http://www.creative-tim.com" class="simple-text logo-normal">
          Creative Tim
        </a>
      </div>
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
    </div>
    
    
    
    
    
    
    
    
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
    </ul>
    </div>
</div>
















  


  
  <div class="main-panel">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
      <div class="container-fluid">
        <div class="navbar-wrapper">
          <a class="navbar-brand" href="javascript:;">Dashboard</a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
          <span class="sr-only">Toggle navigation</span>
          <span class="navbar-toggler-icon icon-bar"></span>
          <span class="navbar-toggler-icon icon-bar"></span>
          <span class="navbar-toggler-icon icon-bar"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end">
          <form class="navbar-form">
            <div class="input-group no-border">
              <input type="text" value="" class="form-control" placeholder="Search...">
              <button type="submit" class="btn btn-white btn-round btn-just-icon">
                <i class="material-icons">search</i>
                <div class="ripple-container"></div>
              </button>
            </div>
          </form>
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="javascript:;">
                <i class="material-icons">dashboard</i>
                <p class="d-lg-none d-md-block">
                  Stats
                </p>
              </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="material-icons">notifications</i>
                <span class="notification">5</span>
                <p class="d-lg-none d-md-block">
                  Some Actions
                </p>
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#">Mike John responded to your email</a>
                <a class="dropdown-item" href="#">You have 5 new tasks</a>
                <a class="dropdown-item" href="#">You're now friend with Andrew</a>
                <a class="dropdown-item" href="#">Another Notification</a>
                <a class="dropdown-item" href="#">Another One</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="material-icons">person</i>
                <p class="d-lg-none d-md-block">
                  Account
                </p>
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                <a class="dropdown-item" href="#">Profile</a>
                <a class="dropdown-item" href="#">Settings</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Log out</a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->


  </div>
</div>


    
</body>
  

   









































  






































    

