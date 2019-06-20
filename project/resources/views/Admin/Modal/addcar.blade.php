{{-- Add car modal strar --}}
<div id="exampleModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="costumModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                            ×
                        </button>
                        <h4 class="modal-title">
                            Add Car Information
                        </h4>
                    </div>
                    <form class="" id="car_form" action="" method="POST" enctype="multipart/form-data">
                        @csrf
                    <div class="modal-body">
                        
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="">Car Name:</label>
                                    <input type="text" class="form-control car_name" name="car_name" placeholder="Car Name" required="">

                                    {{-- <div class="has-danger">
                                        <label class="form-check-label" id="error-message">
                                        </label>
                                    </div> --}}
                                </div>

                                <div class="col-md-6">
                                    <label for="">Car type:</label>
                                    <input type="text" class="form-control cat_type" name="car_type" placeholder="Car type" required="">
                                </div>

                                <div class="col-md-6">
                                    <label for="">Airconditing type</label>
                                    <select class="form-control ac" name="aiccondition" id="" required="">
                                        <option value="">---Select Car airconditing---</option>
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>
                                </div>

                                <div class="col-md-6">
                                    <label for="">Car Engine</label>
                                    <select class="form-control engine" name="car_engine" id="">
                                        <option value="">---Select Car Engine Type---</option>
                                        <option value="Gasoline">Gasoline</option>
                                        <option value="Diesel fuel">Diesel fuel</option>
                                        <option value="Liquified Petroleum">Liquified Petroleum</option>
                                        <option value="Compressed Natural Gas">Compressed Natural Gas</option>
                                        <option value="Ethanol">Ethanol</option>
                                        <option value="Bio-diesel">Bio-diesel</option>
                                    </select>
                                </div>

                                <div class="col-md-6">
                                    <label for="">How Many Door:</label>
                                    <input type="number" class="form-control door" name="car_door" placeholder="Door">
                                </div>

                                <div class="col-md-6">
                                    <label for="">Number of Sit:</label>
                                    <input type="number" class="form-control car_sit" name="car_sit" placeholder="Set">
                                </div>

                                <div class="col-md-6">
                                    <label for="">Publication Status:</label>
                                    <div class="socialmediaside2 publicationstatus">
                                        <select class="form-control" name="publicationStatusValue">
                                            <option value="1" selected="" >Published</option>
                                            <option value="0">Unpublished</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <label for="">Select Image:</label>
                                    <div class="socialmediaside2">
                                        <input class="fileUpload img-fluid" accept="image/jpeg, image/jpg" name="car_image" type="file" value="Choose a file">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <input type="button" onclick="newcaradd();" class="btn btn-block btn-success" value="Add new car">
                                </div>
                            </div>
                        
                    </div>
                    <div class="modal-footer">
                    </div>
                </form>
                </div>
            </div>
</div>

{{-- car End modal end --}}
{{-- Edite car modal start --}}


<div id="editecarmodal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="costumModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                            ×
                        </button>
                        <h4 class="modal-title">
                            Edite Car Information
                        </h4>
                    </div>
                    <form  id="update_car_form" action="" method="POST" enctype="multipart/form-data">
                        @csrf
                    <div class="modal-body">
                        
                        {{-- hidden input row id --}}
                            <input type="hidden" value="" name="rowid" id="rowid">

                            <div class="row">
                                <div class="col-md-6">
                                    <label for="">Car Name:</label>
                                    <input type="text" class="form-control" id="editecarname" name="update_car_name" placeholder="Car Name" required="">

                                    {{-- <div class="has-danger">
                                        <label class="form-check-label" id="error-message">
                                        </label>
                                    </div> --}}
                                </div>

                                <div class="col-md-6">
                                    <label for="">Car type:</label>
                                    <input type="text" class="form-control" id="editecartype" name="update_car_type" placeholder="Car type" required="">
                                </div>

                                <div class="col-md-6">
                                    <label for="">Airconditing type</label>
                                    <select class="form-control ac" name="update_aiccondition" id="editecarac" required="">
                                        <option value="">---Select Car airconditing---</option>
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>
                                </div>

                                <div class="col-md-6">
                                    <label for="">Car Engine</label>
                                    <select class="form-control engine" name="update_car_engine" id="editecarengine">
                                        <option value="">---Select Car Engine Type---</option>
                                        <option value="Gasoline">Gasoline</option>
                                        <option value="Diesel fuel">Diesel fuel</option>
                                        <option value="Liquified Petroleum">Liquified Petroleum</option>
                                        <option value="Compressed Natural Gas">Compressed Natural Gas</option>
                                        <option value="Ethanol">Ethanol</option>
                                        <option value="Bio-diesel">Bio-diesel</option>
                                    </select>
                                </div>

                                <div class="col-md-6">
                                    <label for="">How Many Door:</label>
                                    <input type="number" class="form-control door" id="editecardoor" name="update_car_door" placeholder="Door">
                                </div>

                                <div class="col-md-6">
                                    <label for="">Number of Sit:</label>
                                    <input type="number" class="form-control car_sit" id="editecarsit" name="update_car_sit" placeholder="Set">
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group hirehide is-empty is-fileinput width100">
                                        <div class="socialmediaside2">
                                            <input class="fileUpload img-fluid" accept="image/jpeg, image/jpg" name="update_car_image" type="file" value="Choose a file">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group hirehide is-empty is-fileinput width100">
                                        <div class="socialmediaside2">
                                            <img id="showcarimg" width="100" height="50" src="" alt="">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <input type="button" onclick="updatecarlist();" class="btn btn-block btn-success" value="Update car info">
                                </div>
                            </div>
                        
                    </div>
                    <div class="modal-footer">
                    </div>
                </form>
                </div>
            </div>
</div>
{{-- Edite car modal end--}}


{{-- show details single Rent car location start --}}

<div id="singelRental" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="costumModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                            ×
                        </button>
                        <h4 class="modal-title">
                            Show Single Rente Car Details
                        </h4>
                    </div>
                    <div class="modal-body">
                        <div class="text-center text-primary">
                            <h4 class="">Location Name: Mirpur-2</h4>
                            <p>Phome: 01722159546</p>
                            <h5>Address: Dhaka</h5>
                        </div>

                        
                        

                           
                        
                    </div>
                    <div class="modal-footer">
                    </div>
                </div>
            </div>
        </div>
{{-- show details single Rent car location end --}}