<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Vehicle;
class PrintController extends Controller
{

	/**
     * Create a new controller instance.
     *
     * @return void
     */
   public function __construct()
   {
       $this->middleware('auth');
   }

   public function show($id)
   {
   		$vehicle = Vehicle::find($id);
   		return view('vehicle.print')->with('vehicle', $vehicle);
   }
}
