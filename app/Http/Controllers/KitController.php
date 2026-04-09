<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StarterKit;
use App\Models\KitOrder;

class KitController extends Controller
{
    public function index(Request $request)
    {
        $kits = StarterKit::where('is_available', true)
            ->with('workshop')
            ->orderBy('name')
            ->get();
            
        $workshops = \App\Models\Workshop::where('is_active', true)
            ->orderBy('title')
            ->get();
            
        $purchaseMessage = session('purchaseMessage', '');
        $purchaseError = session('purchaseError', '');
        
        return view('kits', compact('kits', 'workshops', 'purchaseMessage', 'purchaseError'));
    }
    
    public function request(Request $request)
    {
        $request->validate([
            'kit_id' => 'required|exists:starter_kits,id',
            'customer_name' => 'required|string|max:255',
            'customer_email' => 'required|email|max:255',
            'customer_phone' => 'nullable|string|max:50',
        ]);
        
        $kit = StarterKit::findOrFail($request->kit_id);
        $reference = 'HBT-' . strtoupper(bin2hex(random_bytes(4)));
        
        KitOrder::create([
            'kit_id' => $request->kit_id,
            'customer_name' => $request->customer_name,
            'customer_email' => $request->customer_email,
            'customer_phone' => $request->customer_phone,
            'amount' => $kit->price,
            'currency' => $kit->currency,
            'payment_reference' => $reference,
            'status' => 'completed',
        ]);
        
        return redirect()->route('kits.index')
            ->with('purchaseMessage', 'Request received! Reference: ' . $reference . '. We will send the resource kit to ' . $request->customer_email . ' within 24 hours.');
    }
}
