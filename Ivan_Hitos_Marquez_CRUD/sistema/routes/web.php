<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HeroeController;
use App\Http\Controllers\SuperPoderesController;
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
    return view('auth.login');
});
/*
Route::get('/heroes', function () {
    return view('heroes.index');
});
Route::get('/heroes/create', [HeroesController::class,'create']);
*/
Route::resource('heroes', HeroeController::class)->middleware('auth');

Route::resource('super_poderes', SuperPoderesController::class)->middleware('auth');

Auth::routes(['register'=>true,'reset'=>true]);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware'=>'auth'],function(){

    Route::get('/',[ HeroeController::class,'index'])->name('home');

});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('super_poderes/{heroe_id}',function($slug){
    return [SuperPoderesController::class,'show'];
})->name('super_poderes'); 
