<?php

use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ProspectsController;
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
   return view('main');
});

//getting the clients
Route::get('/clients',[ProductsController::class,'show']);

//Showing the ADD CLIENT Form
Route::get('/create',[ProspectsController::class,'create']);

//Submitting the form and storing the infos in the database
Route::post('/store',[ProspectsController::class,'store']);

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



