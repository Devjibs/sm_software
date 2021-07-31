@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.7.6/handlebars.min.js"></script>

<div class="card">
	<div class="card-header card-header-primary">
		<h4 class="card-title"></h4>
		<p class="card-category">Manage Monthly / <strong>Yearly Profit</strong></p>
	</div>
	<div class="card-body">

	<div class="row">
 		<div class="col-md-6 form-group">
		<h5>Start Date <span class="text-danger">*</span></h5>
		<div class="controls">
	 <input type="date" name="start_date" id="start_date" class="form-control" > 
	  </div>
		 
	</div>
	  
  </div> <!-- End Col md 4 --> 

  <div class="row">
  <div class="col-md-6">

 		<div class="form-group">
		<h5>End Date <span class="text-danger">*</span></h5>
		<div class="controls">
	 <input type="date" name="end_date" id="end_date" class="form-control" > 
	  </div>
		 
	</div>
	  
  </div> <!-- End Col md 4 --> 
	</div>
			
 		 


	<div class="row">
		<div class="col-md-6">
		<button id="search" class="btn btn-primary" name="search"> Search</button>

	</div> <!-- End Col md 3 --> 			
			</div><!--  end row --> 


 <!--  ////////////////// Registration Fee table /////////////  -->


 <div class="row">
 	<div class="col-md-12">
 		<div id="DocumentResults">

 	<script id="document-template" type="text/x-handlebars-template">

 	<table class="table table-bordered table-striped" style="width: 100%">
 	<thead>
 		<tr>
        @{{{thsource}}}
 		</tr>
 	 </thead>
 	 <tbody>
 	  
 	 	<tr>
 	 		@{{{tdsource}}}	
 	 	</tr>
 	  
 	 </tbody>
 	</table>
    </script>

    
 			
 		</div> 		
 	</div>
 	
 </div>
 


			       
			</div>


<script type="text/javascript">
  $(document).on('click','#search',function(){
    var start_date = $('#start_date').val(); 
    var end_date = $('#end_date').val();  
     $.ajax({
      url: "{{ route('report.profit.datewais.get')}}",
      type: "get",
      data: {'start_date':start_date,'end_date':end_date},
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























