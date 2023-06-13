<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class LoginController extends Controller
{
    //
    public function index(){
        return view('forms.login');
    }

    public function login(Request $request){
        $request->validate([
            'email' => 'required | email',
            'password' => 'required',
        ]);

        $respone = Http::post('https://vocab-master-api.000webhostapp.com/api/auth/login', [
            "email" => $request->email,
            "password" => $request->password,
        ])->json();

        session(['name' => $respone['user']['name'], 'email ' => $respone['user']['email'], 'id' => $respone['user']['id']]);
        if ($respone['message'] === 'Login successful') {
            return redirect(route('indexpage'));
        }
        return redirect(route('login.index'));
    }

    public function logout(){
        session()->flush();
        return redirect(route('indexpage'));
    }
}
