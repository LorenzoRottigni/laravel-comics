<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
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
    $data = config("comics");
    return view('default', [
        "comics" =>$data,
        "info" => false,
        "comic_data" => $data[0],
    ]);
})->name("index");

Route::get('/comic/{id}', function($id){
    $data = config("comics");
    return view('default', [
        "comic_data" => $data[$id],
        "comics" => config("comics"),
        "info" => true
    ]);
})->name("layouts.comics_info");
