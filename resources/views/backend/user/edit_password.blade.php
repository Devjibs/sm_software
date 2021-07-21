@extends('admin.admin_master')
@section('admin')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <div class="card">
        <div class="card-header card-header-primary">
            <h4 class="card-title"></h4>
            <p class="card-category">Change your password</p>
        </div>
        <div class="card-body">
            <form method="post" action="{{ route('password.update') }}">
				@csrf
                <div class="row">
                    <br><br>
                    <div class="col-md-8">
                        <div class="form-group bmd-form-group">
                            <label class="bmd-label-floating">Current Password</label>
                            <input type="password" name="oldpassword" id="current_password"
							class="form-control">
						@error('oldpassword')
							<span class="text-danger">{{ $message }}</span>
						@enderror
                        </div>
                    </div>
				</div>


			<div class="row">
                    <div class="col-md-8">
                        <div class="form-group bmd-form-group">
                            <label class="bmd-label-floating">New Password</label>
                            <input type="password" name="password" id="password"
						class="form-control">
					@error('password')
						<span class="text-danger">{{ $message }}</span>
					@enderror
                        </div>
                    </div>
			</div>


			<div class="row">
				<div class="col-md-8">
					
				</div>
		</div>

			<div class="row">
					<div class="col-md-8">
						<div class="form-group bmd-form-group">
							<label class="bmd-label-floating">Confirm Password</label>
					<input type="password" name="password_confirmation"
							id="password_confirmation" class="form-control">
						@error('password_confirmation')
							<span class="text-danger">{{ $message }}</span>
						@enderror
					</div>
				</div>
                </div>


				



					<div class="col-md-6">
					<button type="submit" class="btn btn-primary pull-right" value="Submit">Change Password</button>
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



@endsection



































