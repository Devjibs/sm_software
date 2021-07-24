@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>



    <div class="card">
        <div class="card-header card-header-primary">
            <h4 class="card-title">Add Employee</h4>
            <p class="card-category"></p>
        </div>
        <div class="card-body">
				<form method="post" action="{{ route('store.employee.registration') }}" enctype="multipart/form-data">
				@csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group bmd-form-group">
                            <label class="bmd-label-floating">Employee Name</label>
                            <input type="text" name="name" class="form-control" required="">
                          </div>
                        </div>
                
                    <div class="col-md-6">
                        <div class="form-group bmd-form-group">
                            <label class="bmd-label-floating">Father's Name</label>
                            <input type="text" name="fname" class="form-control" required="">
                          </div>
                        </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group bmd-form-group">
                            <label class="bmd-label-floating">Mother's Name</label>
                            <input type="text" name="mname" class="form-control" required="">
                          </div>
                        </div>

                    <div class="col-md-6">
                        <div class="form-group bmd-form-group">
                            <label class="bmd-label-floating">Phone Number</label>
                            <input type="text" name="mobile" class="form-control" required="">
                          </div>
                        </div>
                </div>


                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group bmd-form-group">
                            <label class="bmd-label-floating">Address</label>
                            <input type="text" name="address" class="form-control" required="">
                          </div>
                        </div>

                    <div class="col-md-6">
                        <div class="form-group bmd-form-group">
                            <div class="controls">
							              <select name="gender" id="gender" required="" class="form-control">
                            <option value="" selected="" disabled="">Select Gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                    
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group bmd-form-group">
                            <div class="controls">
                            <select name="religion" id="religion" required="" class="form-control">
                                <option value="" selected="" disabled="">Select Religion</option>
                                <option value="Islam">Islam</option>
                                <option value="Christan">Christan</option>
                                <option value="Hindu">Others</option>
                              </select>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group bmd-form-group">
                            <label class="bmd-label-floating">Salary</label>
                            <input type="text" name="salary" class="form-control" required="">
                          </div>
                        </div>
                      </div>
                      
                      
                      
                      <div class="row">
                        <div class="col-md-6">
                        <div class="form-group bmd-form-group">
                            <label class="">Date of Birth</label>
                            <input type="date" name="dob" class="form-control" required="">
                          </div>
                        </div>

                    <div class="col-md-6">
                        <div class="form-group bmd-form-group">
                      <label class="bmd-label-floating">Designation</label>
                      <div class="controls">
                        <select name="designation_id" required="" class="form-control">
                            <option value="" selected="" disabled=""></option>
                            @foreach($designation as $desi)
                            <option value="{{ $desi->id }}">{{ $desi->name }}</option>
                            @endforeach
                          </select>
                        </div>	
                      </div>
                    </div>
                  </div>



                  <div class="row">
                    <div class="col-md-6">
                        <div class="form-group bmd-form-group">
                            <label class="">Joining Date</label>
                            <input type="date" name="join_date" class="form-control" required="">
                          </div>
                        </div>





                      <div class="input-group mb-3 col-sm-6">
                        <div class="custom-file">
                            <input type="file" name="image" class="custom-file-input" id="image">
                            <label class="custom-file-label" for="inputGroupFile02"></label>
                        </div>
                        <div class="input-group-append">
                            <span class="input-group-text" id=""><img id="showImage"
                                    src="{{ !empty($user->image) ? url('upload/user_images/' . $user->image) : url('upload/user_images/noimage.png') }}"
                                    style="width: 100px; width: 100px;"> </span>
                                  </div>
                                </div>
                              </div>




                  <div class="col-md-6">
                    <button type="submit" class="btn btn-primary pull-right" value="Submit">Add Employee</button>
                              <div class="clearfix"></div>
                  </div>

            </form>

                </div>
              </div>










<script type="text/javascript">
	$(document).ready(function(){
		$('#image').change(function(e){
			var reader = new FileReader();
			reader.onload = function(e){
				$('#showImage').attr('src',e.target.result);
			}
			reader.readAsDataURL(e.target.files['0']);
		});
	});
</script>



@endsection








