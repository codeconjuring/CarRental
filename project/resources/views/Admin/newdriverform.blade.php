@extends('Admin.include.master')

@section('newdriverform')
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-success lobidrag">
		        <div class="panel-heading">
		            <div class="panel-title">
		                <h4>New Driver Form</h4>
		            </div>
		        </div>
		        <form action="" method="POST" enctype="multipart/form-data" class="form-group" >
		        	@csrf
			        <div class="panel-body">
			        	<div class="panel panel-primary">
			        	    <div class="panel-body">
			        	      <h3 class="text-on-pannel text-primary"><strong class="text-uppercase personal"> Personal Information </strong></h3>
			        	      	<div class="row">
			        	      		<div class="col-md-3 col-md-offset-9">
			        	      				<img class="driver_img" src="" alt="" id="img_url">
			        	      				<input type="file" class="" id="img_file" onChange="img_pathUrl(this);">
			        	      		</div>
			        	      	</div>
			        	      	<div class="row">
			        	      		<div class="col-md-6">

			        	      			<label for="">Surname:</label>
										<input type="text" name="sar_name" required="" placeholder="Surname" class="form-control" >
			        	      		</div>
			        	      		<div class="col-md-6">
			        	      			<label for="">First Name:</label>
										<input type="text" name="first_name" required="" placeholder="First Name" class="form-control" >
			        	      		</div>
			        	      		<div class="col-md-12">
			        	      			<label for="">Address:</label>
			        	      			<textarea name="address" required="" class="form-control" id="" cols="2" rows="2"></textarea>
			        	      		</div>
			        	      		<div class="col-md-6">
			        	      			<label for="">State:</label>
			        	      			<input type="text" name="state" required="" class="form-control" placeholder="State">
			        	      		</div>

			        	      		<div class="col-md-6">
			        	      			<label for="">Postcode:</label>
			        	      			<input type="text" name="postcode" required="" class="form-control" placeholder="Postcode">
			        	      		</div>

			        	      		<div class="col-md-6">
			        	      			<label for="">Telephone Number:</label>
			        	      			<input type="number" name="telephonenumber" required="" class="form-control" placeholder="Postcode">
			        	      		</div>
			        	      		
			        	      	</div>
			        	    </div>
			        	  </div>
			        </div>
		        </form>
		    </div>
		</div>
	</div>
		    

@endsection