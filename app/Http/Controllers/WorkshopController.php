<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Workshop;

class WorkshopController extends Controller
{
    public function index()
    {
        $workshops = Workshop::where('is_active', true)
            ->orderBy('date_scheduled', 'asc')
            ->get();
            
        return view('workshops', compact('workshops'));
    }
}
