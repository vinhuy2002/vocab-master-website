<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HistoryAdminController extends Controller
{
    //
    public function index(){
        $response = Http::get('https://vocab-master-api.000webhostapp.com/api/historys/')->json();
        return view('admin.app.template.index')->with(['route' => 'template.history','data' => $response]);
    }

    public function deleteHistory($id){
        Http::get('https://vocab-master-api.000webhostapp.com/api/historys/delete/'.$id)->json();
        $response = Http::get('https://vocab-master-api.000webhostapp.com/api/historys/')->json();
        return (view('admin.app.template.index')->with(['route' => 'template.history','data' => $response]));
    }

}
