<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\RedirectResponse;

class BookmarksAdminController extends Controller
{
    public function index(){
        $response = Http::get('https://vocab-master-api.000webhostapp.com/api/bookmarks/')->json();
        return (view('admin.app.template.index')->with(['route' => 'template.bookmark','data' => $response]));
    }

    public function deleteBookmark($id){
        Http::get('https://vocab-master-api.000webhostapp.com/api/bookmarks/delete/'.$id)->json();
        $response = Http::get('https://vocab-master-api.000webhostapp.com/api/bookmarks/')->json();
        return (view('admin.app.template.index')->with(['route' => 'template.bookmark','data' => $response]));
    }
}
