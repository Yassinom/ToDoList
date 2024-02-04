<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\TodolistContoller;


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

Route::get('/', [TodolistContoller::class, 'index']);

Route::post('/saveItemRoute', [TodolistContoller::class, 'saveItem'])->name('saveItem');

Route::post('/deleteItemRoute/{id}', [TodolistContoller::class, 'deleteItem'])->name('deleteItem');


Route::get('/db', function() {
    $variable = DB::select("select * from list_items");
    dd($variable);
});











// $var = DB::select("select * from list_items");
//     dd($var);