@extends('layouts.app')

@section('content')
<!-- Page Header -->
<section class="relative py-20 overflow-hidden">
    <div class="absolute inset-0">
        <img src="https://images.unsplash.com/photo-1434030216411-0b793f4b4173?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80" 
             alt="Learning and education" 
             class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-gradient-to-r from-slate-950/95 via-slate-900/90 to-slate-950/80"></div>
    </div>
    <div class="absolute top-10 right-20 w-72 h-72 bg-purple-500 rounded-full mix-blend-multiply filter blur-3xl opacity-20"></div>
    
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div class="w-20 h-20 bg-gradient-to-br from-indigo-500 to-purple-600 rounded-full flex items-center justify-center mx-auto mb-6 animate-bounce-subtle">
            <i class="fas fa-upload text-white text-3xl"></i>
        </div>
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-4">
            <span class="gradient-text">Submit Your Assignment</span>
        </h1>
        <p class="text-xl text-slate-400 max-w-2xl mx-auto">
            Upload your completed workshop assignment and receive expert feedback from our instructors
        </p>
    </div>
</section>

<!-- Form Section -->
<section class="py-16 relative overflow-hidden">
    <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-b from-slate-900 to-slate-950"></div>
    
    <div class="relative z-10 max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="glass rounded-2xl p-8">
            @if ($submitMessage)
                <div class="mb-6 p-4 bg-green-500/20 border border-green-500/30 rounded-lg">
                    <div class="flex items-center">
                        <i class="fas fa-check-circle text-green-400 mr-3"></i>
                        <span class="text-green-400">{{ $submitMessage }}</span>
                    </div>
                </div>
            @endif
            @if ($submitError)
                <div class="mb-6 p-4 bg-red-500/20 border border-red-500/30 rounded-lg">
                    <div class="flex items-center">
                        <i class="fas fa-exclamation-circle text-red-400 mr-3"></i>
                        <span class="text-red-400">{{ $submitError }}</span>
                    </div>
                </div>
            @endif

            <h2 class="text-2xl font-bold mb-2">Assignment Submission Form</h2>
            <p class="text-slate-400 mb-8">
                Complete the form below to submit your workshop assignment. All fields marked with * are required.
            </p>

            <form method="post" action="{{ route('assignments.submit') }}" enctype="multipart/form-data" class="space-y-6">
                @csrf

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="submitter_name" class="block text-sm font-medium text-slate-300 mb-2">
                            <i class="fas fa-user mr-2 text-indigo-400"></i>Your Full Name *
                        </label>
                        <input type="text" id="submitter_name" name="submitter_name" required 
                               value="{{ old('submitter_name') }}"
                               placeholder="e.g., John Doe"
                               class="w-full px-4 py-3 bg-slate-800/50 border border-slate-700 rounded-lg text-white placeholder-slate-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-all">
                        @error('submitter_name')
                            <span class="text-red-400 text-sm mt-1"><i class="fas fa-exclamation-triangle mr-1"></i>{{ $message }}</span>
                        @enderror
                    </div>

                    <div>
                        <label for="submitter_email" class="block text-sm font-medium text-slate-300 mb-2">
                            <i class="fas fa-envelope mr-2 text-indigo-400"></i>Email Address *
                        </label>
                        <input type="email" id="submitter_email" name="submitter_email" required 
                               value="{{ old('submitter_email') }}"
                               placeholder="your.email@example.com"
                               class="w-full px-4 py-3 bg-slate-800/50 border border-slate-700 rounded-lg text-white placeholder-slate-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-all">
                        @error('submitter_email')
                            <span class="text-red-400 text-sm mt-1"><i class="fas fa-exclamation-triangle mr-1"></i>{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div>
                    <label for="workshop_id" class="block text-sm font-medium text-slate-300 mb-2">
                        <i class="fas fa-chalkboard-teacher mr-2 text-indigo-400"></i>Select Workshop *
                    </label>
                    <select id="workshop_id" name="workshop_id" required
                            class="w-full px-4 py-3 bg-slate-800/50 border border-slate-700 rounded-lg text-white focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-all">
                        <option value="">Choose the workshop...</option>
                        @foreach ($workshops as $workshop)
                        <option value="{{ $workshop->id }}" 
                                {{ (old('workshop_id') == $workshop->id) || ($selectedWorkshop == $workshop->slug) ? 'selected' : '' }}>
                            {{ $workshop->title }}
                        </option>
                        @endforeach
                    </select>
                    @error('workshop_id')
                        <span class="text-red-400 text-sm mt-1"><i class="fas fa-exclamation-triangle mr-1"></i>{{ $message }}</span>
                    @enderror
                </div>

                <div>
                    <label for="assignment_title" class="block text-sm font-medium text-slate-300 mb-2">
                        <i class="fas fa-heading mr-2 text-indigo-400"></i>Assignment Title *
                    </label>
                    <input type="text" id="assignment_title" name="assignment_title" required
                           value="{{ old('assignment_title') }}"
                           placeholder="e.g., AI Workflow Implementation"
                           class="w-full px-4 py-3 bg-slate-800/50 border border-slate-700 rounded-lg text-white placeholder-slate-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-all">
                    @error('assignment_title')
                        <span class="text-red-400 text-sm mt-1"><i class="fas fa-exclamation-triangle mr-1"></i>{{ $message }}</span>
                    @enderror
                </div>

                <div>
                    <label for="project_description" class="block text-sm font-medium text-slate-300 mb-2">
                        <i class="fas fa-align-left mr-2 text-indigo-400"></i>Project Description *
                    </label>
                    <textarea id="project_description" name="project_description" required rows="4"
                              placeholder="Describe your project, approach, challenges faced, and solutions implemented..."
                              class="w-full px-4 py-3 bg-slate-800/50 border border-slate-700 rounded-lg text-white placeholder-slate-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-all resize-none">{{ old('project_description') }}</textarea>
                    @error('project_description')
                        <span class="text-red-400 text-sm mt-1"><i class="fas fa-exclamation-triangle mr-1"></i>{{ $message }}</span>
                    @enderror
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="github_url" class="block text-sm font-medium text-slate-300 mb-2">
                            <i class="fab fa-github mr-2 text-indigo-400"></i>GitHub Repository URL (Optional)
                        </label>
                        <input type="url" id="github_url" name="github_url"
                               value="{{ old('github_url') }}"
                               placeholder="https://github.com/username/repository"
                               class="w-full px-4 py-3 bg-slate-800/50 border border-slate-700 rounded-lg text-white placeholder-slate-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-all">
                        @error('github_url')
                            <span class="text-red-400 text-sm mt-1"><i class="fas fa-exclamation-triangle mr-1"></i>{{ $message }}</span>
                        @enderror
                    </div>

                    <div>
                        <label for="live_demo" class="block text-sm font-medium text-slate-300 mb-2">
                            <i class="fas fa-globe mr-2 text-indigo-400"></i>Live Demo URL (Optional)
                        </label>
                        <input type="url" id="live_demo" name="live_demo"
                               value="{{ old('live_demo') }}"
                               placeholder="https://your-demo-site.com"
                               class="w-full px-4 py-3 bg-slate-800/50 border border-slate-700 rounded-lg text-white placeholder-slate-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-all">
                        @error('live_demo')
                            <span class="text-red-400 text-sm mt-1"><i class="fas fa-exclamation-triangle mr-1"></i>{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div>
                    <label for="assignment_file" class="block text-sm font-medium text-slate-300 mb-2">
                        <i class="fas fa-file-upload mr-2 text-indigo-400"></i>Upload Assignment Files *
                    </label>
                    <div class="relative border-2 border-dashed border-slate-700 rounded-lg p-8 text-center hover:border-indigo-500 transition-colors">
                        <input type="file" name="assignment_file" id="assignment_file" required 
                               accept=".pdf,.doc,.docx,.zip,.rar,.py,.js,.html,.css,.php,.ipynb,.txt,.md"
                               class="absolute inset-0 w-full h-full opacity-0 cursor-pointer"
                               onchange="document.getElementById('file-name').textContent = this.files[0]?.name || 'No file chosen'">
                        <div class="space-y-2">
                            <i class="fas fa-cloud-upload-alt text-4xl text-indigo-400"></i>
                            <p class="text-slate-400">Drag and drop files here or click to browse</p>
                            <p id="file-name" class="text-sm text-slate-500">No file chosen</p>
                        </div>
                    </div>
                    <p class="text-xs text-slate-500 mt-2">
                        <i class="fas fa-info-circle mr-1"></i>Maximum file size: 10 MB. Allowed: PDF, Word, ZIP, code files, Jupyter notebooks.
                    </p>
                    @error('assignment_file')
                        <span class="text-red-400 text-sm mt-1"><i class="fas fa-exclamation-triangle mr-1"></i>{{ $message }}</span>
                    @enderror
                </div>

                <div>
                    <label for="token_payment" class="block text-sm font-medium text-slate-300 mb-2">
                        <i class="fas fa-credit-card mr-2 text-indigo-400"></i>Token Payment Confirmation *
                    </label>
                    <select id="token_payment" name="token_payment" required
                            class="w-full px-4 py-3 bg-slate-800/50 border border-slate-700 rounded-lg text-white focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-all">
                        <option value="">Confirm $5 token fee payment...</option>
                        <option value="paid" {{ old('token_payment') == 'paid' ? 'selected' : '' }}>I have paid the $5 token fee</option>
                        <option value="pending" {{ old('token_payment') == 'pending' ? 'selected' : '' }}>Payment pending (will pay shortly)</option>
                    </select>
                    <p class="text-xs text-slate-500 mt-2">
                        <i class="fas fa-info-circle mr-1"></i>Assignments require a $5 token fee for HBT tools usage and review.
                    </p>
                    @error('token_payment')
                        <span class="text-red-400 text-sm mt-1"><i class="fas fa-exclamation-triangle mr-1"></i>{{ $message }}</span>
                    @enderror
                </div>

                <div>
                    <label for="additional_notes" class="block text-sm font-medium text-slate-300 mb-2">
                        <i class="fas fa-sticky-note mr-2 text-indigo-400"></i>Additional Notes (Optional)
                    </label>
                    <textarea id="additional_notes" name="additional_notes" rows="3"
                              placeholder="Any additional information you'd like to share with instructors..."
                              class="w-full px-4 py-3 bg-slate-800/50 border border-slate-700 rounded-lg text-white placeholder-slate-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-all resize-none">{{ old('additional_notes') }}</textarea>
                    @error('additional_notes')
                        <span class="text-red-400 text-sm mt-1"><i class="fas fa-exclamation-triangle mr-1"></i>{{ $message }}</span>
                    @enderror
                </div>

                <button type="submit" class="w-full py-4 bg-gradient-to-r from-indigo-500 to-purple-600 hover:from-indigo-600 hover:to-purple-700 text-white rounded-lg font-semibold transition-all transform hover:scale-105 animate-pulse-glow">
                    <i class="fas fa-paper-plane mr-2"></i>Submit Assignment
                </button>
            </form>
        </div>
    </div>
</section>

<!-- Guidelines Section -->
<section class="py-16 relative overflow-hidden">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="glass rounded-2xl p-8">
            <h3 class="text-2xl font-bold mb-6 gradient-text">
                <i class="fas fa-clipboard-list mr-3"></i>Submission Guidelines
            </h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="flex items-start space-x-3">
                    <div class="w-8 h-8 bg-indigo-500/20 rounded-lg flex items-center justify-center flex-shrink-0">
                        <i class="fas fa-code text-indigo-400 text-sm"></i>
                    </div>
                    <div>
                        <h4 class="font-semibold mb-1">Code Quality</h4>
                        <p class="text-slate-400 text-sm">Ensure your code is well-commented and follows best practices</p>
                    </div>
                </div>
                <div class="flex items-start space-x-3">
                    <div class="w-8 h-8 bg-indigo-500/20 rounded-lg flex items-center justify-center flex-shrink-0">
                        <i class="fas fa-file-alt text-indigo-400 text-sm"></i>
                    </div>
                    <div>
                        <h4 class="font-semibold mb-1">Documentation</h4>
                        <p class="text-slate-400 text-sm">Include a README or documentation explaining your approach</p>
                    </div>
                </div>
                <div class="flex items-start space-x-3">
                    <div class="w-8 h-8 bg-indigo-500/20 rounded-lg flex items-center justify-center flex-shrink-0">
                        <i class="fas fa-vial text-indigo-400 text-sm"></i>
                    </div>
                    <div>
                        <h4 class="font-semibold mb-1">Testing</h4>
                        <p class="text-slate-400 text-sm">Test your solution thoroughly before submission</p>
                    </div>
                </div>
                <div class="flex items-start space-x-3">
                    <div class="w-8 h-8 bg-indigo-500/20 rounded-lg flex items-center justify-center flex-shrink-0">
                        <i class="fas fa-file-archive text-indigo-400 text-sm"></i>
                    </div>
                    <div>
                        <h4 class="font-semibold mb-1">File Format</h4>
                        <p class="text-slate-400 text-sm">Compress multiple files into a single ZIP archive</p>
                    </div>
                </div>
                <div class="flex items-start space-x-3">
                    <div class="w-8 h-8 bg-indigo-500/20 rounded-lg flex items-center justify-center flex-shrink-0">
                        <i class="fas fa-clock text-indigo-400 text-sm"></i>
                    </div>
                    <div>
                        <h4 class="font-semibold mb-1">Review Time</h4>
                        <p class="text-slate-400 text-sm">Expect feedback within 3-5 business days</p>
                    </div>
                </div>
                <div class="flex items-start space-x-3">
                    <div class="w-8 h-8 bg-indigo-500/20 rounded-lg flex items-center justify-center flex-shrink-0">
                        <i class="fas fa-coins text-indigo-400 text-sm"></i>
                    </div>
                    <div>
                        <h4 class="font-semibold mb-1">Token Fee</h4>
                        <p class="text-slate-400 text-sm">Required for assignment review and HBT tools access</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
