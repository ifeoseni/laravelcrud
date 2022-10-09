<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\PeopleController;

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
Route::get('location',[LocationController::class,'index']);
Route::get('add-location',[LocationController::class,'add']);
Route::post('save-location',[LocationController::class,'save']);
Route::get('people',[PeopleController::class,'peopleList']);
Route::get('add-people',[PeopleController::class,'addPeople']);
Route::get('edit-people/{id}',[PeopleController::class,'editPeople']);
Route::post('edit-people/',[PeopleController::class,'updatePeople']);
Route::get('delete-people/{id}',[PeopleController::class,'deletePeople']);
Route::post('save-people',[PeopleController::class,'save']);
Route::post('update-people',[PeopleController::class,'updatePeople']);
