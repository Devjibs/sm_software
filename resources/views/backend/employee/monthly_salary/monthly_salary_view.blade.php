@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.7.6/handlebars.min.js"></script>



    <div class="card">
        <div class="card-header card-header-primary">
            <h4 class="card-title"></h4>
            <p class="card-category">Employee <strong>Monthly Salary</strong></p>
        </div>
        <div class="card-body">
                <div class="row">
                    <br><br>
                    <div class="col-md-8">
                        <div class="form-group bmd-form-group">
							<label class="">Attendance Date</label>
                            <div class="controls">
								<input type="date" name="date" id="date" class="form-control" > 
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
	<thead>
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






	<script type="text/javascript">
		$(document).on('click','#search',function(){
		  var date = $('#date').val();   
		   $.ajax({
			url: "{{ route('employee.monthly.salary.get')}}",
			type: "get",
			data: {'date':date},
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
	  

































