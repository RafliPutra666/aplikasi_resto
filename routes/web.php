<?php

// use App\Http\Controllers\AdminController;
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
    return view('dashboard.dashboardmanager');
});

Route::get('/category', function () {
    return view('category.add');
});

// Route::resource('categories','App\Http\Controllers\CategoryController');
// Route::get('/one', function () {
//     return view('dashboard.dashboardmanager');
// });
//route CRUD