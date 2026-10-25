<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReporteController;

Route::inertia('/', 'Welcome')->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::inertia('dashboard', 'Dashboard')->name('dashboard');

    Route::get('/info-sistema', function () {
        return view('info-sistema');
    });

    Route::resource('reportes', ReporteController::class);
});

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';