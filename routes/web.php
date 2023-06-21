<?php

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListingController;

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

//All Listings
Route::get('/', [ListingController::class, 'index']);

//Single Listing
Route::get('/listings/{listing}', [ListingController::class, 'show']);

// Common Resource Routes/Naming:
// index - Show all data -> listings Route::get();
// show - Show single data -> listing Route::get();
// create - Show form to create new -> listing Route::post();
// store - Store Data -> new listing
// edit - Show form to edit data -> listing Route::put(); Route::patch();
// update - Update data -> listing Route::delete();
// destroy - Delete a data -> listing   Route::options();










