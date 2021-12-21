<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\States;
use App\Models\Cities;

class LocationController extends Controller
{
    public function index(){
        $cities = Cities::get();
        foreach($cities as $city){
            
            $state = $city->state()->first();

            $city_and_state = $city->name . ' - ' . $state->name;

            return $city_and_state;
            
        }
    }
}
