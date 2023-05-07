<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function index(){
        return view('admin.app.template.index')->with('route', 'template.manager');
    }

    public function template($slug) {
        return view('admin.app.template.index')->with('route', 'template.'.$slug);
    }
}
