<?php

namespace App\Http\Controllers;

use App\Car;
use App\Rentlocation;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ManagerentalController extends Controller
{
    public function showallrantal(){
    	$allcars=Car::where('publication',1)->orderBy('car_name','DESC')->get();
        $agentNames=User::all();

    	$rentlocations = Rentlocation::groupBy('location_name')
    	->selectRaw('count(cars) as total_car, location_name')
    	->get();
        if (!empty($rentlocations)) {
            return view('Admin.showallrental',['allcars'=>$allcars,'rentlocations'=>$rentlocations,'agentNames'=>$agentNames]);
        }else{
            return view('Admin.showallrental',['allcars'=>$allcars,'agentNames'=>$agentNames]);
        }
    	
    }

    public function rentlocation(Request $request){

    	$this->validator($request->all())->validate();

    	$car_id=(count($request->cars));
    	for ($i = 0; $i < $car_id ; $i++) {
    		$location=new Rentlocation();
    		$location->location_name=$request->location_name;
    		$location->cars=($request->cars[$i]);
            $location->agent_id=$request->agent_id;
    		$location->rent_phone=$request->rent_phone;
    		$location->rent_address=$request->rent_address;
    		$location->save();	
    	}
    	return redirect()->back()->with('success', 'Rental Location Add Successfully'); 
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
        	'location_name' => ['required','string','max:255','unique:rentlocations,location_name'],
            'cars' => ['required','array'],
        	'agent_id' => ['required'],
        	'rent_phone' => ['required','string'],
        	'rent_address' => ['required','string']
        ]);
    }

    public function showsingerent($location){

    	$singlerentdetalse=Rentlocation::where('location_name',$location)->groupBy('cars')->selectRaw('count(cars) as total_car,cars')->orderBy('updated_at','DESC')->get();
        $singelagentinfo=Rentlocation::where('location_name',$location)->get();
        $agentinfo=$singelagentinfo[0];
        return view('Admin.singlerentlocation',['singlerentdetalse'=>$singlerentdetalse,'location'=>$location,'agentinfo'=>$agentinfo]);
    }

    public function singlecarshow(Request $request){
        $singlerentdetalse=Rentlocation::where('cars',$request->carid)->first();
        $carRental=$singlerentdetalse->replicate();
        $carRental->save();
        return '1';
    }

    public function deleterentcar(Request $request){
        $singlerentdetalse=Rentlocation::where('cars',$request->carid)->first();
        $singlerentdetalse->delete();
        return '0';
    }

    public function deleterentcarfull(Request $request){
        $singlerentdetalse=Rentlocation::where('cars',$request->carid)->get();
        foreach ($singlerentdetalse as $a) {
            $a->delete();
        }
        return '0';
    }
}
