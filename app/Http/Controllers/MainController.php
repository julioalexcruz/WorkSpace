<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function HomeView()
    {
        return view ("home");
    }

    public function MenuView()
    {
        return view ("menu");
    }
}
