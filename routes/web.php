<?php

use App\Http\Controllers\ListingContorller;
use App\Models\Listing;
use Illuminate\Support\Facades\Route;

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

// All Listings
Route::get('/', [ListingContorller::class,'index']);

// Single Listing
Route::get('/listings/{listing}', [ListingContorller::class,'show']);
