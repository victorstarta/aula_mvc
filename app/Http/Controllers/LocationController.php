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

    public function showState($id){
        $state = States::find($id);
        return $state;
    }

    public function store(Request $request){

        // Acessar UM INPUT do request return $request->input('sigla');

        // jeito fácil
        $estados = States::create($request->all());
        return $estados;

        // jeito difícil
        // $estados = States::create([
        //     'name' => $request->input('zezinho_name'),
        //     'abbreviation' => $request->input('zezinho_abbreviation')
        // ]);
        return $estados;
    }

    public function states(){
        $states = States::get();
        return view('estados', ['estados' => $states]);
    }
}
