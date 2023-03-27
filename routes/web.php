<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/contact', function(){
//     return "Holla! Whats up";
// });

Route::resource('companies', CompanyController::class);