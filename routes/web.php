<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookmarkController;
use App\Http\Controllers\BookmarksAdminController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\HistoryAdminController;
use App\Http\Controllers\LessonController;
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
})->name('indexpage');

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

// Bookmark
Route::get('/bookmark-add', [BookmarkController::class, 'bookmarkAdd'])->name('bookmarkAdd');
Route::get('/bookmark-del', [BookmarkController::class, 'bookmarkDel'])->name('bookmarkDel');


Route::get('/login', [LoginController::class, 'index'])->name('login.index');
Route::post('/login-custom', [LoginController::class, 'login'])->name('login.custom');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

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

// Manager Account
Route::get('/admin/manager', [AdminController::class, 'index'])->name('adminManager');
Route::post('/admin/manager/add', [AdminController::class, 'addUser'])->name('adminAddUser');
Route::get('/admin/manager/delete/{id}', [AdminController::class, 'deleteUser']);
Route::post('/admin/manager/update/{id}', [AdminController::class, 'updateUser']);
// Bookmark admin
Route::get('/admin/bookmarks', [BookmarksAdminController::class, 'index'])->name('adminBookIndex');
Route::get('/admin/bookmarks/delete/{id}', [BookmarksAdminController::class, 'deleteBookmark']);

// History
Route::get('/admin/history', [HistoryAdminController::class, 'index'])->name('adminHistoryIndex');
Route::get('/admin/history/delete/{id}', [HistoryAdminController::class, 'deleteHistory']);
Route::post('/addHistory', [HistoryAdminController::class, 'addHistory'])->name('addHistory');

// Lesson
Route::get('/admin/lesson', [LessonController::class, 'index'])->name('adminLesson');
Route::get('/admin/lesson/delete/{id}', [LessonController::class, 'deleteLesson']);
Route::post('/admin/lesson/add', [LessonController::class, 'addNewLesson'])->name('addNewLesson');
Route::post('/admin/lesson/update/{id}', [LessonController::class, 'updateLesson']);

