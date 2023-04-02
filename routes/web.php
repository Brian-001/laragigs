<?php

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;

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

//Store Listing
Route::post('/listing', [ListingController::class, 'store']);

//Show edit form
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit']);

//Update Listing
Route::put('/listings/{listing}', [ListingController::class, 'update']);

//Detete Listing
Route::delete('/listings/{listing}', [ListingController::class, 'destroy']);

//Show registerForm/Create
Route::get('/register', [UserController::class, 'create']);

//Create new user
Route::post('/users', [UserController::class, 'store']);

//Single Listings
Route::get('/listings/{listing}', [ListingController::class, 'show']);


