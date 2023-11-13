<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Suburb;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /*public function create(){
        $suburbs = Suburb::all();

        return view('admin.nurse.create', compact('suburbs'));
    }*/

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'surname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'cell_number' => ['required', 'string', 'max:255'],
            'id_number' => ['required', 'string', 'min:13'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'address_line1' => ['required', 'string'],
            'address_line2' => ['required', 'string'],
            'suburb_id' => ['required', 'exists:suburbs, id']
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        $suburbs = Suburb::all();
        return User::create([
            'name' => $data['name'],
            'surname' => $data['surname'],
            'email' => $data['email'],
            'cell_number' => $data['cell_number'],
            'id_number' => $data['id_number'],
            'password' => Hash::make($data['password']),
            'address_line1' => $data['address_line1'],
            'address_line2' => $data['address_line2'],
            'suburb_id' => $data['suburb_id']
        ]);
    }
}
