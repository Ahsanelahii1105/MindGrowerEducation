<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\WebsiteController;
use App\Models\subject;

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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        if(Auth::User()->role==1){
            return view('admin.index');
        }else{
            $subjects = subject::all();
            return view('index' , compact('subjects'));
        }
    })->name('dashboard');
});


// navbar 

Route::get('/' , [WebsiteController::class , 'index']);

Route::get('/subject', function () {
    return view('subject');
});

Route::get('/courses', function () {
    return view('courses');
});

Route::get('/faculty', function () {
    return view('faculty');
});

Route::get('/contact', function () {
    return view('contact');
});


Route::get('/chat', function () {
    return view('chat');
});


Route::get('/work', function () {
    return view('work');
});

Route::get('/terms_condition', function () {
    return view('terms_condition');
});



//-------------Routes By TH for Inserting Data-------------
Route::get('/admin/home' , [AdminController::class , 'index']);

Route::get('/admin/insertsubject' , [AdminController::class , 'create']);
Route::post('/admin/insertsubject' , [AdminController::class , 'store']);