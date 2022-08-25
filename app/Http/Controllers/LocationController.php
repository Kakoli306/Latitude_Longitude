<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Location;

class LocationController extends Controller
{
    public function index(){
        return view('home');
    }

    public function store(Request $request){

        Location::create([
            'latitude'=>$request->lat,
            'longitude'=>$request->lng
        ]);
        return view('home');
    }
}
