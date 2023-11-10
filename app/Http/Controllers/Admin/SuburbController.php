<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Suburb;
use Illuminate\Http\Request;

class SuburbController extends Controller
{
    public function index(){
        return('suburbs.index');
    }

    public function create(){
        $cities = City::all();

        return view('suburb.create', compact('cities'));
    }

    public function post(Request $request, City $city){
        $validateData = $request->validate([
            'name' => 'required|string',
            'postal_code' => 'required|string',
            'city_id' => 'required'
        ]);

        //Suburb::create($validateData);

        Suburb::create($validateData);

        return redirect('/success');
    }
}
