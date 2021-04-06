<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\TeamsController;
use App\Http\Controllers\GamesController;

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

//Route Home
Route::get('/', function(){
    return view('home');
});

//Route login
Route::get('login', [Controller::class, 'loginForm']);
Route::post('login', [Controller::class, 'check']);

//Route register
Route::get('register', [Controller::class, 'registerForm']);
Route::post('register', [Controller::class, 'store']);

//Route recover password
Route::get('password', [Controller::class, 'passwordForm']);
Route::post('password', [Controller::class, 'recover']);

//Routes Teams
Route::prefix('teams')->group(function () {
    Route::get('/', [TeamsController::class, 'index']);

    //Routes create
    Route::prefix('create')->group(function () {
        Route::get('/', [TeamsController::class, 'createForm']);
        Route::post('/', [TeamsController::class, 'create']);
    });

    //Route show team
    Route::get('show/{id}', [TeamsController::class, 'show']);

    //Routes update
    Route::prefix('edit/{id}')->group(function () {
        Route::get('/', [TeamsController::class, 'editForm']);
        Route::put('/', [TeamsController::class, 'edit']);
    });

    //Routes delete
    Route::delete('delete/{id}', [TeamsController::class, 'delete']);
});


//Routes games
Route::prefix('games')->group(function () {
    Route::get('/', [GamesController::class, 'index']);

    //Routes create
    Route::prefix('create')->group(function () {
        Route::get('/', [GamesController::class, 'createForm']);
        Route::post('/', [GamesController::class, 'create']);
    });

    //Route show team
    Route::get('show/{id}', [GamesController::class, 'show']);

    //Routes update
    Route::prefix('edit/{id}')->group(function () {
        Route::get('/', [GamesController::class, 'editForm']);
        Route::put('/', [GamesController::class, 'edit']);
    });

    //Routes delete
    Route::delete('delete/{id}', [GamesController::class, 'delete']);
});



//Route página error 404
Route::get('error404', function(){
    return view('error404');
});
