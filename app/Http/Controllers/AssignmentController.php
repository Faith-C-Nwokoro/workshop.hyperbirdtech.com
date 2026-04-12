<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Workshop;
use App\Models\AssignmentSubmission;

class AssignmentController extends Controller
{
    public function index(Request $request)
    {
        $workshops = [
            (object)[
                'id' => 1,
                'title' => 'The Future of Software: AI-Driven Problem Solving',
                'slug' => 'workshop-1-ai-problem-solving',
                'description' => 'Expert-led training by CEO on AI-driven problem solving, live demonstrations, and real-world use cases.',
                'category' => 'Artificial Intelligence',
                'date_scheduled' => '2026-02-07',
                'time_scheduled' => '20:00:00',
                'duration_hours' => 2,
                'market_value' => 25.00,
                'moderator' => 'CEO',
                'formatted_date' => 'Feb 7, 2026',
                'formatted_time' => '8:00 PM',
            ],
            (object)[
                'id' => 2,
                'title' => 'Building Intelligent Web Applications with AI',
                'slug' => 'workshop-2-ai-web-apps',
                'description' => 'Learn to integrate AI into web applications with hands-on demos and interactive challenges.',
                'category' => 'AI & Web Development',
                'date_scheduled' => '2026-02-14',
                'time_scheduled' => '20:00:00',
                'duration_hours' => 2,
                'market_value' => 28.00,
                'moderator' => 'Engineering Lead & Design Manager',
                'formatted_date' => 'Feb 14, 2026',
                'formatted_time' => '8:00 PM',
            ],
            (object)[
                'id' => 3,
                'title' => 'Blockchain Fundamentals for Scalable Solutions',
                'slug' => 'workshop-3-blockchain-fundamentals',
                'description' => 'Master blockchain fundamentals through interactive simulations and practical implementations.',
                'category' => 'Blockchain',
                'date_scheduled' => '2026-02-21',
                'time_scheduled' => '20:00:00',
                'duration_hours' => 2,
                'market_value' => 25.00,
                'moderator' => 'Engineering Lead',
                'formatted_date' => 'Feb 21, 2026',
                'formatted_time' => '8:00 PM',
            ],
            (object)[
                'id' => 4,
                'title' => 'Web Development for Startups & SaaS Builders',
                'slug' => 'workshop-4-web-dev-startups',
                'description' => 'Build production-ready web applications for startups with modern frameworks and best practices.',
                'category' => 'Web Development',
                'date_scheduled' => '2026-02-28',
                'time_scheduled' => '20:00:00',
                'duration_hours' => 2,
                'market_value' => 27.00,
                'moderator' => 'Business Dev & Engineering Lead',
                'formatted_date' => 'Feb 28, 2026',
                'formatted_time' => '8:00 PM',
            ],
            (object)[
                'id' => 5,
                'title' => 'AI for Business Automation and Growth',
                'slug' => 'workshop-5-ai-automation',
                'description' => 'Implement AI-powered automation to streamline business processes and drive growth.',
                'category' => 'Artificial Intelligence',
                'date_scheduled' => '2026-03-07',
                'time_scheduled' => '20:00:00',
                'duration_hours' => 2,
                'market_value' => 26.00,
                'moderator' => 'Business Dev & Program Manager',
                'formatted_date' => 'Mar 7, 2026',
                'formatted_time' => '8:00 PM',
            ],
            (object)[
                'id' => 6,
                'title' => 'UI/UX Design for High-Impact Digital Products',
                'slug' => 'workshop-6-uiux-design',
                'description' => 'Create exceptional user experiences with modern design principles and tools.',
                'category' => 'Product Design',
                'date_scheduled' => '2026-03-14',
                'time_scheduled' => '20:00:00',
                'duration_hours' => 2,
                'market_value' => 25.00,
                'moderator' => 'Design Manager',
                'formatted_date' => 'Mar 14, 2026',
                'formatted_time' => '8:00 PM',
            ],
            (object)[
                'id' => 7,
                'title' => 'Blockchain for FinTech, Supply Chain & Governance',
                'slug' => 'workshop-7-blockchain-fintech',
                'description' => 'Apply blockchain technology to financial services, supply chain, and governance systems.',
                'category' => 'Blockchain',
                'date_scheduled' => '2026-03-21',
                'time_scheduled' => '20:00:00',
                'duration_hours' => 2,
                'market_value' => 27.00,
                'moderator' => 'Program Manager & Engineering Lead',
                'formatted_date' => 'Mar 21, 2026',
                'formatted_time' => '8:00 PM',
            ],
            (object)[
                'id' => 8,
                'title' => 'Digital Branding, Growth & Social Media Automation',
                'slug' => 'workshop-8-digital-marketing',
                'description' => 'Master digital branding and social media automation for maximum business impact.',
                'category' => 'Digital Marketing',
                'date_scheduled' => '2026-04-04',
                'time_scheduled' => '20:00:00',
                'duration_hours' => 2,
                'market_value' => 26.00,
                'moderator' => 'Social Media & Business Dev',
                'formatted_date' => 'Apr 4, 2026',
                'formatted_time' => '8:00 PM',
            ],
            (object)[
                'id' => 9,
                'title' => 'Building and Launching Scalable Tech Startups',
                'slug' => 'workshop-9-tech-startups',
                'description' => 'Learn the complete process of building and launching a successful tech startup.',
                'category' => 'Startup & Innovation',
                'date_scheduled' => '2026-04-11',
                'time_scheduled' => '20:00:00',
                'duration_hours' => 2,
                'market_value' => 28.00,
                'moderator' => 'CEO & Business Development',
                'formatted_date' => 'Apr 11, 2026',
                'formatted_time' => '8:00 PM',
            ],
            (object)[
                'id' => 10,
                'title' => 'Emerging Digital Trends & the Next Decade of Technology',
                'slug' => 'workshop-10-emerging-trends',
                'description' => 'Explore emerging technologies and trends that will shape the next decade of innovation.',
                'category' => 'Future Technologies',
                'date_scheduled' => '2026-04-18',
                'time_scheduled' => '20:00:00',
                'duration_hours' => 2,
                'market_value' => 28.00,
                'moderator' => 'CEO, Exec Secretary & Business Dev',
                'formatted_date' => 'Apr 18, 2026',
                'formatted_time' => '8:00 PM',
            ],
        ];
            
        $selectedWorkshop = $request->query('workshop', '');
        $submitMessage = session('submitMessage', '');
        $submitError = session('submitError', '');
        
        return view('assignments', compact('workshops', 'selectedWorkshop', 'submitMessage', 'submitError'));
    }
    
    public function submit(Request $request)
    {
        $request->validate([
            'submitter_name' => 'required|string|max:255',
            'submitter_email' => 'required|email|max:255',
            'workshop_id' => 'required|exists:workshops,id',
            'assignment_title' => 'required|string|max:255',
            'project_description' => 'required|string',
            'github_url' => 'nullable|url',
            'live_demo' => 'nullable|url',
            'token_payment' => 'required|in:paid,pending',
            'additional_notes' => 'nullable|string',
            'assignment_file' => 'required|file|max:10240|mimes:pdf,doc,docx,zip,rar,py,js,html,css,php,ipynb,txt,md'
        ]);
        
        if ($request->hasFile('assignment_file')) {
            $file = $request->file('assignment_file');
            $fileName = date('Y-m-d-His') . '_' . preg_replace('/[^a-zA-Z0-9._-]/', '_', $file->getClientOriginalName());
            $filePath = $file->storeAs('assignments', $fileName, 'public');
            
            AssignmentSubmission::create([
                'workshop_id' => $request->workshop_id,
                'submitter_name' => $request->submitter_name,
                'submitter_email' => $request->submitter_email,
                'assignment_title' => $request->assignment_title,
                'project_description' => $request->project_description,
                'github_url' => $request->github_url,
                'live_demo_url' => $request->live_demo,
                'token_payment_status' => $request->token_payment,
                'notes' => $request->additional_notes,
                'file_path' => $filePath,
                'file_name_original' => $file->getClientOriginalName(),
            ]);
            
            return redirect()->route('assignments.index')
                ->with('submitMessage', 'Assignment submitted successfully! Our instructors will review it and provide feedback within 3-5 business days. Confirmation sent to ' . $request->submitter_email);
        }
        
        return redirect()->route('assignments.index')
            ->with('submitError', 'File upload failed. Please try again.');
    }
}
