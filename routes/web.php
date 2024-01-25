<?php

use App\Models\Dish;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DishController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\RestaurantController;

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


// Rotte per il pannello di controllo dell'amministratore
Route::middleware(['auth', 'verified'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {
        // Rotte per i ristoranti
        Route::resource('restaurants', RestaurantController::class);

        // Rotte per i piatti
        Route::resource('dishes', DishController::class);

        // Altre rotte amministrative, se necessario
});



// Rotte per il profilo utente
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
