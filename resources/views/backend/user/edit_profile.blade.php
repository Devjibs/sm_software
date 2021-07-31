@extends('admin.admin_master')
@section('admin')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <div class="card">
        <div class="card-header card-header-primary">
            <h4 class="card-title">Edit Profile</h4>
            <p class="card-category">Complete your profile</p>
        </div>
        <div class="card-body">
            <form method="post" action="{{ route('profile.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <br><br>
                    <div class="col-md-6">
                        <div class="form-group bmd-form-group">
                            <label class="bmd-label-floating">Username</label>
                            <input type="text" class="form-control" name="name" value="{{ $editData->name }}" required="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group bmd-form-group">
                            <label class="bmd-label-floating">Email address</label>
                            <input type="email" name="email" class="form-control" value="{{ $editData->email }}"
                                required="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group bmd-form-group">
                            <label class="bmd-label-floating">Phone</label>
                            <input type="text" name="mobile" class="form-control" value="{{ $editData->mobile }}"
                                required="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group bmd-form-group">
                            <label class="bmd-label-floating">Address</label>
                            <input type="text" name="address" class="form-control" value="{{ $editData->address }}"
                                required="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        <div class="form-group bmd-form-group">
                            <select name="gender" id="gender" required="" class="form-control">
                                <option value="" selected="" disabled="">Select Gender</option>
                                <option value="Male" {{ $editData->gender == 'Male' ? 'selected' : '' }}>Male</option>
                                <option value="Female" {{ $editData->gender == 'Female' ? 'selected' : '' }}>Female
                                </option>

                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">




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
					<div class="col-md-6">
					<button type="submit" class="btn btn-primary pull-right" value="Update">Update Profile</button>
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





    <script type="text/javascript">
        $(document).ready(function() {
            $('#image').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#showImage').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>
@endsection
