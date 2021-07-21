@php
$prefix = Request::route()->getPrefix();
$route = Route::current()->getName();

@endphp

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    SM-SOFTWARE
  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="../assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>

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
    
          <li class="nav-item active-pro ">
            <a class="nav-link" href="./upgrade.html">
              <i class="material-icons">unarchive</i>
              <p>Logout</p>
            </a>
          </li>
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

  
    <!--   Core JS Files   -->
    <script src="../assets/js/core/jquery.min.js"></script>
    <script src="../assets/js/core/popper.min.js"></script>
    <script src="../assets/js/core/bootstrap-material-design.min.js"></script>
    <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
    <!-- Plugin for the momentJs  -->
    <script src="../assets/js/plugins/moment.min.js"></script>
    <!--  Plugin for Sweet Alert -->
    <script src="../assets/js/plugins/sweetalert2.js"></script>
    <!-- Forms Validations Plugin -->
    <script src="../assets/js/plugins/jquery.validate.min.js"></script>
    <!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
    <script src="../assets/js/plugins/jquery.bootstrap-wizard.js"></script>
    <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
    <script src="../assets/js/plugins/bootstrap-selectpicker.js"></script>
    <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
    <script src="../assets/js/plugins/bootstrap-datetimepicker.min.js"></script>
    <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
    <script src="../assets/js/plugins/jquery.dataTables.min.js"></script>
    <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
    <script src="../assets/js/plugins/bootstrap-tagsinput.js"></script>
    <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
    <script src="../assets/js/plugins/jasny-bootstrap.min.js"></script>
    <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
    <script src="../assets/js/plugins/fullcalendar.min.js"></script>
    <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
    <script src="../assets/js/plugins/jquery-jvectormap.js"></script>
    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="../assets/js/plugins/nouislider.min.js"></script>
    <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
    <!-- Library for adding dinamically elements -->
    <script src="../assets/js/plugins/arrive.min.js"></script>
    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <!-- Chartist JS -->
    <script src="../assets/js/plugins/chartist.min.js"></script>
    <!--  Notifications Plugin    -->
    <script src="../assets/js/plugins/bootstrap-notify.js"></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="../assets/js/material-dashboard.js?v=2.1.2" type="text/javascript"></script>
    <!-- Material Dashboard DEMO methods, don't include it in your project! -->
    <script src="../assets/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      $().ready(function() {
        $sidebar = $('.sidebar');

        $sidebar_img_container = $sidebar.find('.sidebar-background');

        $full_page = $('.full-page');

        $sidebar_responsive = $('body > .navbar-collapse');

        window_width = $(window).width();

        fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();

        if (window_width > 767 && fixed_plugin_open == 'Dashboard') {
          if ($('.fixed-plugin .dropdown').hasClass('show-dropdown')) {
            $('.fixed-plugin .dropdown').addClass('open');
          }

        }

        $('.fixed-plugin a').click(function(event) {
          // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
          if ($(this).hasClass('switch-trigger')) {
            if (event.stopPropagation) {
              event.stopPropagation();
            } else if (window.event) {
              window.event.cancelBubble = true;
            }
          }
        });

        $('.fixed-plugin .active-color span').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-color', new_color);
          }

          if ($full_page.length != 0) {
            $full_page.attr('filter-color', new_color);
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.attr('data-color', new_color);
          }
        });

        $('.fixed-plugin .background-color .badge').click(function() {
          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('background-color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-background-color', new_color);
          }
        });

        $('.fixed-plugin .img-holder').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).parent('li').siblings().removeClass('active');
          $(this).parent('li').addClass('active');


          var new_image = $(this).find("img").attr('src');

          if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            $sidebar_img_container.fadeOut('fast', function() {
              $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
              $sidebar_img_container.fadeIn('fast');
            });
          }

          if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $full_page_background.fadeOut('fast', function() {
              $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
              $full_page_background.fadeIn('fast');
            });
          }

          if ($('.switch-sidebar-image input:checked').length == 0) {
            var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
            $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
          }
        });

        $('.switch-sidebar-image input').change(function() {
          $full_page_background = $('.full-page-background');

          $input = $(this);

          if ($input.is(':checked')) {
            if ($sidebar_img_container.length != 0) {
              $sidebar_img_container.fadeIn('fast');
              $sidebar.attr('data-image', '#');
            }

            if ($full_page_background.length != 0) {
              $full_page_background.fadeIn('fast');
              $full_page.attr('data-image', '#');
            }

            background_image = true;
          } else {
            if ($sidebar_img_container.length != 0) {
              $sidebar.removeAttr('data-image');
              $sidebar_img_container.fadeOut('fast');
            }

            if ($full_page_background.length != 0) {
              $full_page.removeAttr('data-image', '#');
              $full_page_background.fadeOut('fast');
            }

            background_image = false;
          }
        });

        $('.switch-sidebar-mini input').change(function() {
          $body = $('body');

          $input = $(this);

          if (md.misc.sidebar_mini_active == true) {
            $('body').removeClass('sidebar-mini');
            md.misc.sidebar_mini_active = false;

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

          } else {

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

            setTimeout(function() {
              $('body').addClass('sidebar-mini');

              md.misc.sidebar_mini_active = true;
            }, 300);
          }

          // we simulate the window Resize so the charts will get updated in realtime.
          var simulateWindowResize = setInterval(function() {
            window.dispatchEvent(new Event('resize'));
          }, 180);

          // we stop the simulation of Window Resize after the animations are completed
          setTimeout(function() {
            clearInterval(simulateWindowResize);
          }, 1000);

        });
      });
    });
  </script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      md.initDashboardPageCharts();

    });
  </script>
</body>

</html>