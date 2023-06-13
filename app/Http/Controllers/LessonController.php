<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Redirect;

class LessonController extends Controller
{
    //
    public function index(){
        $response = Http::get('https://vocab-master-api.000webhostapp.com/api/exercises')->json();
        return (view('admin.app.template.index')->with(['route' => 'template.lesson','data' => $response]));
    }

    public function deleteLesson($id){
        Http::get('https://vocab-master-api.000webhostapp.com/api/exercises/delete/'.$id)->json();
        return Redirect::route('adminLesson');
    }

    public function updateLesson(Request $request, $id){
        $lessonNewName = $request->get('lessonNewName');
        Http::post('https://vocab-master-api.000webhostapp.com/api/exercises/update/'.$id, [
            'name_exercise' => $lessonNewName,
        ]);
        return Redirect::route('adminLesson');
    }

    public function addNewLesson(Request $request){
        $name_exercise = $request->get('lessonName');
        Http::post('https://vocab-master-api.000webhostapp.com/api/exercises/add', [
            'name_exercise' => $name_exercise,
        ])->json();
        return Redirect::route('adminLesson');

    }
}
