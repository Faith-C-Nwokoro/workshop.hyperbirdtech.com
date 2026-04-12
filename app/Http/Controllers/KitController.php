<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StarterKit;
use App\Models\KitOrder;

class KitController extends Controller
{
    public function index(Request $request)
    {
        $kits = [
            (object)[
                'id' => 1,
                'name' => 'AI Development Toolkit',
                'slug' => 'ai-toolkit',
                'description' => 'Complete AI workflow templates, code samples, and integration guides for building intelligent applications using Hyperbird tools.',
                'price' => 0.00,
                'currency' => 'USD',
                'is_available' => true,
                'workshop' => (object)[
                    'title' => 'The Future of Software: AI-Driven Problem Solving',
                ],
            ],
            (object)[
                'id' => 2,
                'name' => 'Blockchain Starter Pack',
                'slug' => 'blockchain-pack',
                'description' => 'Smart contract templates, sandbox environment access, and blockchain implementation guides for FinTech and supply chain.',
                'price' => 0.00,
                'currency' => 'USD',
                'is_available' => true,
                'workshop' => (object)[
                    'title' => 'Blockchain Fundamentals for Scalable Solutions',
                ],
            ],
            (object)[
                'id' => 3,
                'name' => 'Web Development Kit',
                'slug' => 'web-dev-kit',
                'description' => 'Full-stack templates, SaaS boilerplates, and deployment guides for building scalable web applications.',
                'price' => 0.00,
                'currency' => 'USD',
                'is_available' => true,
                'workshop' => (object)[
                    'title' => 'Web Development for Startups & SaaS Builders',
                ],
            ],
            (object)[
                'id' => 4,
                'name' => 'UI/UX Design Resources',
                'slug' => 'design-resources',
                'description' => 'Design system templates, Figma files, and prototyping tools for creating high-impact digital products.',
                'price' => 0.00,
                'currency' => 'USD',
                'is_available' => true,
                'workshop' => (object)[
                    'title' => 'UI/UX Design for High-Impact Digital Products',
                ],
            ],
            (object)[
                'id' => 5,
                'name' => 'Digital Marketing Automation Suite',
                'slug' => 'marketing-suite',
                'description' => 'Social media automation workflows, branding templates, and growth strategy frameworks.',
                'price' => 0.00,
                'currency' => 'USD',
                'is_available' => true,
                'workshop' => null,
            ],
            (object)[
                'id' => 6,
                'name' => 'Startup Launch Package',
                'slug' => 'startup-package',
                'description' => 'Complete startup roadmap templates, pitch deck frameworks, and business planning tools.',
                'price' => 0.00,
                'currency' => 'USD',
                'is_available' => true,
                'workshop' => (object)[
                    'title' => 'Building and Launching Scalable Tech Startups',
                ],
            ],
        ];
            
        $workshops = [
            (object)[
                'id' => 1,
                'title' => 'The Future of Software: AI-Driven Problem Solving',
            ],
            (object)[
                'id' => 2,
                'title' => 'Building Intelligent Web Applications with AI',
            ],
            (object)[
                'id' => 3,
                'title' => 'Blockchain Fundamentals for Scalable Solutions',
            ],
            (object)[
                'id' => 4,
                'title' => 'Web Development for Startups & SaaS Builders',
            ],
            (object)[
                'id' => 5,
                'title' => 'AI for Business Automation and Growth',
            ],
            (object)[
                'id' => 6,
                'title' => 'UI/UX Design for High-Impact Digital Products',
            ],
            (object)[
                'id' => 7,
                'title' => 'Blockchain for FinTech, Supply Chain & Governance',
            ],
            (object)[
                'id' => 8,
                'title' => 'Digital Branding, Growth & Social Media Automation',
            ],
            (object)[
                'id' => 9,
                'title' => 'Building and Launching Scalable Tech Startups',
            ],
            (object)[
                'id' => 10,
                'title' => 'Emerging Digital Trends & the Next Decade of Technology',
            ],
        ];
            
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
