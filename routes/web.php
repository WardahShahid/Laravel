<?php
use App\Http\Controllers\RestController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CustomAuth;

//Route::get('/', function () {
  //  return view('welcome');
//});

Route::group(['middleware' => CustomAuth::class], function () {
 
Route::get('/',[RestController::class,'home']);

Route::get('/list',[RestController::class,'list']);

Route::get('/delete/{id}',[RestController::class,'delete']);

Route::get('/edit/{id}',[RestController::class,'edit']);

Route::post('/edit',[RestController::class,'update']);

Route::post('/add',[RestController::class,'add']);

Route::post('/register',[RestController::class,'register']);

Route::post('/login',[RestController::class,'login']);

Route::view('add','Add');

Route::view('register','register');

Route::view('login','login');

});