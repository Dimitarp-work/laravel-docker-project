<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\NoteController;

//
Route::get('/', function () {
    return '✅ Laravel is working!';
});


Route::get('/migrate-now', function () {
    \Illuminate\Support\Facades\Artisan::call('migrate --force');
    return '✅ Migrations run!';
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return redirect()->route('notes.index');
    })->name('dashboard');


    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('notes', NoteController::class);
});

require __DIR__.'/auth.php';
