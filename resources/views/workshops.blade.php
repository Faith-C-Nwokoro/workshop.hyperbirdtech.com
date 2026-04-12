@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="relative py-24 overflow-hidden">
    <!-- Subtle Background -->
    <div class="absolute inset-0 bg-gradient-to-br from-slate-950 via-slate-900 to-slate-950"></div>
    <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-indigo-500/5 rounded-full blur-3xl"></div>
    <div class="absolute bottom-1/4 right-1/4 w-96 h-96 bg-purple-500/5 rounded-full blur-3xl"></div>
    
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto text-center space-y-8">
            <!-- Badge -->
            <div class="inline-flex items-center px-4 py-2 rounded-full border border-slate-800 bg-slate-900/50">
                <span class="w-2 h-2 bg-indigo-400 rounded-full mr-2"></span>
                <span class="text-sm text-slate-400">10 Workshops Available</span>
            </div>
            
            <h1 class="text-5xl md:text-6xl lg:text-7xl font-bold leading-tight tracking-tight">
                <span class="text-white">Expert-Led</span>
                <br>
                <span class="gradient-text">Workshop Series</span>
            </h1>
            
            <p class="text-xl text-slate-400 leading-relaxed max-w-2xl mx-auto">
                Master AI, Blockchain, and Modern Web Technologies through hands-on training with industry experts.
            </p>
            
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="#workshops" class="inline-flex items-center justify-center px-8 py-4 bg-white text-black rounded-xl font-semibold transition-all transform hover:scale-105 hover:bg-slate-100 shadow-lg shadow-white/10">
                    <i class="fas fa-arrow-right mr-2"></i>
                    Browse Workshops
                </a>
                <a href="{{ route('assignments.index') }}" class="inline-flex items-center justify-center px-8 py-4 border border-slate-700 hover:border-slate-600 text-slate-300 hover:text-white rounded-xl font-semibold transition-all">
                    <i class="fas fa-play mr-2"></i>
                    Get Started
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="py-16 bg-slate-900/50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
            <div class="text-center">
                <div class="text-4xl font-bold gradient-text mb-2">10</div>
                <div class="text-slate-400">Expert Workshops</div>
            </div>
            <div class="text-center">
                <div class="text-4xl font-bold gradient-text mb-2">100%</div>
                <div class="text-slate-400">Free Scholarship</div>
            </div>
            <div class="text-center">
                <div class="text-4xl font-bold gradient-text mb-2">$276</div>
                <div class="text-slate-400">Total Value</div>
            </div>
            <div class="text-center">
                <div class="text-4xl font-bold gradient-text mb-2">4500+</div>
                <div class="text-slate-400">Learners Joined</div>
            </div>
        </div>
    </div>
</section>

<!-- Filter Section -->
<section class="py-8 border-b border-slate-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-wrap gap-3 items-center">
            <span class="text-slate-400 font-medium">Filter by:</span>
            <button class="px-4 py-2 rounded-lg bg-indigo-500/20 text-indigo-400 font-medium">All Workshops</button>
            <button class="px-4 py-2 rounded-lg text-slate-400 hover:bg-slate-800/50 hover:text-white transition-colors">AI & ML</button>
            <button class="px-4 py-2 rounded-lg text-slate-400 hover:bg-slate-800/50 hover:text-white transition-colors">Blockchain</button>
            <button class="px-4 py-2 rounded-lg text-slate-400 hover:bg-slate-800/50 hover:text-white transition-colors">Web Dev</button>
            <button class="px-4 py-2 rounded-lg text-slate-400 hover:bg-slate-800/50 hover:text-white transition-colors">Design</button>
        </div>
    </div>
</section>

<!-- Workshops Grid -->
<section id="workshops" class="py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 items-stretch" style="grid-auto-rows: 1fr;">
            @forelse ($workshops as $index => $workshop)
            <div class="glass rounded-2xl overflow-hidden hover:bg-slate-800/50 transition-all transform hover:-translate-y-2 group flex flex-col h-full">
                <!-- Card Image -->
                <div class="relative h-56 overflow-hidden">
                    @php
                        $categoryImages = [
                            'Artificial Intelligence' => 'https://images.unsplash.com/photo-1677442136019-21780ecad995?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                            'AI & Web Development' => 'https://images.unsplash.com/photo-1517694712202-14dd9538aa97?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                            'Blockchain' => 'https://images.unsplash.com/photo-1639762681485-074b7f938ba0?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                            'Web Development' => 'https://images.unsplash.com/photo-1547658719-da2b51169166?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                            'Product Design' => 'https://images.unsplash.com/photo-1586717791821-3f44a5638d48?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                            'Digital Marketing' => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                            'Startup & Innovation' => 'https://images.unsplash.com/photo-1559136555-9303baea8ebd?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                            'Future Technologies' => 'https://images.unsplash.com/photo-1451187580459-43490279c0fa?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                        ];
                        $imageUrl = $categoryImages[$workshop->category] ?? 'https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80';
                    @endphp
                    <img src="{{ $imageUrl }}" alt="{{ $workshop->category }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/50 to-transparent"></div>
                    
                    <!-- Badges -->
                    <div class="absolute top-4 left-4 flex gap-2">
                        <span class="bg-indigo-500 text-white text-xs px-3 py-1 rounded-full font-medium">
                            Workshop {{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}
                        </span>
                    </div>
                    <div class="absolute top-4 right-4">
                        <span class="bg-green-500/90 backdrop-blur-sm text-white text-xs px-3 py-1 rounded-full font-medium">
                            FREE
                        </span>
                    </div>
                    
                    <!-- Date Badge -->
                    <div class="absolute bottom-4 left-4">
                        <span class="bg-white/20 backdrop-blur-sm text-white text-sm px-3 py-1.5 rounded-lg font-medium">
                            <i class="fas fa-calendar mr-2"></i>{{ $workshop->formatted_date }}
                        </span>
                    </div>
                </div>

                <!-- Card Content -->
                <div class="p-6 space-y-4 flex-grow flex flex-col h-[264px]">
                    <!-- Category -->
                    <div class="flex items-center justify-between">
                        <span class="inline-flex items-center px-3 py-1 rounded-full bg-indigo-500/20 text-indigo-400 text-sm font-medium">
                            <i class="fas fa-tag mr-2 text-xs"></i>{{ $workshop->category }}
                        </span>
                        <span class="text-slate-500 text-sm">
                            <i class="fas fa-clock mr-1"></i>{{ $workshop->duration_hours }}h
                        </span>
                    </div>

                    <!-- Title -->
                    <h3 class="text-lg font-bold text-white line-clamp-2 leading-tight">
                        {{ $workshop->title }}
                    </h3>

                    <!-- Time & Moderator -->
                    <div class="flex items-center justify-between text-sm text-slate-400">
                        <div class="flex items-center">
                            <i class="fas fa-clock mr-2 text-indigo-400"></i>
                            {{ $workshop->formatted_time }}
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-user-tie mr-2 text-indigo-400"></i>
                            {{ $workshop->moderator }}
                        </div>
                    </div>

                    <!-- Price & CTA -->
                    <div class="flex items-center justify-between pt-4 border-t border-slate-700">
                        <div>
                            <p class="text-slate-500 text-xs">Market Value</p>
                            <p class="text-lg font-bold text-slate-300">${{ number_format($workshop->market_value, 2) }}</p>
                        </div>
                        <a href="{{ route('assignments.index', ['workshop' => $workshop->slug]) }}"
                           class="px-5 py-2.5 bg-gradient-to-r from-indigo-500 to-purple-600 hover:from-indigo-600 hover:to-purple-700 text-white rounded-lg font-semibold transition-all transform hover:scale-105 shadow-lg shadow-indigo-500/25 flex items-center">
                            <i class="fas fa-rocket mr-2"></i>Join
                        </a>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-span-full text-center py-16">
                <div class="glass rounded-2xl p-12 max-w-md mx-auto">
                    <div class="w-20 h-20 bg-gradient-to-br from-indigo-500 to-purple-600 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-calendar-alt text-white text-3xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-3 gradient-text">Workshops Coming Soon</h3>
                    <p class="text-slate-400">Check back later for upcoming workshop schedules and registration.</p>
                </div>
            </div>
            @endforelse
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 relative overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-r from-indigo-600 to-purple-600"></div>
    <div class="absolute inset-0 bg-black/30"></div>
    
    <div class="relative z-10 max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div class="w-20 h-20 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center mx-auto mb-6">
            <i class="fas fa-graduation-cap text-white text-4xl"></i>
        </div>
        <h2 class="text-4xl md:text-5xl font-bold mb-6 text-white">
            100% Scholarship Available
        </h2>
        <p class="text-xl text-slate-200 mb-8 max-w-2xl mx-auto">
            All workshops are FREE for registered participants. Get live training on Google Meet, practical assignments with HBT tools, and expert feedback.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('assignments.index') }}" class="inline-flex items-center justify-center px-8 py-4 bg-white text-black rounded-xl font-semibold transition-all transform hover:scale-105 hover:bg-slate-100">
                <i class="fas fa-paper-plane mr-2"></i>
                Start Learning Now
            </a>
            <a href="{{ route('home') }}" class="inline-flex items-center justify-center px-8 py-4 glass text-white rounded-xl font-semibold transition-all transform hover:scale-105 hover:bg-white/20 border border-white/30">
                <i class="fas fa-info-circle mr-2"></i>
                Learn More
            </a>
        </div>
    </div>
</section>
@endsection
