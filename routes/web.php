<?php

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


//Relevant concepts: get & post functions
//MVC is a pattern, not a framework.
//Coursework 1: Models & Databases. Database relationships & seeding
//Start with data & data relationships

Route::get('/', function () {
    return view('onlyfinns');
});



/*Correct Submission
1Model definitions
2Database Seeding
3Seeding Relationships
4Factories
5Factory Relationships
6Conventions*/

//Task 2

Route::get('/route1', function () {
    return 'This is Route 1';
});

Route::get('/route2', function () {
    return 'This is Route 2';
});

Route::get('/route3', function () {
    // Redirect to Route 1
    return redirect('/route1');
});

Route::get('/output/{string}', function ($string) {
    // Output the provided string
    return $string;
});

//php artisan route:list

//php artisan make:controller OutputController

//php artisan route:list