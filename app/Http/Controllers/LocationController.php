<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Location;

class LocationController extends Controller
{
    public function index(){
        $data = Location::get();
        return view('location',compact('data'));
    }
    public function add(){
        return view('add-location');
    }

    public function save(Request $request){
        $request->validate([
            'state' => 'required',
            'neighbourhood' => 'required'
        ]);
        
        $addLocation = new Location();
        $addLocation->state = $request->state;
        $addLocation->neighbourhood = $request->neighbourhood;
        $addLocation->save();
    }
}
