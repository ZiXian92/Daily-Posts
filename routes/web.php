<?php

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

use App\Http\Middleware\GenerateAppState;
use App\State;

Route::post('/register', 'Auth\RegisterController@register');
Route::post('/login', 'Auth\LoginController@login');

Route::get('/{any?}', function(Request $request, State $state) {
  $appstate = $state->asArray();
  return view('layouts.index', ['state' => $appstate]);
})->where('any', '(.*)')->middleware(GenerateAppState::class);
