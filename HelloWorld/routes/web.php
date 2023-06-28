<?php

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibraryController;


 

 Route::resource('/library', LibraryController::class);
 Route::get('/library/search', 'LibraryController@search')->name('library.search');

