<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Stuff\HomePage;
use App\Http\Livewire\Stuff\PlansPage;
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

Route::any('/', HomePage::class)->name('stuff.home');
Route::any('/stuff/plans', PlansPage::class)->name('stuff.plans');
