<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ItemController;
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

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/home', [HomeController::class,'index']);

Route::get('/dashboard', [HomeController::class,'index'])->name('dashboard');

//to customer save data
Route::POST('/customers/save', [CustomerController::class,'saveData'])->name('customer.save');

//to item save data
Route::POST('/items/save', [ItemController::class,'saveItemData'])->name('item.save');

Route::get('item/{id}/deleteitem', [ItemController::class,'deleteitem'])->name('item.deleteitem');

Route::get('item/{id}/updateitem', [ItemController::class,'updateitem'])->name('item.updateitem');

Route::POST('item/{id}/edit', [ItemController::class,'edititem'])->name('item.edit');

Route::get('showitem', [ItemController::class,'showitemData']);
Route::get('showcustomer', [ItemController::class,'showcustomerData']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
