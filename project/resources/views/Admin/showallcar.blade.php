<div class="panel panel-bd lobidrag">
    <div class="panel-heading">
        <div class="panel-title">
            <h4 class="text-center">Show all Car List</h4>
        </div>
    </div>
    <div class="panel-body">
        <div class="table-responsive">
         @if (count($allcars) > 0)
            <table id="dataTableExample1" class="table table-bordered table-striped table-hover">
                <thead>
                    <tr>
                       
                        <th>Car Name</th>
                        <th>Car Type</th>
                        <th>AC</th>
                        <th>Car Engine</th>
                        <th>Door</th>
                        <th>Sit</th>
                        <th>Image</th>
                        <th>Publication</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i=1; ?>
                    @foreach ($allcars as $car)
                    <tr id="fullTablerow{{ $car->id }}">
                        <input type="hidden" value="{{ url('CarImage/').'/'.$car->car_image }}" id="carimg{{ $car->id }}">
                        <td id="carname{{ $car->id }}">{{ $car->car_name }}</td>
                        <td id="cartype{{ $car->id }}">{{ $car->car_type }}</td>
                        <td id="carac{{ $car->id }}">{{ $car->aiccondition }}</td>
                        <td id="carengin{{ $car->id }}">{{ $car->car_engine }}</td>
                        <td id="cardoor{{ $car->id }}">{{ $car->car_door }}</td>
                        <td id="carsit{{ $car->id }}">{{ $car->car_sit }}</td>
                        <td width="9%" id="carimg{{ $car->id }}">
                            <img id="sowcarimage{{ $car->id }}" class="table-img" src="{{ url('CarImage/').'/'.$car->car_image }}" alt="">
                        </td>
                        <td id="showpublication{{ $car->id }}">{{ $car->publication===1? "published":"unpublished" }}</td>
                        <td>
                            <a href="javascript:void(0)"  class="btn btn-info btn-xs" id="{{ $car->id }}" onclick="publicationcar(this.id,{{ $car->publication }})" ><span class="fa fa-arrow-up"></span> </a>
                            <a href="javascript:void(0)" data-toggle="modal" data-target="#editecarmodal" id="{{$car->id}}" onclick="caredite(this.id);" class="btn btn-success btn-xs" id="editcar" ><span class="fa fa-pencil-square-o"></span></a>
                            <a href="javascript:void(0)" id="{{ $car->id }}" onclick="deletecarinfo(this.id);" class="btn btn-danger btn-xs" id="deleteCategory"><span class="fa fa-trash"></span></a>
                        </td>
                    </tr>
                    @endforeach
                    
                </tbody>
            </table>
            {{$allcars->links()}}
        @endif
        </div>
    </div>
</div>