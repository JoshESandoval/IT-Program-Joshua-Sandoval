<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ManufactureController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\EquiptmentController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\SpecController;

use App\Models\Manufacture;
use App\Models\Customer;
use App\Models\Equiptment;
use App\Models\Invoice;
use App\Models\Note;
use App\Models\Spec;

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

Route::get('/createEquiptment', function () {
    $manufactures = Manufacture::all();
    return view('createEquiptment', compact('manufactures'));
});

Route::resource('/manufactures', ManufactureController::class); 
Route::resource('/customers', CustomerController::class);
Route::resource('/equiptments', EquiptmentController::class);
Route::resource('/invoices', InvoiceController::class);
Route::resource('/notes', NoteController::class);
Route::resource('/specs', SpecController::class);

Route::get('/db-test', function () {
    try {         
         echo \DB::connection()->getDatabaseName();     
    } catch (\Exception $e) {
          echo 'None';
    }
});

Route::get('/db-refresh', function () {
    Artisan::call('migrate:reset');
    echo Artisan::output();
});

Route::get('/db-migrate', function () {
    Artisan::call('migrate');
    echo Artisan::output();
});