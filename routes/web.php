<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

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
    return redirect('/login');
});

Route::get('/login', [App\Http\Controllers\LoginController::class, 'index']);
Route::post('/login', 'App\Http\Controllers\LoginController@doLogin');

Route::get('/signup', 'App\Http\Controllers\LoginController@signup');
Route::post('/signup', 'App\Http\Controllers\LoginController@register');

Route::get('/logout','App\Http\Controllers\LoginController@logout');



Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index']);

Route::get('/agent/{id}', [App\Http\Controllers\AgentController::class, 'getAgent']);
Route::get('/campaigns/{id}', [App\Http\Controllers\CampaignController::class, 'index']);
Route::get('/campaign/{user_id}/{campaign_id}', [App\Http\Controllers\CampaignController::class, 'campaign']);

Route::get('/contactLeads/{user_id}', [App\Http\Controllers\ContactController::class, 'index']);

Route::get('/appoinment/{user_id}', [App\Http\Controllers\UpcomingAppoinmentController::class, 'index']);

Route::get('/callHistory/{user_id}', [App\Http\Controllers\CallHistoryController::class, 'index']);

// Route::get('/dashboard', 'DashboardController@index');