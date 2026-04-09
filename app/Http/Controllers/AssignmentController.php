<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Workshop;
use App\Models\AssignmentSubmission;

class AssignmentController extends Controller
{
    public function index(Request $request)
    {
        $workshops = Workshop::where('is_active', true)
            ->orderBy('date_scheduled', 'asc')
            ->get();
            
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
