<?php

namespace App\Http\Controllers\Frontend;

use App\Models\HeroSlider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $heroSlider = HeroSlider::where('is_active', 1)->orderBy('order', 'asc')->get();

        return view('welcome', compact('heroSlider'));
    }
}
