<?php

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

Route::get('/', function () {
    if(Auth::id())
    {
        return view('home.home');
    }
    else
    {
        return view('auth.login');
    }
});


//category routes
Route::get('/all-category', [
    "uses"        => "App\Http\Controllers\CategoryController@index",
    "as"          => "category",
]);
Route::post('/category/new-category', [
    "uses"        => "App\Http\Controllers\CategoryController@create",
    "as"          => "new-category",
]);
Route::get('/change-category-status/{id}', [
    "uses"        => "App\Http\Controllers\CategoryController@changeCategoryStatus",
    "as"          => "change-category-status",
]);
Route::get('/get-category-info-by-id/{id}', [
    "uses"        => "App\Http\Controllers\CategoryController@getCategoryInfoById",
    "as"          => "get-category-info-by-id",
]);
Route::post('/update-category-info', [
    "uses"        => "App\Http\Controllers\CategoryController@updateCategoryInfo",
    "as"          => "update-category-info",
]);
Route::post('/delete-category-info', [
    "uses"        => "App\Http\Controllers\CategoryController@deleteCategoryInfo",
    "as"          => "delete-category-info",
]);


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    //return view('dashboard');
    return view('home.home');
})->name('dashboard');
