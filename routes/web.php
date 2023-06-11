<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TranslateController;
use App\Http\Controllers\TranslateWordController;
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

// Vocabulary
Route::get('/vocabulary', [TranslateWordController::class, 'index'])->name('vocab.index');
Route::post('/vocabulary', [TranslateWordController::class, 'translate'])->name('vocab.trans');
Route::get('/vocabulary/{word}', [TranslateWordController::class, 'transWord'])->name('vocab.trans.word');

Route::get('/chat-ai', function(){
    return view('chatai');
});

Route::get('/translate', [TranslateController::class, 'index'])->name('trans.index');
Route::get('/translate/action', [TranslateController::class, 'transResultVi'])->name('trans.resultvi');
Route::get('/translate/action1', [TranslateController::class, 'transResultEn'])->name('trans.resulten');
Route::get('/bookmark',function(){
    return view('bookmark');
});

Route::get('/history', function(){
    return view('history');
});


Route::get('/login', [LoginController::class, 'index'])->name('login.index');
Route::post('/login-custom', [LoginController::class, 'login'])->name('login.custom');

Route::get('/register', function(){
    return view('forms.register');
});

Route::post('/register-custom', [RegisterController::class, 'register'])->name('register.custom');

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
