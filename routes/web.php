<?php
use App\Http\Controllers\student;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/',[basicController::class,"index"]);
// Route::get('/contact',[basicController::class,"contact"])->name('contact');
// Route::get('/login',[basicController::class,"login"])->name('login');


Route::get('/',[student::class,"index"]);