<?php

use App\Models\Listing;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdvertController;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\FacebookController;
use App\Http\Controllers\ContactFormController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// show all listings
Route::get('/', [ListingController::class, 'index']);

// show create form
Route::get("/listings/create", [ListingController::class, 'create'])->middleware('auth');

// store listing data
Route::post("/listings", [ListingController::class, 'store']);

// show edit listing
Route::get("/listings/{listing}/edit", [ListingController::class, 'edit'])->middleware('auth');

// store edited listing
Route::put("/listings/{listing}", [ListingController::class, 'update'])->middleware('auth');

// delete listing
Route::delete("/listings/{listing}", [ListingController::class, 'destroy'])->middleware('auth');

// manage listings
Route::get('/listings/manage', [ListingController::class, 'manage'])->middleware('auth');

// manage listings
Route::get('/listings/all', [ListingController::class, 'show_all'])->middleware('auth');

// show single listing
Route::get("/listings/{listing}", [ListingController::class, 'show']);

// show register form
Route::get('/register', [UserController::class, 'register'])->middleware('guest');

// store new user
Route::post('/users', [UserController::class, 'store']);

// show login form
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

// log user in
Route::post('/users/authenticate', [UserController::class, 'authenticate']);

// log user out
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

// show an advert
Route::get('/advert', [AdvertController::class, 'advert'])->middleware('auth');

// store the advert
Route::post('/advert', [AdvertController::class, 'store'])->middleware('auth');

// show all adverts
Route::get('/adverts/all', [AdvertController::class, 'showAll'])->middleware('auth');

// manage the adverts
Route::get('/advert/manage', [AdvertController::class, 'manage'])->middleware('auth');

// delete the advert
Route::delete('/advert/{advert}', [AdvertController::class, 'destroy'])->middleware('auth');

// approve an advert
Route::put('/advert/{advert}', [AdvertController::class, 'approve'])->middleware('auth');

// show the contact form
Route::get('listings/{listing}/contact', [ContactFormController::class, 'createForm']);

// store contact form data
Route::post('listings/{listing}/contact', [ContactFormController::class, 'ContactForm'])->name('contact.store');

// show facebook posts
// Route::get('facebook/sponsored-posts', [FacebookController::class, 'getSponsoredPosts']);