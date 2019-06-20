@extends('Admin.include.master')

@section('singlerentdetails')
	
	<div class="row">
		<div class="col-sm-6 col-md-offset-3">
		    <div class="panel panel-success lobidrag">
		        <div class="panel-heading">
		            <div class="panel-title">
		                <h4>Rent Loction Name: {{ $location }}</h4>
		            </div>
		        </div>
		        <div class="panel-body">
		        	<h4 class="text-center">Agent Name: {{ $agentinfo->agent->name }}</h4>
		        	<h4 class="text-center">Email: {{ $agentinfo->agent->email }}</h4>
		        	<h4 class="text-center">Phone: {{ $agentinfo->rent_phone }}</h4>
		          <div class="table-responsive">
		              <table id="dataTableExample1" class="table table-bordered table-striped table-hover">
		                  <thead>
		                      <tr>
	                          	<th>SL.</th>
	                          	<td>Car Name</td>
	          					<td>Number of cars</td>
	          					<td>Actions</td>
		                      </tr>					
		                  </thead>
		                  <tbody>
		                      	<?php $i=1; ?>
								@foreach ($singlerentdetalse as $e)
									<tr id="showsinglerental{{ $e->cars }}">
										<td><?php echo $i++; ?></td>
										<td>{{ $e->car->car_name}}</td>
										<td id="countcar{{ $e->cars }}">{{ $e->total_car }}</td>
										<td>
											<a title="Add More Car" onclick="addMoreCar(this.id);" href="javascript:void(0)"  id="{{ $e->cars }}" class="btn btn-primary btn-xs" ><span class="fa fa-plus"></span></a>
											<a title="Remove Car" href="javascript:void(0)" onclick="incresscar(this.id);" id="{{ $e->cars }}" class="btn btn-info btn-xs" ><span class="fa fa-minus"></span></a>
											<a title="Delete Car" href="javascript:void(0)" onclick="deleterentalcar(this.id);" id="{{ $e->cars }}" class="btn btn-danger btn-xs"><span class="fa fa-trash-o"></span></a>
										</td>
									</tr>
								@endforeach
		                  </tbody>
		              </table>
		          </div>
		        </div>
		    </div>
		</div>
		<div class="col-md-1 col-md-offset-2">
			<a href="{{ route('rent-car-add') }}" class="btn btn-primary"><span class="fa fa-arrow-left"></span> Back</a>
		</div>
	</div>
@endsection