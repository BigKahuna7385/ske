<?php

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;

//All Listings
Route::get('/', [ListingController::class, 'index']);

//Show Edit Form
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit']);

//Update Listing
Route::put('/listings/{listing}', [ListingController::class, 'update'])->middleware('auth');

//Show Create Form
Route::get('/listings/create', [ListingController::class, 'create'])->middleware('auth');

//Store Listing Data
Route::post('/listings', [ListingController::class, 'store'])->middleware('auth');

//Store Listing Data
Route::delete('/listings/{listing}', [ListingController::class, 'destroy'])->middleware('auth');

// Manage Listings
Route::get('/listings/manage', [ListingController::class, 'manage'])->middleware('auth');

//Single Listings
Route::get('/listings/{listing}', [ListingController::class, 'show']);

//Show Register/Create Form
Route::get('/register', [UserController::class, 'create'])->middleware('guest');


//Create New User
Route::post('/users', [UserController::class, 'store']);

//Log User Out
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

//Show Login Form
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

//Log In User
Route::post('/users/authenticate', [UserController::class, 'authenticate']);



/**
 * 
 * news
 * turniere
 * termine
 * dwz
 * links
 * kontakt
 * impressum
 * user
 * date
 * tools
 * Notiz
 * Forum
 * 
 * */