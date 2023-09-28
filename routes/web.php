<?php

use App\Http\Controllers\Jobapp_Controller;
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
    return view('welcome');
});
//Job Application
Route::get('/jobapplication', [Jobapp_Controller::class, 'form'])->name('jobappform');

Route::post('/submit', [Jobapp_Controller::class, 'submit'])->name('submit');

// Route::post('/submit', function () {
//     return 'successfully registered!!!';
// });
