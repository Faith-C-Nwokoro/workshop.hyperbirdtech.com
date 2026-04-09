@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="relative min-h-screen flex items-center overflow-hidden">
    <!-- Background Image -->
    <div class="absolute inset-0">
        <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80" 
             alt="Team collaboration and learning" 
             class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-gradient-to-r from-slate-950/95 via-slate-900/90 to-slate-950/80"></div>
    </div>

    <!-- Background Effects -->
    <div class="absolute top-20 left-20 w-72 h-72 bg-purple-500 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-float"></div>
    <div class="absolute top-40 right-20 w-72 h-72 bg-indigo-500 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-float" style="animation-delay: 2s"></div>
    <div class="absolute bottom-20 left-1/2 w-72 h-72 bg-pink-500 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-float" style="animation-delay: 4s"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <!-- Left Content -->
            <div class="space-y-8">
                <div class="inline-flex items-center px-4 py-2 rounded-full glass">
                    <span class="w-2 h-2 bg-green-400 rounded-full mr-2 animate-pulse"></span>
                    <span class="text-sm text-slate-300">February – April 2026</span>
                </div>

                <h1 class="text-5xl md:text-6xl lg:text-7xl font-bold leading-tight">
                    <span class="gradient-text">Achieve Excellence</span>
                    <br>
                    <span class="text-white">With Our Services</span>
                </h1>

                <p class="text-xl text-slate-400 leading-relaxed">
                    Building Scalable Solutions with AI, Blockchain & Modern Web Technologies. Join our virtual workshop series and transform your skills.
                </p>

                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="{{ route('workshops.index') }}" class="inline-flex items-center justify-center px-8 py-4 bg-gradient-to-r from-indigo-500 to-purple-600 hover:from-indigo-600 hover:to-purple-700 text-white rounded-full font-semibold transition-all transform hover:scale-105 animate-pulse-glow">
                        <i class="fas fa-rocket mr-2"></i>
                        View All Workshops
                    </a>
                    <a href="{{ route('assignments.index') }}" class="inline-flex items-center justify-center px-8 py-4 glass hover:bg-slate-800 text-white rounded-full font-semibold transition-all transform hover:scale-105">
                        <i class="fas fa-paper-plane mr-2"></i>
                        Submit Assignment
                    </a>
                </div>

                <!-- Stats -->
                <div class="grid grid-cols-3 gap-6 pt-8">
                    <div class="text-center">
                        <div class="text-3xl font-bold gradient-text">10</div>
                        <div class="text-sm text-slate-400">Workshops</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold gradient-text">100%</div>
                        <div class="text-sm text-slate-400">Free Scholarship</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold gradient-text">$276</div>
                        <div class="text-sm text-slate-400">Total Value</div>
                    </div>
                </div>
            </div>

            <!-- Right Content - 3D Illustration -->
            <div class="relative hidden lg:block">
                <div class="relative z-10 card-3d">
                    <div class="glass rounded-3xl p-8 space-y-6">
                        <div class="flex items-center space-x-4">
                            <div class="w-16 h-16 bg-gradient-to-br from-indigo-500 to-purple-600 rounded-2xl flex items-center justify-center">
                                <i class="fas fa-users text-white text-2xl"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold">Consultation Session</h3>
                                <p class="text-slate-400">Live training on Google Meet</p>
                            </div>
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-3">
                                <div class="w-10 h-10 bg-gradient-to-br from-pink-500 to-rose-600 rounded-full flex items-center justify-center">
                                    <i class="fas fa-user text-white"></i>
                                </div>
                                <div>
                                    <p class="font-semibold">Expert Instructors</p>
                                    <p class="text-sm text-slate-400">Industry Leaders</p>
                                </div>
                            </div>
                            <div class="text-right">
                                <p class="text-2xl font-bold gradient-text">FREE</p>
                                <p class="text-sm text-slate-400">100% Scholarship</p>
                            </div>
                        </div>
                        <div class="flex items-center space-x-2 text-slate-400">
                            <i class="fas fa-users text-indigo-400"></i>
                            <span>People who joined: 4500+</span>
                        </div>
                    </div>
                </div>
                <!-- Floating Elements -->
                <div class="absolute -top-10 -right-10 w-20 h-20 bg-gradient-to-br from-indigo-500 to-purple-600 rounded-2xl flex items-center justify-center animate-float" style="animation-delay: 1s">
                    <i class="fas fa-robot text-white text-3xl"></i>
                </div>
                <div class="absolute -bottom-5 -left-5 w-16 h-16 bg-gradient-to-br from-pink-500 to-rose-600 rounded-2xl flex items-center justify-center animate-float" style="animation-delay: 3s">
                    <i class="fas fa-code text-white text-2xl"></i>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Trusted By Section -->
<section class="py-16 relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <p class="text-center text-slate-400 mb-8">Trusted by leading companies and organizations</p>
        <div class="flex flex-wrap justify-center items-center gap-12 opacity-60">
            <div class="text-2xl font-bold text-slate-300 hover:text-indigo-400 transition-colors cursor-pointer"><i class="fab fa-google mr-2"></i>Google</div>
            <div class="text-2xl font-bold text-slate-300 hover:text-indigo-400 transition-colors cursor-pointer"><i class="fab fa-microsoft mr-2"></i>Microsoft</div>
            <div class="text-2xl font-bold text-slate-300 hover:text-indigo-400 transition-colors cursor-pointer"><i class="fab fa-amazon mr-2"></i>Amazon</div>
            <div class="text-2xl font-bold text-slate-300 hover:text-indigo-400 transition-colors cursor-pointer"><i class="fab fa-meta mr-2"></i>Meta</div>
            <div class="text-2xl font-bold text-slate-300 hover:text-indigo-400 transition-colors cursor-pointer"><i class="fab fa-apple mr-2"></i>Apple</div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="py-20 relative overflow-hidden">
    <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-b from-slate-950 to-slate-900"></div>
    <div class="absolute top-20 right-20 w-96 h-96 bg-indigo-500 rounded-full mix-blend-multiply filter blur-3xl opacity-10"></div>
    
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold mb-4">
                <span class="gradient-text">What You'll Learn</span>
            </h2>
            <p class="text-xl text-slate-400 max-w-2xl mx-auto">
                Master cutting-edge technologies with our comprehensive workshop series
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- AI Card -->
            <div class="glass rounded-2xl overflow-hidden hover:bg-slate-800/50 transition-all transform hover:scale-105 card-3d group">
                <div class="relative h-40 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1677442136019-21780ecad995?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="AI" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 to-transparent"></div>
                </div>
                <div class="p-6">
                    <div class="w-12 h-12 bg-gradient-to-br from-indigo-500 to-purple-600 rounded-xl flex items-center justify-center mb-4 -mt-10 relative z-10">
                        <i class="fas fa-brain text-white text-xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Artificial Intelligence</h3>
                    <p class="text-slate-400">AI-driven problem solving, intelligent web apps, and business automation for real-world applications.</p>
                </div>
            </div>

            <!-- Blockchain Card -->
            <div class="glass rounded-2xl overflow-hidden hover:bg-slate-800/50 transition-all transform hover:scale-105 card-3d group">
                <div class="relative h-40 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1639762681485-074b7f938ba0?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Blockchain" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 to-transparent"></div>
                </div>
                <div class="p-6">
                    <div class="w-12 h-12 bg-gradient-to-br from-pink-500 to-rose-600 rounded-xl flex items-center justify-center mb-4 -mt-10 relative z-10">
                        <i class="fas fa-link text-white text-xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Blockchain</h3>
                    <p class="text-slate-400">Smart contracts, FinTech solutions, supply chain management, and governance systems.</p>
                </div>
            </div>

            <!-- Web Development Card -->
            <div class="glass rounded-2xl overflow-hidden hover:bg-slate-800/50 transition-all transform hover:scale-105 card-3d group">
                <div class="relative h-40 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1547658719-da2b51169166?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Web Development" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 to-transparent"></div>
                </div>
                <div class="p-6">
                    <div class="w-12 h-12 bg-gradient-to-br from-cyan-500 to-blue-600 rounded-xl flex items-center justify-center mb-4 -mt-10 relative z-10">
                        <i class="fas fa-code text-white text-xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Web Development</h3>
                    <p class="text-slate-400">Modern web applications for startups and SaaS builders with scalable architectures.</p>
                </div>
            </div>

            <!-- UI/UX Design Card -->
            <div class="glass rounded-2xl overflow-hidden hover:bg-slate-800/50 transition-all transform hover:scale-105 card-3d group">
                <div class="relative h-40 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1586717791821-3f44a5638d48?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="UI/UX Design" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 to-transparent"></div>
                </div>
                <div class="p-6">
                    <div class="w-12 h-12 bg-gradient-to-br from-orange-500 to-amber-600 rounded-xl flex items-center justify-center mb-4 -mt-10 relative z-10">
                        <i class="fas fa-palette text-white text-xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">UI/UX Design</h3>
                    <p class="text-slate-400">High-impact digital product design and exceptional user experiences that engage.</p>
                </div>
            </div>

            <!-- Digital Marketing Card -->
            <div class="glass rounded-2xl overflow-hidden hover:bg-slate-800/50 transition-all transform hover:scale-105 card-3d group">
                <div class="relative h-40 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Digital Marketing" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 to-transparent"></div>
                </div>
                <div class="p-6">
                    <div class="w-12 h-12 bg-gradient-to-br from-green-500 to-emerald-600 rounded-xl flex items-center justify-center mb-4 -mt-10 relative z-10">
                        <i class="fas fa-chart-line text-white text-xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Digital Marketing</h3>
                    <p class="text-slate-400">Digital branding, growth strategies, and social media automation for business impact.</p>
                </div>
            </div>

            <!-- Startup & Innovation Card -->
            <div class="glass rounded-2xl overflow-hidden hover:bg-slate-800/50 transition-all transform hover:scale-105 card-3d group">
                <div class="relative h-40 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1559136555-9303baea8ebd?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Startup & Innovation" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 to-transparent"></div>
                </div>
                <div class="p-6">
                    <div class="w-12 h-12 bg-gradient-to-br from-violet-500 to-purple-600 rounded-xl flex items-center justify-center mb-4 -mt-10 relative z-10">
                        <i class="fas fa-rocket text-white text-xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Startup & Innovation</h3>
                    <p class="text-slate-400">Building and launching scalable tech startups with proven frameworks and strategies.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="py-20 relative overflow-hidden">
    <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-b from-slate-950 to-slate-900"></div>
    <div class="absolute bottom-20 left-20 w-72 h-72 bg-purple-500 rounded-full mix-blend-multiply filter blur-3xl opacity-10"></div>
    
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold mb-4">
                <span class="gradient-text">What People Say</span>
            </h2>
            <p class="text-xl text-slate-400 max-w-2xl mx-auto">
                Hear from our participants who have transformed their careers through our workshops
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Testimonial 1 -->
            <div class="glass rounded-2xl p-6 hover:bg-slate-800/50 transition-all transform hover:scale-105 card-3d">
                <div class="flex items-center mb-4">
                    <div class="flex text-yellow-400">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
                <p class="text-slate-300 mb-6">
                    "The AI workshop completely transformed how I approach problem-solving. The practical assignments and expert feedback were invaluable."
                </p>
                <div class="flex items-center">
                    <div class="w-12 h-12 bg-gradient-to-br from-indigo-500 to-purple-600 rounded-full flex items-center justify-center mr-4">
                        <i class="fas fa-user text-white"></i>
                    </div>
                    <div>
                        <h4 class="font-semibold">Sarah Johnson</h4>
                        <p class="text-sm text-slate-400">AI Engineer</p>
                    </div>
                </div>
            </div>

            <!-- Testimonial 2 -->
            <div class="glass rounded-2xl p-6 hover:bg-slate-800/50 transition-all transform hover:scale-105 card-3d">
                <div class="flex items-center mb-4">
                    <div class="flex text-yellow-400">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
                <p class="text-slate-300 mb-6">
                    "The blockchain fundamentals workshop gave me the confidence to start my own DeFi project. The resources and mentorship were top-notch."
                </p>
                <div class="flex items-center">
                    <div class="w-12 h-12 bg-gradient-to-br from-pink-500 to-rose-600 rounded-full flex items-center justify-center mr-4">
                        <i class="fas fa-user text-white"></i>
                    </div>
                    <div>
                        <h4 class="font-semibold">Michael Chen</h4>
                        <p class="text-sm text-slate-400">Blockchain Developer</p>
                    </div>
                </div>
            </div>

            <!-- Testimonial 3 -->
            <div class="glass rounded-2xl p-6 hover:bg-slate-800/50 transition-all transform hover:scale-105 card-3d">
                <div class="flex items-center mb-4">
                    <div class="flex text-yellow-400">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
                <p class="text-slate-300 mb-6">
                    "The web development workshop was exactly what I needed to launch my startup. The hands-on approach and real-world projects made all the difference."
                </p>
                <div class="flex items-center">
                    <div class="w-12 h-12 bg-gradient-to-br from-cyan-500 to-blue-600 rounded-full flex items-center justify-center mr-4">
                        <i class="fas fa-user text-white"></i>
                    </div>
                    <div>
                        <h4 class="font-semibold">Emily Rodriguez</h4>
                        <p class="text-sm text-slate-400">Startup Founder</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 relative overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-r from-indigo-600 to-purple-600"></div>
    <div class="absolute inset-0 bg-black/30"></div>
    
    <div class="relative z-10 max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-4xl md:text-5xl font-bold mb-6 text-white">
            Ready to Transform Your Skills?
        </h2>
        <p class="text-xl text-slate-200 mb-8">
            Join thousands of learners who have already taken the first step towards their tech career
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('workshops.index') }}" class="inline-flex items-center justify-center px-8 py-4 bg-white text-indigo-600 rounded-full font-semibold transition-all transform hover:scale-105 hover:bg-slate-100">
                <i class="fas fa-play-circle mr-2"></i>
                Explore Workshops
            </a>
            <a href="{{ route('assignments.index') }}" class="inline-flex items-center justify-center px-8 py-4 glass text-white rounded-full font-semibold transition-all transform hover:scale-105 hover:bg-white/20">
                <i class="fas fa-graduation-cap mr-2"></i>
                Start Learning
            </a>
        </div>
    </div>
</section>
@endsection
