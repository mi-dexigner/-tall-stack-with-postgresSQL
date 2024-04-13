<?php

use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;
use App\Livewire\Dashboard;
use App\Livewire\Files\ShowFile;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware('guest')->group(function(){
Route::get("/register",Register::class)->name("register");
Route::get("/login",Login::class)->name("login");
});



Route::middleware('auth')->group(function(){
    Route::get("/",Dashboard::class)->name("dashboard")->lazy();
    Route::get("/file/{id}", ShowFile::class)->name("show.file")->lazy();

});