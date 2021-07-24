@extends('admin.admin_master')
@section('admin')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <div class="card">
        <div class="card-header card-header-primary">
            <h4 class="card-title">Student Year Name</h4>
            <p class="card-category"></p>
        </div>
        <div class="card-body">
          <form method="post" action="{{ route('store.student.year') }}">
	 	@csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group bmd-form-group">
                            <input type="text" name="name" class="form-control" > 
	 @error('name')
	 <span class="text-danger">{{ $message }}</span>
	 @enderror
                        </div>
                    </div>
                </div>

                  <div class="col-md-6">
                    <input type="submit" class="btn btn-primary pull-right" value="Submit">
                              <div class="clearfix"></div>
                  </div>

            </form>

                </div>
              </div>




@endsection
