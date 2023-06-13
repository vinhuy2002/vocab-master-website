<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{

    public function index(){
        $respone = Http::get('https://vocab-master-api.000webhostapp.com/api/users')->json();
        return view('admin.app.template.index')->with(['route' => 'template.manager', 'data' => $respone]);
    }
    public function addUser(Request $request){
        $name = $request->get('name');
        $email = $request->get('email');
        $password = $request->get('password');
        Http::post('https://vocab-master-api.000webhostapp.com/api/users/add', [
            'name' => $name,
            'email' => $email,
            'password' => $password,
        ])->json();
        return Redirect::route('adminManager');
    }
    public function deleteUser($id){
        Http::get('https://vocab-master-api.000webhostapp.com/api/users/delete/'.$id)->json();
        return Redirect::route('adminManager');
    }

    public function updateUser(Request $request, $id){
        $name = $request->get('name');
        $email = $request->get('email');
        $password = $request->get('password');
        Http::post('https://vocab-master-api.000webhostapp.com/api/users/update/'.$id, [
            'name' => $name,
            'email' => $email,
            'password' => $password,
        ]);
        return Redirect::route('adminManager');
    }
}
