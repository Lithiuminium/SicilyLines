<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FerryController;
use App\Http\Controllers\EquipementController;
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
    return view('accueil');
});

Route::get('/pdf', [FerryController::class,'creerPDF'])->name("pdf");


//Route::get('/ferry',[FerryController::Class,"index"]);
Route::middleware('auth')->group(function () {
Route::resource('ferry',FerryController::class);
});

Route::resource('equipement',EquipementController::class);
//Route::get('/ferry', function () { 
//    return view('ferry');
//})->middleware(['auth', 'verified'])->name('ferry');

// Route::get('/ferry', function () {
//     return view('ferry');
// })->middleware(['auth', 'verified'])->name('ferry');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});





require __DIR__.'/auth.php';
