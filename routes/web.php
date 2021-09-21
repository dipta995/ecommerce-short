<?php

use App\Http\Livewire\CartComponenet;
use App\Http\Livewire\CheckoutComponent;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\ShopComponent;
use Illuminate\Support\Facades\Route;



// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',HomeComponent::class);
Route::get('/shop',ShopComponent::class);
Route::get('/cart',CartComponenet::class);
Route::get('/checkout',CheckoutComponent::class);


// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

//For User Customer
Route::middleware(['auth:sanctum', 'verified'])->group(function () {


});
//For Admin
Route::middleware(['auth:sanctum', 'verified','authadmin'])->group(function () {


});

