<?php

use App\Http\Livewire\Boutique;
use App\Http\Livewire\Boutique\Estate;
use App\Http\Livewire\Boutique\Vehicle;
use App\Http\Livewire\Boutique\House;
use App\Http\Livewire\Payment;
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

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/boutique', [Boutique::class, 'render'])->name('boutique');
Route::get('/boutique/vehicles', [Vehicle::class, 'render'])->name('boutique.vehicles');
Route::get('/boutique/houses', [House::class, 'render'])->name('boutique.houses');
Route::get('/boutique/estates', [Estate::class, 'render'])->name('boutique.estates');
Route::get('/payment/vehecle/rent/{id}', [Payment::class, 'render'])->name('payment.vehecle.rent');
Route::get('/payment/vehecle/sold/{id}', [Payment::class, 'render'])->name('payment.vehecle.sold');
