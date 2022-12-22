<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

use App\Http\Controllers\MainController;


Route::get('/home', [MainController::Class, 'HomeView'])->name("home");
Route::get('/menu', [MainController::Class, 'MenuView'])->name("menu");