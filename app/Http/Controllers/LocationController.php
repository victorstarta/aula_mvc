<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\States;
use App\Models\Cities;

class LocationController extends Controller
{
    public function index(){
        dd(States::get());
    }
}
