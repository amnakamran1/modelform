<?php
use App\Http\Controllers\StudentController;
use App\Models\Student;

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
// Route::get('/insert', function () {
//     return view('insert');
// });

Route::get('/insert',[StudentController::class, 'index']);
Route::post('/insert',[StudentController::class, 'store']);

Route::get('delete_recode/{id}',[StudentController::class, 'delete_recode']);


Route::get('insert/edit/{id}',[StudentController::class, 'edit'])->name('insert.edit');
Route::post('insert/update/{id}',[StudentController::class, 'update'])->name('insert.update');

