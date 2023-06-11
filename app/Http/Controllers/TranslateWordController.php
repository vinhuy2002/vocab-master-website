<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\RedirectResponse;

class TranslateWordController extends Controller
{
    //

    public function transWord($word){
        $respone = Http::get('https://vocab-master-api.000webhostapp.com/api/dictionary/'.$word)->json();
        return view('vocabulary')->with(['data' => $respone, 'word' => $word]);

    }

    public function index(){
        return view('vocabulary')->with(['data' => '', 'word' => null]);
    }

    public function translate(Request $request){
            $word = $request->word;
            if ($word != null){
                return redirect(route('vocab.trans.word',['word' => $word]));
            } else{
                return $this->index();
            }

    }


}
