<?php

use App\Http\Controllers\CommercialController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ProspectsController;
use App\Http\Controllers\UserController;
use App\Models\Prospect;
use Illuminate\Support\Facades\Route;

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

//Main route
Route::get('/',function(){
   return view('statistics');
});

Route::get('/register',function(){
   return view('Authentication.register');
});

//getting the clients
Route::get('/prospects',[ProspectsController::class,'show']);

//Showing the ADD PROSPECT Form
Route::get('/prospect/create',[ProspectsController::class,'create']);

//Submitting the form and storing the infos in the database
Route::post('/prospect/store',[ProspectsController::class,'store']);

Route::get('/prospect/{prospect}/edit',[ProspectsController::class,'edit']);

Route::put('/prospect/{prospect}/update',[ProspectsController::class,'update']);

Route::delete('/prospect/{prospect}/delete',[ProspectsController::class,'delete']);
{/* ------------------------------------------------------------------------- */}

// COMMERCIALS

Route::get('/commercial/create',[CommercialController::class,'create']);
Route::post('/commercial/store',[CommercialController::class,'store']);

Route::get('/commercial',[CommercialController::class,'show']);

Route::get('/commercial/{commercial}/edit',[CommercialController::class,'edit']);
Route::put('/commercial/{commercial}/update',[CommercialController::class,'update']);

Route::delete('/commercial/{commercial}/delete',[CommercialController::class,'delete']);
{/* ------------------------------------------------------------------------- */}
Route::post('/login',[UserController::class,'login']);
Route::get('/logout',[UserController::class,'logout']);

{/* ------------------------------------------------------------------------- */}
//getting the products
Route::get('/products',[ProductsController::class,'show']);

//Showing the ADD PRODUCT Form
Route::get('/productCreate',[ProductsController::class,'create']);

//Submitting the form and storing the product infos in the database
Route::post('/productStore',[ProductsController::class,'store']);

//showing the Edit form 
Route::get('/productEdit/{id}',[ProductsController::class,'edit']);

//Submitting the edit and storing the product infos in the database
Route::get('/productUpdate',[ProductsController::class,'update']);



