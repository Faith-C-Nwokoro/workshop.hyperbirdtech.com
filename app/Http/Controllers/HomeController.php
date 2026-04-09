<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Workshop;

class HomeController extends Controller
{
    public function index()
    {
        $workshops = Workshop::where('is_active', true)
            ->orderBy('date_scheduled', 'asc')
            ->get();
            
        return view('home', compact('workshops'));
    }
}
