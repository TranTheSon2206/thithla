<?php

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibraryController;


 

Route::get('/library', [LibraryController::class, 'index']);
Route::get('/library/create', [LibraryController::class, 'create']);
Route::get('/library/show/{bookid}', [LibraryController::class, 'show'])->name('library.show');
Route::get('/library/edit/{bookid}', [LibraryController::class, 'edit'])->name('library.edit');
Route::delete('/library/delete/{bookid}', [LibraryController::class, 'destroy'])->name('library.delete');
Route::post('/library', [LibraryController::class, 'store']);
Route::get('/library/search', [LibraryController::class, 'search'])->name('library.search');
Route::patch('/library/update/{bookid}', [LibraryController::class, 'update'])->name('library.update');
