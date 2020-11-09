<?php

use Illuminate\Support\Facades\Route;
use App\Marker;
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

Route::get('/', function (Request $request) {
    $markers=Marker::all();
    $game=$request->session()->get('Game');
    return view('index',compact('markers','game'));
});

Route::get('/startgame','GameController@GameInit');
Route::get('/game','GameController@CheckSession');

Route::get('/task/{id}','GameController@TaskControll');

Route::get('/getmarkers','GameController@GetMarkers');
Route::get('/endgame','GameController@EndGame');
Route::get('/checkcode','GameController@CheckCode');
Route::get('/checkanswer','GameController@CheckAnswer');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
