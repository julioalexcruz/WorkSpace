<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

use App\Http\Controllers\MainController;


Route::get('/home', [MainController::Class, 'HomeView'])->name("home");
