<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TempleController extends Controller
{
    public function index()
    {
        return view('temple.index');
    }
}
