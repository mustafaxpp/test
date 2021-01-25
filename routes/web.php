<?php

use App\Http\Controllers\BrandsController;
use App\Http\Controllers\FormValidateController;
use Illuminate\Support\Facades\Route;
use Whoops\Run;

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

// Route::prefix("/brands")->group(function(){

//     Route::get("/" , [BrandsController::class , "index"])->name("brands.index");
//     Route::get("/{add}" , [BrandsController::class , "create"])
//     ->name("brands.create")
//     ->where("add" , "[a-zA-z]{3}");
//     Route::get("/show/{id}" , [BrandsController::class , "show"])->name("brands.show");
//     Route::get("/edit/{id}" , [BrandsController::class , "edit"])->name("brands.edit");
//     Route::get("/destroy/{id}" , [BrandsController::class , "destroy"])->name("brands.destroy");
// });

// Route::prefix("/form")->group( function(){
//     Route::get("/",[FormValidateController::class , "index"]);
//     Route::post("/validate",[FormValidateController::class , "store"]);
// });


Route::prefix("/categories")->group( function(){
    Route::get('/', [FormValidateController::class, "index"])->name("categories.index");
    Route::post('/', [FormValidateController::class, "store"])->name("categories.store");
    Route::get('/delete/{id}', [FormValidateController::class, "destroy"])->name("categories.destroy");
});

Route::prefix("/brands")->group( function(){
    Route::get('/', [BrandsController::class, "index"])->name("brands.index");
    Route::post('/', [BrandsController::class, "store"])->name("brands.store");
    Route::get('/delete/{id}', [BrandsController::class, "destroy"])->name("brands.destroy");
});









