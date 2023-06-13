<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class RegisterController extends Controller
{
    //
    public function index(){
        return view('forms.register');
    }

    public function register(Request $request){
        $request->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'email' => 'required',
            'password' => 'required|confirmed',
        ]);
        $firstName = $request->firstName;
        $lastName = $request->lastName;
        $email = $request->email;
        $password = $request->password;

        $name = $firstName.' '.$lastName;
        $respone = Http::post('https://vocab-master-api.000webhostapp.com/api/users/add', [
            "name" => $name,
            "email" => $email,
            "password" => $password,
        ]);
        return redirect(route('login.index'));
    }
}
