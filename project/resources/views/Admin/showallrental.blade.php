@extends('Admin.include.master')


@section('rentalcar')

@if (\Session::has('success'))
    <div class="alert alert-success text-center">
        <ul>
            <li>{!! \Session::get('success') !!}</li>
        </ul>
    </div>
@endif


<div class="row">
	<div class="col-sm-3">
		<!-- Success Panel -->
		<div class="panel panel-primary lobidisable">
		    <div class="panel-heading">
		        <div class="panel-title">
		            <h4>Add Rent Car New Location</h4>
		        </div>
		    </div>
		    <div class="panel-body">
		       <form action="{{ route('rent-car-add') }}" class="form-group" method="post">
		       	@csrf
		       	<div class="col-md-12">
		       		<label for="">Rent Location Name:</label>
		       		<input type="text" placeholder="Rent Location" class="form-control @error('location_name') errormessage @enderror" name="location_name">

		       		@error('location_name')
		       		    <span class="invalid-feedback" role="alert">
		       		        <strong class="text-danger"><p class="error-message">{{ $message }}</p></strong>
		       		    </span>
		       		@enderror
		       	</div>
		       	<div class="col-md-12">
		       		<label for="">Select Car:</label>
		       		<select class="form-control select2 @error('cars') errormessage @enderror"  name="cars[]" multiple="multiple">
		       			@foreach ($allcars as $singlecar)
		       				<option value="{{ $singlecar->id }}">{{ $singlecar->car_name }}</option>
		       			@endforeach
		       		</select>
		       		@error('cars')
		       		    <span class="invalid-feedback" role="alert">
		       		        <strong class="text-danger"><p class="error-message">{{ $message }}</p></strong>
		       		    </span>
		       		@enderror
		       	</div>

		       	<div class="col-md-12">
		       		<label for="">Agent Name:</label>
		       		<select name="agent_id" id="" class="form-control @error('agent_id') errormessage @enderror" >
		       			<option value="">--Select Agent Name--</option>
		       			@foreach ($agentNames as $agentName)
		       				<option value="{{ $agentName->id }}">{{ $agentName->name }}</option>
		       			@endforeach
		       			
		       		</select>

		       		@error('agent_id')
		       		    <span class="invalid-feedback" role="alert">
		       		        <strong class="text-danger"><p class="error-message">{{ $message }}</p></strong>
		       		    </span>
		       		@enderror
		       	</div>

		       	<div class="col-md-12">
		       		<label for="">Phone Number:</label>
		       		<input type="text" placeholder="Phone Number" class="form-control @error('rent_phone') errormessage @enderror" name="rent_phone">

		       		@error('rent_phone')
		       		    <span class="invalid-feedback" role="alert">
		       		        <strong class="text-danger"><p class="error-message">{{ $message }}</p></strong>
		       		    </span>
		       		@enderror
		       	</div>

		       	<div class="col-md-12">
		       		<label for="">Address:</label>
		       		<input type="text" placeholder="Address" class="form-control @error('rent_phone') rent_address @enderror" name="rent_address">

		       		@error('rent_address')
		       		    <span class="invalid-feedback" role="alert">
		       		        <strong class="text-danger"><p class="error-message">{{ $message }}</p></strong>
		       		    </span>
		       		@enderror
		       	</div>

		       	<div class="col-md-12">
		       		<input type="submit" class="btn btn-success btn-block rental-btn" value="Add New Rent Location">
		       	</div>

		       </form>
		    </div>
		    <div class="panel-footer text-center">
				Add Rent Car New Location
		    </div>
		</div>
	</div>
    <div class="col-sm-9">
        <div class="panel panel-success lobidrag">
            <div class="panel-heading">
                <div class="panel-title">
                    <h4>Show All Rent car Information</h4>
                </div>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th>SL.</th>
                                <th>Rent Location Name</th>
                                <th>Car Number</th>
                            </tr>					
                        </thead>
                        <tbody>
                        	<?php $i=1;?>
                        	@foreach ($rentlocations as $rentlocation)
                        		<tr>
                        			<td><?php echo $i++; ?></td>
                        			<td><a href="{{ route('single-rent-location',['loction'=>$rentlocation->location_name ]) }}" >{{ $rentlocation->location_name }}</a></td>
                                	<td>{{ $rentlocation->total_car }}</td>
                               </tr>
                        	@endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection


@section('custom-script')
<script>
	$('#dataTableExample1').DataTable({
		scrollY: 300,
    	// "ajax": "data/arrays.txt"
	});

	$('.select2').select2({
		placeholder: "---Select Rent Car---",
    	allowClear:true
	});
</script>



@endsection