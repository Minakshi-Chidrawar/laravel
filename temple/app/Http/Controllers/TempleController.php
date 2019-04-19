<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TempleController extends Controller
{
    public function index()
    {
        return view('temple.index');
    }

    public function aboutTemple()
    {
        return view('temple.aboutTemple');
    }

    public function mission()
    {
        return view('temple.mission');
    }

    public function horoscope()
    {
        return view('temple.horoscope');
    }

    public function donation()
    {
        return view('temple.donation');
    }

    public function priestServices()
    {
        return view('temple.priestServices');
    }
    
    public function aarati()
    {
        return view('temple.aarati');
    }
}
