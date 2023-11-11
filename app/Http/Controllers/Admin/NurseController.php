<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Nurse;
use App\Models\Suburb;
use Illuminate\Http\Request;

class NurseController extends Controller
{
    public function create(){
        $suburbs = Suburb::all();

        return view('admin.nurse.create', compact('suburbs'));
    }

    public function store(Request $request, Suburb $suburb){
        $validateData = $request->validate([
            'name' => 'required|string',
            'surname' => 'required|string',
            'email' => 'required|string',
            'cell_number' => 'required|string',
            'suburb_id' => 'required'
        ]);

        Nurse::create($validateData);

        return view('/success');
    }
}
