<?php

use App\Http\Controllers\ListingController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;

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

/*****Common Resource Routes*****/
//index-This displays all listings
//show-This displays single listing
//create- This displays a form to create a new listing
//store - This displays new listing
//edit -This displays a form to edit
//update - This updates a new listing
//destroy - This deletes listing

//All listings
Route::get('/', [ListingController::class, 'index']);

//Show Create Form
Route::get('/listings/create', [ListingController::class, 'create']);

//Single Listings
Route::get('/listings/{listing}', [ListingController::class, 'show']);


