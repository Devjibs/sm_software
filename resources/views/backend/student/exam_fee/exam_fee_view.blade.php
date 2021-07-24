















































@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.7.6/handlebars.min.js"></script>


    <div class="card">
        <div class="card-header card-header-primary">
            <h4 class="card-title"></h4>
            <p class="card-category">Student <strong>Exam Fee</strong></strong></p>
        </div>
        <div class="card-body">
                <div class="row">
                    <br><br>
                    <div class="col-md-8">
                        <div class="form-group bmd-form-group">
                            <div class="controls">
							<select name="year_id" id="year_id" required="" class="form-control">
									<option value="" selected="" disabled="">Select Year</option>
									@foreach($years as $year)
						<option value="{{ $year->id }}" >{{ $year->name }}</option>
									@endforeach
									
								</select>
							</div>	 
                        </div>
                    </div>
				</div>


			<div class="row">
                    <div class="col-md-8">
                        <div class="form-group bmd-form-group">
						<div class="controls">
						<select name="class_id" id="class_id"  required="" class="form-control">
								<option value="" selected="" disabled="">Select Class</option>
								@foreach($classes as $class)
								<option value="{{ $class->id }}">{{ $class->name }}</option>
								@endforeach
								
							</select>
						</div>		
                        </div>
                    </div>
				</div>





				<div class="row">
                    <div class="col-md-8">
                        <div class="form-group bmd-form-group">
						<div class="controls">
						<select name="exam_type_id" id="exam_type_id"  required="" class="form-control">
								<option value="" selected="" disabled="">Select Exam Type</option>
								@foreach($exam_type as $exam)
								<option value="{{ $exam->id }}">{{ $exam->name }}</option>
								@endforeach
								
							</select>
						</div>		
                        </div>
                    </div>
				</div>



				

					<div class="col-md-6">
					<button class="btn btn-primary" id="search" name="search">search</button>
                    <div class="clearfix"></div>
				</div>
				</div>


                    




			<div class="row">
 	<div class="col-md-12">
 		<div id="DocumentResults">

 	<script id="document-template" type="text/x-handlebars-template">

 	<table class="table table-bordered table-striped">
 	<thead class="text-primary">
 		<tr>
        @{{{thsource}}}
 		</tr>
 	 </thead>
 	 <tbody>
 	 	@{{#each this}}
 	 	<tr>
 	 		@{{{tdsource}}}	
 	 	</tr>
 	 	@{{/each}}
 	 </tbody>
 	</table>
    </script>

    
 			
 		</div> 		
 	</div>
 	
 </div>

        </div><!-- End Col Md-6 -->
    </div>
    </div>


    </div>
    </div>


    </div>
    </div>










<script type="text/javascript">
  $(document).on('click','#search',function(){
    var year_id = $('#year_id').val();
    var class_id = $('#class_id').val();
    var exam_type_id = $('#exam_type_id').val();
     $.ajax({
      url: "{{ route('student.exam.fee.classwise.get')}}",
      type: "get",
      data: {'year_id':year_id,'class_id':class_id,'exam_type_id':exam_type_id},
      beforeSend: function() {       
      },
      success: function (data) {
        var source = $("#document-template").html();
        var template = Handlebars.compile(source);
        var html = template(data);
        $('#DocumentResults').html(html);
        $('[data-toggle="tooltip"]').tooltip();
      }
    });
  });

</script>


@endsection



































