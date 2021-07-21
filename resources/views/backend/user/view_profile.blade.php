{{-- @extends('admin.admin_master')
@section('admin')
     --}}

{{-- 
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <div class="container-full">

      <!-- Main content -->
      <section class="content">
        <div class="row">
            

        </div class="col-12">

          <div class="col-12">
            <div class="box box-widget widget-user">
                <!-- Add the bg color to the header using any of the bg-* classes -->
                <div class="widget-user-header bg-black" >
                    <a href="{{ route('profile.edit') }}" style="float: right;" class="btn btn-outline btn-rounded btn-success mb-5"> Edit Profile</a>
                  <h3 class="widget-user-username">{{ $user->name }}</h3>
                  <h6 class="widget-user-desc">{{ $user->usertype }}</h6>
                  <h6 class="widget-user-desc">{{ $user->email }}</h6>
                  
                </div>
                <div class="widget-user-image">
                  <img class="rounded-circle" src="{{(!empty($user->image))? url('upload/user_images/'.$user->image):url('upload/user_images/noimage.png')}}" alt="User Avatar">
                </div>
                <div class="box-footer">
                  <div class="row">
                    <div class="col-sm-4">
                      <div class="description-block">
                        <h5 class="description-header">Phone Number</h5>
                        <span class="description-text">{{$user->phone}}</span>
                      </div>
                      <!-- /.description-block -->
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-4 br-1 bl-1">
                      <div class="description-block">
                        <h5 class="description-header">Address</h5>
                        <span class="description-text">{{$user->address}}</span>
                      </div>
                      <!-- /.description-block -->
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-4">
                      <div class="description-block">
                        <h5 class="description-header">Gender</h5>
                        <span class="description-text">{{$user->gender}}</span>
                      </div>
                      <!-- /.description-block -->
                    </div>
                    <!-- /.col -->
                  </div>
                  <!-- /.row -->
                </div>
              </div>

          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </section>
      <!-- /.content -->
    
    </div>
</div>
<!-- /.content-wrapper --> --}}


{{-- 
<!-- Control Sidebar -->
<aside class="control-sidebar">
    
  <div class="rpanel-title"><span class="pull-right btn btn-circle btn-danger"><i class="ion ion-close text-white" data-toggle="control-sidebar"></i></span> </div>  <!-- Create the tabs -->
  <ul class="nav nav-tabs control-sidebar-tabs">
    <li class="nav-item"><a href="#control-sidebar-home-tab" data-toggle="tab" class="active">Chat</a></li>
    <li class="nav-item"><a href="#control-sidebar-settings-tab" data-toggle="tab">Todo</a></li>
  </ul>
  <!-- Tab panes -->
  <div class="tab-content">
    <!-- Home tab content -->
    <div class="tab-pane active" id="control-sidebar-home-tab">
        <div class="flexbox">
          <a href="javascript:void(0)" class="text-grey"><i class="ti-minus"></i></a>	
          <p>Users</p>
          <a href="javascript:void(0)" class="text-right text-grey"><i class="ti-plus"></i></a>
        </div>
        <div class="lookup lookup-sm lookup-right d-none d-lg-block">
          <input type="text" name="s" placeholder="Search" class="w-p100">
        </div>
        <div class="media-list media-list-hover mt-20">
          <div class="media py-10 px-0">
            <a class="avatar avatar-lg status-success" href="#">
              <img src="https://sm-software.herokuapp.com/backend/images/avatar/1.jpg" alt="...">
            </a>
            <div class="media-body">
              <p class="font-size-16">
                <a class="hover-primary" href="#"><strong>Tyler</strong></a>
              </p>
              <p>Praesent tristique diam...</p>
                <span>Just now</span>
            </div>
          </div>

          <div class="media py-10 px-0">
            <a class="avatar avatar-lg status-danger" href="#">
              <img src="https://sm-software.herokuapp.com/backend/images/avatar/2.jpg" alt="...">
            </a>
            <div class="media-body">
              <p class="font-size-16">
                <a class="hover-primary" href="#"><strong>Luke</strong></a>
              </p>
              <p>Cras tempor diam ...</p>
                <span>33 min ago</span>
            </div>
          </div>

          <div class="media py-10 px-0">
            <a class="avatar avatar-lg status-warning" href="#">
              <img src="https://sm-software.herokuapp.com/backend/images/avatar/3.jpg" alt="...">
            </a>
            <div class="media-body">
              <p class="font-size-16">
                <a class="hover-primary" href="#"><strong>Evan</strong></a>
              </p>
              <p>In posuere tortor vel...</p>
                <span>42 min ago</span>
            </div>
          </div>

          <div class="media py-10 px-0">
            <a class="avatar avatar-lg status-primary" href="#">
              <img src="https://sm-software.herokuapp.com/backend/images/avatar/4.jpg" alt="...">
            </a>
            <div class="media-body">
              <p class="font-size-16">
                <a class="hover-primary" href="#"><strong>Evan</strong></a>
              </p>
              <p>In posuere tortor vel...</p>
                <span>42 min ago</span>
            </div>
          </div>			
          
          <div class="media py-10 px-0">
            <a class="avatar avatar-lg status-success" href="#">
              <img src="https://sm-software.herokuapp.com/backend/images/avatar/1.jpg" alt="...">
            </a>
            <div class="media-body">
              <p class="font-size-16">
                <a class="hover-primary" href="#"><strong>Tyler</strong></a>
              </p>
              <p>Praesent tristique diam...</p>
                <span>Just now</span>
            </div>
          </div>

          <div class="media py-10 px-0">
            <a class="avatar avatar-lg status-danger" href="#">
              <img src="https://sm-software.herokuapp.com/backend/images/avatar/2.jpg" alt="...">
            </a>
            <div class="media-body">
              <p class="font-size-16">
                <a class="hover-primary" href="#"><strong>Luke</strong></a>
              </p>
              <p>Cras tempor diam ...</p>
                <span>33 min ago</span>
            </div>
          </div>

          <div class="media py-10 px-0">
            <a class="avatar avatar-lg status-warning" href="#">
              <img src="https://sm-software.herokuapp.com/backend/images/avatar/3.jpg" alt="...">
            </a>
            <div class="media-body">
              <p class="font-size-16">
                <a class="hover-primary" href="#"><strong>Evan</strong></a>
              </p>
              <p>In posuere tortor vel...</p>
                <span>42 min ago</span>
            </div>
          </div>

          <div class="media py-10 px-0">
            <a class="avatar avatar-lg status-primary" href="#">
              <img src="https://sm-software.herokuapp.com/backend/images/avatar/4.jpg" alt="...">
            </a>
            <div class="media-body">
              <p class="font-size-16">
                <a class="hover-primary" href="#"><strong>Evan</strong></a>
              </p>
              <p>In posuere tortor vel...</p>
                <span>42 min ago</span>
            </div>
          </div>
            
        </div>

    </div>
    <!-- /.tab-pane -->
    <!-- Settings tab content -->
    <div class="tab-pane" id="control-sidebar-settings-tab">
        <div class="flexbox">
          <a href="javascript:void(0)" class="text-grey"><i class="ti-minus"></i></a>	
          <p>Todo List</p>
          <a href="javascript:void(0)" class="text-right text-grey"><i class="ti-plus"></i></a>
        </div>
      <ul class="todo-list mt-20">
          <li class="py-15 px-5 by-1">
            <!-- checkbox -->
            <input type="checkbox" id="basic_checkbox_1" class="filled-in">
            <label for="basic_checkbox_1" class="mb-0 h-15"></label>
            <!-- todo text -->
            <span class="text-line">Nulla vitae purus</span>
            <!-- Emphasis label -->
            <small class="badge bg-danger"><i class="fa fa-clock-o"></i> 2 mins</small>
            <!-- General tools such as edit or delete-->
            <div class="tools">
              <i class="fa fa-edit"></i>
              <i class="fa fa-trash-o"></i>
            </div>
          </li>
          <li class="py-15 px-5">
            <!-- checkbox -->
            <input type="checkbox" id="basic_checkbox_2" class="filled-in">
            <label for="basic_checkbox_2" class="mb-0 h-15"></label>
            <span class="text-line">Phasellus interdum</span>
            <small class="badge bg-info"><i class="fa fa-clock-o"></i> 4 hours</small>
            <div class="tools">
              <i class="fa fa-edit"></i>
              <i class="fa fa-trash-o"></i>
            </div>
          </li>
          <li class="py-15 px-5 by-1">
            <!-- checkbox -->
            <input type="checkbox" id="basic_checkbox_3" class="filled-in">
            <label for="basic_checkbox_3" class="mb-0 h-15"></label>
            <span class="text-line">Quisque sodales</span>
            <small class="badge bg-warning"><i class="fa fa-clock-o"></i> 1 day</small>
            <div class="tools">
              <i class="fa fa-edit"></i>
              <i class="fa fa-trash-o"></i>
            </div>
          </li>
          <li class="py-15 px-5">
            <!-- checkbox -->
            <input type="checkbox" id="basic_checkbox_4" class="filled-in">
            <label for="basic_checkbox_4" class="mb-0 h-15"></label>
            <span class="text-line">Proin nec mi porta</span>
            <small class="badge bg-success"><i class="fa fa-clock-o"></i> 3 days</small>
            <div class="tools">
              <i class="fa fa-edit"></i>
              <i class="fa fa-trash-o"></i>
            </div>
          </li>
          <li class="py-15 px-5 by-1">
            <!-- checkbox -->
            <input type="checkbox" id="basic_checkbox_5" class="filled-in">
            <label for="basic_checkbox_5" class="mb-0 h-15"></label>
            <span class="text-line">Maecenas scelerisque</span>
            <small class="badge bg-primary"><i class="fa fa-clock-o"></i> 1 week</small>
            <div class="tools">
              <i class="fa fa-edit"></i>
              <i class="fa fa-trash-o"></i>
            </div>
          </li>
          <li class="py-15 px-5">
            <!-- checkbox -->
            <input type="checkbox" id="basic_checkbox_6" class="filled-in">
            <label for="basic_checkbox_6" class="mb-0 h-15"></label>
            <span class="text-line">Vivamus nec orci</span>
            <small class="badge bg-info"><i class="fa fa-clock-o"></i> 1 month</small>
            <div class="tools">
              <i class="fa fa-edit"></i>
              <i class="fa fa-trash-o"></i>
            </div>
          </li>
          <li class="py-15 px-5 by-1">
            <!-- checkbox -->
            <input type="checkbox" id="basic_checkbox_7" class="filled-in">
            <label for="basic_checkbox_7" class="mb-0 h-15"></label>
            <!-- todo text -->
            <span class="text-line">Nulla vitae purus</span>
            <!-- Emphasis label -->
            <small class="badge bg-danger"><i class="fa fa-clock-o"></i> 2 mins</small>
            <!-- General tools such as edit or delete-->
            <div class="tools">
              <i class="fa fa-edit"></i>
              <i class="fa fa-trash-o"></i>
            </div>
          </li>
          <li class="py-15 px-5">
            <!-- checkbox -->
            <input type="checkbox" id="basic_checkbox_8" class="filled-in">
            <label for="basic_checkbox_8" class="mb-0 h-15"></label>
            <span class="text-line">Phasellus interdum</span>
            <small class="badge bg-info"><i class="fa fa-clock-o"></i> 4 hours</small>
            <div class="tools">
              <i class="fa fa-edit"></i>
              <i class="fa fa-trash-o"></i>
            </div>
          </li>
          <li class="py-15 px-5 by-1">
            <!-- checkbox -->
            <input type="checkbox" id="basic_checkbox_9" class="filled-in">
            <label for="basic_checkbox_9" class="mb-0 h-15"></label>
            <span class="text-line">Quisque sodales</span>
            <small class="badge bg-warning"><i class="fa fa-clock-o"></i> 1 day</small>
            <div class="tools">
              <i class="fa fa-edit"></i>
              <i class="fa fa-trash-o"></i>
            </div>
          </li>
          <li class="py-15 px-5">
            <!-- checkbox -->
            <input type="checkbox" id="basic_checkbox_10" class="filled-in">
            <label for="basic_checkbox_10" class="mb-0 h-15"></label>
            <span class="text-line">Proin nec mi porta</span>
            <small class="badge bg-success"><i class="fa fa-clock-o"></i> 3 days</small>
            <div class="tools">
              <i class="fa fa-edit"></i>
              <i class="fa fa-trash-o"></i>
            </div>
          </li>
        </ul>
    </div>
    <!-- /.tab-pane -->
  </div>
</aside>



@endsection --}}


















@extends('admin.admin_master')
@section('admin')
    
<div class="container">
  <div class="row">
    <div class="col-sm-3">
    </div>
    <div class="col-sm-6">
      <div class="card card-profile">
        <div class="card-avatar">
          <a href="javascript:;">
            <img class="rounded-circle" src="{{(!empty($user->image))? url('upload/user_images/'.$user->image):url('upload/user_images/noimage.png')}}" alt="User Avatar">
          </a>
        </div>
        <div class="card-body">
          <h6 class="card-category text-gray">{{ $user->email }}</h6>
          <h5 class="card-category text-gray">{{ $user->name }}</h2>
          <p class="card-description">
            I am developing an awesome school management software
          </p>
          <a href="{{ route('profile.edit') }}" class="btn btn-primary btn-round">Edit Profile</a>
          <h6 class="widget-user-desc">{{ $user->usertype }}</h6>
          <div class="box-footer">
            <div class="row">
              <div class="col-sm-4">
                <div class="description-block">
                  <h5 class="description-header"></h5>
                  <span class="description-text">{{$user->phone}}</span>
                </div>
                <!-- /.description-block -->
              </div>
              <!-- /.col -->
              <div class="col-sm-4 br-1 bl-1">
                <div class="description-block">
                  <h5 class="description-header"></h5>
                  <span class="description-text">{{$user->address}}</span>
                </div>
                <!-- /.description-block -->
              </div>
              <!-- /.col -->
              <div class="col-sm-4">
                <div class="description-block">
                  <h5 class="description-header"></h5>
                  <span class="description-text">{{$user->gender}}</span>
                </div>
                <!-- /.description-block -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-3">
    </div>
  </div>
</div>



@endsection



















  

