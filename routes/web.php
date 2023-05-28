<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('pages/index');
});

Route::get("/new-group-order", function () {
    return view("pages/new-order");
});

Route::get("/pop-background", function () {
    return view("pages/pop-background");
});

Route::get("/form", function () {
    return view("booking-form");
});

Route::get("/general-view", function () {
    return view("pages/general-view");
});

Route::get("/summary", function () {
    return view("pages/summary");
});

Route::get("/empty", function () {
    return view("pages/empty");
});
