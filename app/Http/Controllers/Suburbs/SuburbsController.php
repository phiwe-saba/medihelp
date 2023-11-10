<?php

namespace App\Http\Controllers\Suburbs;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Suburb;
use Illuminate\Http\Request;

class SuburbsController extends Controller
{
    public function index(){
        return('suburbs.index');
    }

    public function create(){
        $cities = City::all();

        return view('suburb.create', compact('cities'));
    }

    public function store(Request $request, City $city){
        $validateData = $request->validate([
            'name' => 'required|string',
            'postal_code' => 'required|string',
            'city_id' => 'required|exists:cities,id',
        ]);

        //Suburb::create($validateData);

        //dd($validateData);
        Suburb::create($validateData);

        return redirect('suburb.create');
    }
}
