<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/vocabulary', function(){
    return view('vocabulary');
});

Route::get('/chat-ai', function(){
    return view('chatai');
});

Route::get('/translate', function(){
    return view('translate');
});

Route::get('/bookmark',function(){
    return view('bookmark');
});

Route::get('/history', function(){
    return view('history');
});


Route::get('/login', function(){
    return view('forms.login');
});

Route::get('/register', function(){
    return view('forms.register');
});

// After

Route::get('/after', function(){
    return view('afters.indexafter');
});

Route::get('/vocabularyafter', function(){
    return view('afters.vocabularyafter');
});

Route::get('/translateafter', function(){
    return view('afters.translateafter');
});

Route::get('/bookmarkafter',function(){
    return view('afters.bookmarkafter');
});

Route::get('/historyafter', function(){
    return view('afters.historyafter');
});

Route::get('/admin', function(){
    return view('admin.app.index');
});

Route::get('/admin/{url}', [AdminController::class, 'template']);
Route::get('/admin', [AdminController::class, 'index']);
