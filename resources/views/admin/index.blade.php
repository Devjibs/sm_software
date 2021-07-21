{{-- @extends('admin.admin_master')
@section('admin')

    <div class="content-wrapper">
        <div class="container-full">

            <!-- Main content -->
            <section class="content"> 
                <div class="row">
                    <div class="col-xl-3 col-6">
                        <div class="box overflow-hidden pull-up">
                            <div class="box-body">
                                <div class="icon bg-primary-light rounded w-60 h-60">
                                    <i class="text-primary mr-0 font-size-24 mdi mdi-account-multiple"></i>
                                </div>
                                <div>
                                    <p class="text-mute mt-20 mb-0 font-size-16">New Customers</p>
                                    <h3 class="text-white mb-0 font-weight-500">3400 <small class="text-success"><i
                                                class="fa fa-caret-up"></i> +2.5%</small></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-6">
                        <div class="box overflow-hidden pull-up">
                            <div class="box-body">
                                <div class="icon bg-warning-light rounded w-60 h-60">
                                    <i class="text-warning mr-0 font-size-24 mdi mdi-car"></i>
                                </div>
                                <div>
                                    <p class="text-mute mt-20 mb-0 font-size-16">Sold Cars</p>
                                    <h3 class="text-white mb-0 font-weight-500">3400 <small class="text-success"><i
                                                class="fa fa-caret-up"></i> +2.5%</small></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-6">
                        <div class="box overflow-hidden pull-up">
                            <div class="box-body">
                                <div class="icon bg-info-light rounded w-60 h-60">
                                    <i class="text-info mr-0 font-size-24 mdi mdi-sale"></i>
                                </div>
                                <div>
                                    <p class="text-mute mt-20 mb-0 font-size-16">Sales Lost</p>
                                    <h3 class="text-white mb-0 font-weight-500">$1,250 <small class="text-danger"><i
                                                class="fa fa-caret-down"></i> -0.5%</small></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-6">
                        <div class="box overflow-hidden pull-up">
                            <div class="box-body">
                                <div class="icon bg-danger-light rounded w-60 h-60">
                                    <i class="text-danger mr-0 font-size-24 mdi mdi-phone-incoming"></i>
                                </div>
                                <div>
                                    <p class="text-mute mt-20 mb-0 font-size-16">Inbound Call</p>
                                    <h3 class="text-white mb-0 font-weight-500">1,460 <small class="text-danger"><i
                                                class="fa fa-caret-up"></i> -1.5%</small></h3>
                                </div>
                            </div>
                        </div>
                    </div>




                    <div class="col-12">
                        <div class="box">
                            <div class="box-header">
                                <h4 class="box-title align-items-start flex-column">
                                    New Arrivals
                                    <small class="subtitle">More than 400+ new members</small>
                                </h4>
                            </div>
                            <div class="box-body">
                                <div class="table-responsive">
                                    <table class="table no-border">
                                        <thead>
                                            <tr class="text-uppercase bg-lightest">
                                                <th style="min-width: 250px"><span class="text-white">products</span></th>
                                                <th style="min-width: 100px"><span class="text-fade">pruce</span></th>
                                                <th style="min-width: 100px"><span class="text-fade">deposit</span></th>
                                                <th style="min-width: 150px"><span class="text-fade">agent</span></th>
                                                <th style="min-width: 130px"><span class="text-fade">status</span></th>
                                                <th style="min-width: 120px"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="pl-0 py-8">
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-shrink-0 mr-20">
                                                            <div class="bg-img h-50 w-50"
                                                                style="background-image: url(../images/gallery/creative/img-2.jpg)">
                                                            </div>
                                                        </div>

                                                        <div>
                                                            <a href="#"
                                                                class="text-white font-weight-600 hover-primary mb-1 font-size-16">Vivamus
                                                                consectetur</a>
                                                            <span class="text-fade d-block">Pharetra, Nulla , Nec,
                                                                Aliquet</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="text-fade font-weight-600 d-block font-size-16">
                                                        Paid
                                                    </span>
                                                    <span class="text-white font-weight-600 d-block font-size-16">
                                                        $45,800k
                                                    </span>
                                                </td>
                                                <td>
                                                    <span class="text-fade font-weight-600 d-block font-size-16">
                                                        Paid
                                                    </span>
                                                    <span class="text-white font-weight-600 d-block font-size-16">
                                                        $45k
                                                    </span>
                                                </td>
                                                <td>
                                                    <span class="text-fade font-weight-600 d-block font-size-16">
                                                        Sophia
                                                    </span>
                                                    <span class="text-white font-weight-600 d-block font-size-16">
                                                        Pharetra
                                                    </span>
                                                </td>
                                                <td>
                                                    <span class="badge badge-warning-light badge-lg">In Progress</span>
                                                </td>
                                                <td class="text-right">
                                                    <a href="#"
                                                        class="waves-effect waves-light btn btn-info btn-circle mx-5"><span
                                                            class="mdi mdi-bookmark-plus"></span></a>
                                                    <a href="#"
                                                        class="waves-effect waves-light btn btn-info btn-circle mx-5"><span
                                                            class="mdi mdi-arrow-right"></span></a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
					</div>
				</div>
			</section>
		</div>
	</div>
    @endsection --}}























































    @extends('admin.admin_master')
    @section('admin')

        {{-- @include('admin.body.sidebar') --}}
        
            <div class="container-fluid">
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
          
          {{-- @include('admin.body.footer') --}}
    

    @endsection