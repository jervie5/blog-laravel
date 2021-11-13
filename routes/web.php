<?php

use App\Http\Controllers\UtenteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('layouts.register');
})->middleware(['auth']);

require __DIR__.'/auth.php';

//index blog
Route::get('/blog', [UtenteController::class, 'index']);


//crud
// create

Route::view('/blog/create', 'blog.create');
Route::post('/blog/create', [UtenteController::class, 'store']);


// Update

Route::get('/blog/update/{id}',[UtenteController::class,'edit'])->name('aggiorna-blog')->middleware(['auth']);
Route::post('blog/update/{id}',[UtenteController::class,'update'])->middleware(['auth']);



// delete
Route::get('blog/delete/{id}',[UtenteController::class,'destroy'])->name('elimina-blog')->middleware(['auth']);

