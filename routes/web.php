<?php
use App\Http\Controllers\ClasseController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/classe',  [ClasseController::class, 'vu']);
Route::post('/classe', [ClasseController::class, 'enregistrer']);
Route::post('/supprimer', [ClasseController::class, 'enregistrer']);
