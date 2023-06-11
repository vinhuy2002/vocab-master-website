<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TranslateController extends Controller
{
    public function index(){
        return view('translate')->with(['res' => null, 'input' => null]);
    }

    public function transSentences(Request $request){
        $sentences = $request->sentences;
        if ($sentences != null ){
            return $this->transResult($sentences);
        } else {
            return $this->index();
        }
    }

    public function transResultVi(Request $request){
        if ($request->ajax()){
            $query = $request->get('query');
            // $respone = Http::get('https://vocab-master-api.000webhostapp.com/api/translate/'.$query.'/vi')->json();
            $respone = Http::get('https://translation.googleapis.com/language/translate/v2?key=AIzaSyDLj0iPsxyG9EDNAMTZ-MX_CD5jkZc4gN0&q='.$query.'&target=vi');
            $data1 = $respone['data']['translations'][0]['translatedText'];
            $data = array('text' => $data1);
            echo json_encode($data);
        }
    }

    public function transResultEn(Request $request){
        if ($request->ajax()){
            $query = $request->get('query');
            // $respone = Http::get('https://vocab-master-api.000webhostapp.com/api/translate/'.$query.'/vi')->json();
            $respone = Http::get('https://translation.googleapis.com/language/translate/v2?key=AIzaSyDLj0iPsxyG9EDNAMTZ-MX_CD5jkZc4gN0&q='.$query.'&target=en');
            $data1 = $respone['data']['translations'][0]['translatedText'];
            $data = array('text' => $data1);
            echo json_encode($data);
        }
    }
}
