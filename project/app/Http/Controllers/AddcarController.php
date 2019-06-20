<?php

namespace App\Http\Controllers;

use App\Car;
use App\Rentlocation;
use DataTables;
use Illuminate\Database\Eloquent\Relations\paginate;
use Illuminate\Http\Concerns\hasFile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

class AddcarController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function savecarinfo(){
    	$carname=Input::get('car_name');
    	$cartype=Input::get('car_type');
    	$ac=Input::get('aiccondition');
    	$engine=Input::get('car_engine');
    	$door=Input::get('car_door');
    	$sit=Input::get('car_sit');
    	$carimg=Input::file('car_image');

    	// Validation
    	$carvalidator=Validator::make(Input::all(), [
    	     'car_name' => 'required|max:255'
    	 ]);

    	if ($carvalidator->fails()) {
            return $carvalidator->messages();
        }

        $cartype=Validator::make(Input::all(),[
        	'car_type'=>'required'
        ]);

        if ($cartype->fails()) {
            return $cartype->messages();
        }

        $ac=Validator::make(Input::all(),[
        	'aiccondition'=>'required'
        ]);

        if ($ac->fails()) {
            return $ac->messages();
        }

        $engine=Validator::make(Input::all(),[
        	'car_engine'=>'required'
        ]);

        if ($engine->fails()) {
            return $engine->messages();
        }

        $door=Validator::make(Input::all(),[
        	'car_door'=>'required|digits_between:1,10'
        ]);

        if ($door->fails()) {
            return $door->messages();
        }

        $sit=Validator::make(Input::all(),[
        	'car_sit'=>'required'
        ]);

        if ($sit->fails()) {
            return $sit->messages();
        }

        $image=Validator::make(Input::all(),[
        	'car_image'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($image->fails()) {
            return $image->messages();
        }
                $image = Input::file('car_image');
                $name = time().'.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('/CarImage');
                $image->move($destinationPath, $name);

                // Car object
    			$carinfo=new Car();
		        $carinfo->car_name=$carname;    	
		    	$carinfo->car_type=Input::get('car_type');  
		    	$carinfo->aiccondition=Input::get('aiccondition');
		    	$carinfo->car_engine=Input::get('car_engine');
		    	$carinfo->car_door=Input::get('car_door');
		    	$carinfo->car_sit=Input::get('car_sit');
                $carinfo->car_image=$name;
		    	$carinfo->publication=Input::get('publicationStatusValue');
		    	$carinfo->save();
           		return response()->json(['success'=>'1','car_name'=>$carname,'car_type'=>Input::get('car_type'),'aiccondition'=>Input::get('aiccondition'),'car_engine'=>Input::get('car_engine'),'car_door'=>Input::get('car_door'),'car_sit'=>Input::get('car_sit'),'car_image'=>$name,'publication'=>Input::get('publicationStatusValue')]);
    }

        

    public function showallcars(Request $request){

        $allcars=Car::paginate(5);

        if ($request->ajax()) {
            return view('Admin.showallcar',['allcars'=>$allcars])->render();  
        }

        return view('Admin.showallcar',['allcars'=>$allcars]);
        
    }

    public function publicationstatus(Request $request){

        $findcar=Car::find($request->id);
        // return $findcar->publication;
        if ($findcar->publication==1) {
            $findcar->publication=0;
            $findcar->save();
            return 'unpublished';
        }else{
            $findcar->publication=1;
            $findcar->save();
            return 'published';
        }
    }

    public function carinfoupdate(Request $request){

        $carname=Input::get('update_car_name');

        $cartype=Input::get('update_car_type');

        $ac=Input::get('update_aiccondition');

        $engine=Input::get('update_car_engine');

        $door=Input::get('update_car_door');

        $sit=Input::get('update_car_sit');

        $carimage=Input::file('update_car_image');
        
        $id=Input::get('rowid');

            if (!empty($id)) {
                // Validation
                $carvalidator=Validator::make(Input::all(), [
                     'update_car_name' => 'required|max:255'
                 ]);

                if ($carvalidator->fails()) {
                    return $carvalidator->messages();
                }

                $cartype=Validator::make(Input::all(),[
                    'update_car_type'=>'required'
                ]);

                if ($cartype->fails()) {
                    return $cartype->messages();
                }

                $ac=Validator::make(Input::all(),[
                    'update_aiccondition'=>'required'
                ]);

                if ($ac->fails()) {
                    return $ac->messages();
                }

                $engine=Validator::make(Input::all(),[
                    'update_car_engine'=>'required'
                ]);

                if ($engine->fails()) {
                    return $engine->messages();
                }

                $door=Validator::make(Input::all(),[
                    'update_car_door'=>'required|digits_between:1,10'
                ]);

                if ($door->fails()) {
                    return $door->messages();
                }

                $sit=Validator::make(Input::all(),[
                    'update_car_sit'=>'required'
                ]);

                if ($sit->fails()) {
                    return $sit->messages();
                }

                // Car object
                $carinfo=Car::find($id);

                if ($request->hasFile('update_car_image')) {
                    $image = Input::file('update_car_image');
                    $name = time().'.'.$image->getClientOriginalExtension();
                    $destinationPath = public_path('/CarImage');
                    $image->move($destinationPath, $name);

                    $carinfo->car_name=$carname;        
                    $carinfo->car_type=Input::get('update_car_type');  
                    $carinfo->aiccondition=Input::get('update_aiccondition');
                    $carinfo->car_engine=Input::get('update_car_engine');
                    $carinfo->car_door=Input::get('update_car_door');
                    $carinfo->car_sit=Input::get('update_car_sit');
                    $carinfo->car_image=$name;
                    $carinfo->publication=1;
                    $carinfo->save();
                    return response()->json(['id'=>$carinfo->id,'car_name'=>$carname,'car_type'=>Input::get('update_car_type'),'aiccondition'=>Input::get('update_aiccondition'),'car_engine'=>Input::get('update_car_engine'),'car_door'=>Input::get('update_car_door'),'car_sit'=>Input::get('update_car_sit'),'publication'=>'1','car_image'=>$name]);

                }else{
                    $carinfo->car_name=$carname;        
                    $carinfo->car_type=Input::get('update_car_type');  
                    $carinfo->aiccondition=Input::get('update_aiccondition');
                    $carinfo->car_engine=Input::get('update_car_engine');
                    $carinfo->car_door=Input::get('update_car_door');
                    $carinfo->car_sit=Input::get('update_car_sit');
                    $carinfo->publication=1;
                    $carinfo->save();
                    return response()->json(['id'=>$carinfo->id,'car_name'=>$carname,'car_type'=>Input::get('update_car_type'),'aiccondition'=>Input::get('update_aiccondition'),'car_engine'=>Input::get('update_car_engine'),'car_door'=>Input::get('update_car_door'),'car_sit'=>Input::get('update_car_sit'),'publication'=>'1']);
                }
                        
            }else{

                return "0";

                }
     }

     public function deletecarinfo(Request $request){
        $carinfo=Car::find($request->id);
        $carinfo->delete();
        $rentlocation=Rentlocation::where('cars',$request->id);
        $rentlocation->delete(); 
        return response()->json(['id'=>$carinfo->id]);
     }

}
