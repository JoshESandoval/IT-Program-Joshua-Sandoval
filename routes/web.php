<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ManufactureController;
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


Route::get('/createEquiptment', function() {
    return view('createEquiptment');
});

Route::get('/createManufacture', function() {
    return view('createManufacture');
});


Route::get('/manufactures', ManufactureController::Class); 

Route::get('/db-test', function () {
    try {         
         echo \DB::connection()->getDatabaseName();     
    } catch (\Exception $e) {
          echo 'None';
    }
});

Route::get('/db-migrate', function () {
    Artisan::call('migrate');
    echo Artisan::output();
});