<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;

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
Route::middleware('auth')->group(function(){
    Route::get('/', [ItemController::class, 'index']);
    
    Route::middleware('isadmin')->group(function(){
        Route::get('/create',[ItemController::class, 'create']);
    
        Route::post('/create', [ItemController::class, 'store']);
    });
});






// Route::get('/create', 'ItemController@create');

// Route::get('/', function () {
//     return view ('index');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
