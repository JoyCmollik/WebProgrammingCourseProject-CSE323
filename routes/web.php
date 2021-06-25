<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MobilesController;

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
// here our end point is '/' and we are saying that we want to pull in all the methods that are available in controller
Route::resource('/', MobilesController::class);