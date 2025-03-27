<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){
        return view('auth.register');
    }

    public function store(Request $request){
        // dd($request);
        /*
        TODO: Validación usando datos de la base de datos
         $validado = $request->validate([
            'name' => 'required|min:5|max:30',
            'username' => 'required|unique:users|min:3|max:20',
            'email' => 'required|unique:users|email|max:60',
            'password' => 'required|min:6|confirmed',
            'password_confirmation' => 'required|min:6',
        ]);
         */

         $validado = $request->validate([
            'name' => 'required|min:5|max:30',
            'username' => 'required||min:3|max:20',
            'email' => 'required|email|max:60',
            'password' => 'required|min:6|confirmed',
            'password_confirmation' => 'required|min:6',
        ]);

        return response()->json($validado);
    }
}
