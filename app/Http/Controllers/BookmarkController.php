<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class BookmarkController extends Controller
{
    public function bookmarkAdd(Request $request){
        if($request->ajax()){
            $id = $request->get('id_user');
            $word = $request->get('word');
            $respone = Http::post('https://vocab-master-api.000webhostapp.com/api/bookmarks/add', [
                'id_user' => $id,
                'word' => $word,
            ])->json();
            echo json_encode($respone);
        }
    }
    public function bookmarkDel(Request $request){
        if($request->ajax()){
            $id = $request->get('id_user');
            $word = $request->get('word');
            $respone = Http::delete('https://vocab-master-api.000webhostapp.com/api/delete/'.$id)->json();
            echo json_encode($respone);
        }
    }
}
