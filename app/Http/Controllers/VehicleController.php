<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Vehicle;
use Session;

class VehicleController extends Controller
{

   /**
     * checking for auth 
     * @return void
     */
   public function __construct()
   {
        $this->middleware('auth');
   }
   
   /*
   *
   *index page
   *getting all the records
   *
   */
   public function index()
   {
   		$vehicle = Vehicle::all();
   		return view('vehicle.index')->with('vehicle',  $vehicle);
   }

   /*
   *
   *create record view page
   *
   */
   public function create()
   {
   		return view('vehicle.add');
   }

   /*
   *
   *inserting/store record
   *
   */
   public function store(Request $request)
   {
   	$validator = $this->validate($request, [
		    'name' => 'required|max:255',
		    'contact_number' => 'required|max:10',
		    'email' => 'required|email|max:255',
		    'manufacturer' => 'required|max:255',
		    'type' => 'required|max:30',
		    'year' => 'required|max:4',
		    'colour' => 'required|max:10',
		    'mileage' => 'required|max:10',
		]);

      $vehicle = new Vehicle;
	   	$vehicle->name = $request->name;
	   	$vehicle->contactnumber = $request->contact_number;
	   	$vehicle->email= $request->email;
	   	$vehicle->manufacture= $request->manufacturer;
	   	$vehicle->type= $request->type;
	   	$vehicle->year= $request->year;
	   	$vehicle->colour = $request->colour;
	   	$vehicle->mileage = $request->mileage;
	   	$vehicle->save();
      $request->session()->flash('alert-success', 'Vehicle Details was successful Added!');
	   	return redirect('vehicle');	

   }

   /*
   *
   *show single record
   *
   */
   public function show($id)
   {
   		$vehicle = Vehicle::find($id);
   		return view('vehicle.view')->with('vehicle', $vehicle);
   }

   /*
   *
   *edit record
   *
   */
   public function edit($id)
   {
   		$vehicle = Vehicle::find($id);
   		return view('vehicle.edit')->with('vehicle', $vehicle);
   }

   /*
   *
   *update record
   *
   */
   public function update(Request $request, $id)
   {
         $validator = $this->validate($request, [
             'name' => 'required|max:255',
             'contact_number' => 'required|max:10',
             'email' => 'required|email|max:255',
             'manufacturer' => 'required|max:255',
             'type' => 'required|max:30',
             'year' => 'required|max:4',
             'colour' => 'required|max:10',
             'mileage' => 'required|max:10',
         ]);

   		$vehicle = Vehicle::find($id);
   		$vehicle->name = $request->name;
	   	$vehicle->contactnumber = $request->contact_number;
	   	$vehicle->email= $request->email;
	   	$vehicle->manufacture= $request->manufacturer;
	   	$vehicle->type= $request->type;
	   	$vehicle->year= $request->year;
	   	$vehicle->colour = $request->colour;
	   	$vehicle->mileage = $request->mileage;
	   	$vehicle->save();
      $request->session()->flash('alert-success', 'Vehicle Details was successful updated!');
	   	return redirect()->route('vehicle.index');
   }

   /*
   *
   *delete function
   *soft delete 
   */

   public function destroy(Request $data)
   {

      $task = Vehicle::findOrFail($data->id);
      $task->delete();
      Session::flash('alert-success', 'Vehicle Details was successful deleted!');
      return redirect()->route('vehicle.index');
   }

}
