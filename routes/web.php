<?php

use App\Http\Controllers\CinesController;
use App\Http\Controllers\MovieTheatersController;
use App\Http\Controllers\MoviesController;
use App\Http\Controllers\GenresController;
use App\Http\Controllers\TimesReservationsController;
use Illuminate\Support\Facades\Route;

Route::prefix('cines')->group(function(){
    Route::get('/', [CinesController::class, 'index'])->name('cines-index');
    Route::get('/search', [CinesController::class, 'search'])->name('cines-search');
    Route::get('/create', [CinesController::class, 'create'])->name('cines-create'); 
    Route::post('/', [CinesController::class, 'store'])->name('cines-store'); 
    Route::get('/{id}/edit', [CinesController::class, 'edit'])->where ('id','[0-9]+')->name('cines-edit'); 
    Route::put('/{id}', [CinesController::class, 'update'])->where ('id','[0-9]+')->name('cines-update'); 
    Route::delete('/{id}', [CinesController::class, 'destroy'])->where ('id','[0-9]+')->name('cines-destroy');
});

Route::prefix('salas')->group(function(){
	Route::get('/', [MovieTheatersController::class, 'index'])->name('movieTheaters-index'); 
    Route::get('/search', [MovieTheatersController::class, 'search'])->name('movieTheaters-search');
	Route::get('/create', [MovieTheatersController::class, 'create'])->name('movieTheaters-create'); 
	Route::post('/', [MovieTheatersController::class, 'store'])->name('movieTheaters-store'); 
	Route::get('/{id}/edit', [MovieTheatersController::class, 'edit'])->where ('id','[0-9]+')->name('movieTheaters-edit'); 
	Route::put('/{id}', [MovieTheatersController::class, 'update'])->where ('id','[0-9]+')->name('movieTheaters-update'); 
	Route::delete('/{id}', [MovieTheatersController::class, 'destroy'])->where ('id','[0-9]+')->name('movieTheaters-destroy');
});

Route::prefix('filmes')->group(function(){
    Route::get('/', [MoviesController::class, 'index'])->name('movies-index'); 
    Route::get('/search', [MoviesController::class, 'search'])->name('movies-search');
    Route::get('/create', [MoviesController::class, 'create'])->name('movies-create'); 
    Route::post('/', [MoviesController::class, 'store'])->name('movies-store'); 
    Route::get('/{id}/edit', [MoviesController::class, 'edit'])->where ('id','[0-9]+')->name('movies-edit'); 
    Route::put('/{id}', [MoviesController::class, 'update'])->where ('id','[0-9]+')->name('movies-update'); 
    Route::delete('/{id}', [MoviesController::class, 'destroy'])->where ('id','[0-9]+')->name('movies-destroy');
});

Route::prefix('generos')->group(function(){
    Route::get('/', [GenresController::class, 'index'])->name('genres-index'); 

});

Route::prefix('reservas')->group(function(){
    Route::get('/', [TimesReservationsController::class, 'index'])->name('timeReservations-index'); 
    Route::get('/create', [TimesReservationsController::class, 'create'])->name('timeReservations-create'); 
    Route::post('/', [TimesReservationsController::class, 'store'])->name('timeReservations-store'); 
    Route::get('/{id}/edit', [TimesReservationsController::class, 'edit'])->where ('id','[0-9]+')->name('timeReservations-edit'); 
    Route::put('/{id}', [TimesReservationsController::class, 'update'])->where ('id','[0-9]+')->name('timeReservations-update'); 
    Route::delete('/{id}', [TimesReservationsController::class, 'destroy'])->where ('id','[0-9]+')->name('timeReservations-destroy');
});

