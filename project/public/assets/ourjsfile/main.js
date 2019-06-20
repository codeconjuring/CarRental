// new car add info
function newcaradd(){
    var carinfo=new FormData($('#car_form')[0]);
    $.ajax({
        url:"/save-car-info",
        type:'POST',
        data:carinfo,
        processData:false,
        cache:false,
        contentType:false,
        success:returnmessage
    })
}

// new car add success function
function returnmessage(event){
    console.log(event);

    if (event.success=='1') {
     console.log('New car add successfully');
     $('#dataTableExample1 > tbody:last-child').append("<tr><td>"+event.car_name+"</td><td>"+event.car_type+"</td><td>"+event.aiccondition+"</td><td>"+event.car_engine+"</td><td>"+event.car_door+"</td><td>"+event.car_sit+"</td><td>"+event.car_image+"</td><td>"+event.publication+"</td><td><a href='' class='btn btn-info btn-xs' ><span class='fa fa-arrow-up'></span></a> <a class='btn btn-success btn-xs' ><span class='fa fa-pencil-square-o'></span></a> <a class='btn btn-danger btn-xs'><span class='fa fa-trash'></span></a> </td></tr>");
     $('.car_name').val('');
     $('.cat_type').val('');
     $('.ac').prop('selectedIndex',0);
     $('.engine').prop('selectedIndex',0);
     $('.door').val('');
     $('.car_sit').val('');
     $('.img-fluid').val(null);
     $('#exampleModal').modal('hide');
    }else{
            if (event['car_name'] != undefined) {
            $('.car_name').addClass('errormessage');
           $('#error-message').html(event['car_name']); 
        }

        if (event['car_type'] != undefined) {
            $('.cat_type').addClass('errormessage');
        }

        if (event['aiccondition'] != undefined) {
            $('.ac').addClass('errormessage');
        }

        if (event['car_engine'] != undefined) {
            $('.engine').addClass('errormessage');
        }

        if (event['car_door'] != undefined) {
            $('.door').addClass('errormessage');
        }

        if (event['car_sit'] != undefined) {
            $('.car_sit').addClass('errormessage');
        }

        if (event['car_image'] != undefined) {
            $('.img-fluid').addClass('errormessage');
        }
    }
}


function showallcarlist(){
    $.ajax({
        url:'/show-all-car',
        type:"GET",
        data:{id:1},
        success:listshow
    })
}
function listshow(event){
    console.log(event);
    $('#showall').html(event);    
}

function publicationcar(id,info){
    $.ajax({
        url:'/car-publication',
        type:"GET",
        data:{id:id,data:info},
        success:function(event){
            if (event=='unpublished') {
             $('#showpublication'+id).html(event);
            }else{
               $('#showpublication'+id).html(event); 
            }
        }
    })
}

function caredite(id){
    var carname=$('#carname'+id).html();
    var cartype=$('#cartype'+id).html();
    var carac=$('#carac'+id).html();
    var carengin=$('#carengin'+id).html();
    var cardoor=$('#cardoor'+id).html();
    var carsit=$('#carsit'+id).html();
    var carimg=$('#carimg'+id).val();
    var showpublication=$('#showpublication'+id).html();

    $('#editecarname').val(carname);
    $('#editecartype').val(cartype);
    $('#editecarac').val(carac);
    $('#editecarengine').val(carengin);
    $('#editecardoor').val(cardoor);
    $('#editecarsit').val(carsit);
    $('#showcarimg').attr('src',carimg);
    $('#rowid').val(id);
}

// update car info
function updatecarlist(){
    var updatecar=new FormData($('#update_car_form')[0]);
    $.ajax({
        url:"/update-car-info",
        type:"POST",
        data:updatecar,
        processData:false,
        contentType:false,
        cache:false,
        success:updatefunction

    })
}

function updatefunction(event){
    console.log(event);
    if (event['update_car_name'] != undefined) {
        $('#editecarname').addClass('errormessage');
       $('#error-message').html(event['car_name']); 
    }

    if (event['update_car_type'] != undefined) {
        $('#editecartype').addClass('errormessage');
    }

    if (event['update_aiccondition'] != undefined) {
        $('#editecarac').addClass('errormessage');
    }

    if (event['update_car_engine'] != undefined) {
        $('#editecarengine').addClass('errormessage');
    }

    if (event['update_car_door'] != undefined) {
        $('#editecardoor').addClass('errormessage');
    }

    if (event['update_car_sit'] != undefined) {
        $('#editecarsit').addClass('errormessage');
    }
    
    $('#carname'+event.id).html(event.car_name);
    $('#cartype'+event.id).html(event.car_type);
    $('#carac'+event.id).html(event.aiccondition);
    $('#carengin'+event.id).html(event.car_engine);
    $('#cardoor'+event.id).html(event.car_door);
    $('#carsit'+event.id).html(event.car_sit);
    // if (event.car_image != null) {
    //     var showimg="{{url('CarImage/"+event.car_image+"')}}";
    //     $('#sowcarimage'+event.id).attr('src',showimg);
    // }
    if (event.publication =='1') {
      $('#showpublication'+event.id).html('published');  
    }else{
       $('#showpublication'+event.id).html('unpublished');   
    } 
}

// delete  single car 
function deletecarinfo(id){
    var id=id;
    console.log(id);
    swal({
      title: "Are you sure want to Delete this car info ?",
      text: "",
      icon: "warning",
      buttons: true,
      dangerMode: true,
    })
    .then((willDelete) => {
      if (willDelete) {
        $.ajax({
            url:"/delete-car",
            type:"GET",
            data:{id:id},
            success:function(event){
                swal('Delete this Car information Successfully','','success',{
                    timer:2000
                });
                $('#fullTablerow'+event.id).html('');
            }
        });
      }
    });
}
// Add single row rent location info
function addMoreCar(id){
    $.ajax({
        url:'/show-singel-rent-car',
        type:"GET",
        data:{carid:id},
        success:function(success){
            if (success=='1') {
                var countcar=$('#countcar'+id).html();
                $('#countcar'+id).html(parseInt(countcar)+1);
            }
        }
    })
}

// Remove car Rental
function incresscar(id){
    $.ajax({
       url:'/delete-singel-rent-car',
       type:"GET",
       data:{carid:id},
       success:function(success){
           if (success=='0') {
               var countcar=$('#countcar'+id).html();
               $('#countcar'+id).html(parseInt(countcar)-1);
               var emptycheck=parseInt(countcar)-1;
               if (emptycheck=='0') {
                $('#showsinglerental'+id).html('');
               }
           }
       } 
    })
}
// Delete Rental Car
function deleterentalcar(id){
    $.ajax({
       url:'/delete-full-rent-car',
       type:"GET",
       data:{carid:id},
       success:function(success){
        if (success=='0') {
           $('#showsinglerental'+id).html(''); 
        }
       } 
   });  
}

// show Driver Image
function img_pathUrl(input){
   $('#img_url')[0].src = (window.URL ? URL : webkitURL).createObjectURL(input.files[0]);
}





