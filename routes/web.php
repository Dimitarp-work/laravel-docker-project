<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\NoteController;
use Illuminate\Support\Facades\Artisan;

Route::get('/', function () {
    return Auth::check()
        ? redirect()->route('notes.index')
        : view('welcome');
});
Route::get('/dashboard', function () {
    return redirect()->route('notes.index');
})->middleware(['auth'])->name('dashboard');

Route::get('/migrate-now', function () {
    \Illuminate\Support\Facades\Artisan::call('migrate --force');
    return '✅ Migrations run!';
});

Route::redirect('/', '/notes');

Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('notes', NoteController::class);
});

require __DIR__.'/auth.php';
