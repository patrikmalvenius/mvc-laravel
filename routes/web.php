<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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
    return view('home');
})->name('home');

Route::get('/yatzy', function () {
    return view('gameyatzy');
})->name('yatzy');

Route::post('/yatzy', function () {
    if (session("score") == 1) {
        session(["scorebox" => $_POST]);
        session(["score" => 0]);
    } else {
        session(["dicetoroll" => $_POST ?? null]);
    }
    return view('gameyatzy');
});