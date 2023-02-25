<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('listings', [
        'heading' => 'latest listings',
        'listings' => [
            [
                'id' => 1,
                'title' => 'Listing One',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Architecto, iure eaque nostrum vero aspernatur excepturi! 
                Possimus rem accusamus reiciendis non fugit ipsum, ea 
                expedita dolorem totam provident enim ullam doloribus.'
            ],
            [
                'id' => 2,
                'title' => 'Listing Two',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Architecto, iure eaque nostrum vero aspernatur excepturi! 
                Possimus rem accusamus reiciendis non fugit ipsum, ea 
                expedita dolorem totam provident enim ullam doloribus.'
            ]
        ] 
    ]);
});
