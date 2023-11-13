<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MedicalAid;
use Illuminate\Http\Request;

class MedicalAidController extends Controller
{
    public function create(){
        return view('admin.medicalaid.create');
    }

    public function store(Request $request){
        $validateData = $request->validate([
            'name' => 'required|string'
        ]);

        MedicalAid::create($validateData);

        return view('/success');
    }
}
