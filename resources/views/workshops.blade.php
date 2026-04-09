@extends('layouts.app')

@section('content')
<!-- Page Header -->
<section class="relative py-20 overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-br from-slate-950 via-slate-900 to-slate-950"></div>
    <div class="absolute top-10 right-20 w-72 h-72 bg-indigo-500 rounded-full mix-blend-multiply filter blur-3xl opacity-20"></div>
    
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-4">
            <span class="gradient-text">Workshop Schedule</span>
        </h1>
        <p class="text-xl text-slate-400 max-w-2xl mx-auto">
            Expert-led training • Live demonstrations • Real-world use cases • Practical assignments
        </p>
    </div>
</section>

<!-- Workshops Grid -->
<section class="py-16 relative overflow-hidden">
    <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-b from-slate-900 to-slate-950"></div>
    
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse ($workshops as $index => $workshop)
            <div class="glass rounded-2xl overflow-hidden hover:bg-slate-800/50 transition-all transform hover:scale-105 card-3d group">
                <!-- Card Image -->
                <div class="relative h-48 overflow-hidden">
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
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 to-transparent"></div>
                    <div class="absolute top-4 left-4">
                        <span class="bg-white/20 backdrop-blur-sm text-white text-xs px-3 py-1 rounded-full">
                            WORKSHOP {{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}
                        </span>
                    </div>
                    <div class="absolute top-4 right-4">
                        <span class="bg-white/20 backdrop-blur-sm text-white text-xs px-3 py-1 rounded-full">
                            {{ $workshop->formatted_date }}
                        </span>
                    </div>
                </div>

                <!-- Card Content -->
                <div class="p-6 space-y-4">
                    <!-- Category Badge -->
                    <div class="inline-flex items-center px-3 py-1 rounded-full bg-indigo-500/20 text-indigo-400 text-sm">
                        <i class="fas fa-tag mr-2 text-xs"></i>
                        {{ $workshop->category }}
                    </div>

                    <!-- Title -->
                    <h3 class="text-xl font-bold text-white line-clamp-2">
                        {{ $workshop->title }}
                    </h3>

                    <!-- Time Info -->
                    <div class="flex items-center text-slate-400 text-sm">
                        <i class="fas fa-clock mr-2 text-indigo-400"></i>
                        {{ $workshop->formatted_time }} - {{ $workshop->time_scheduled ? $workshop->time_scheduled->copy()->addHours(2)->format('g:i A') : 'TBA' }}
                    </div>

                    <!-- Moderator -->
                    <div class="flex items-center text-slate-400 text-sm">
                        <i class="fas fa-user-tie mr-2 text-indigo-400"></i>
                        {{ $workshop->moderator }}
                    </div>

                    <!-- Price Info -->
                    <div class="flex items-center justify-between pt-4 border-t border-slate-700">
                        <div>
                            <p class="text-slate-500 text-xs">Market Value</p>
                            <p class="text-lg font-bold text-slate-300">${{ number_format($workshop->market_value ?? 0, 2) }}</p>
                        </div>
                        <div class="text-right">
                            <p class="text-slate-500 text-xs">Your Cost</p>
                            <p class="text-lg font-bold text-green-400">FREE</p>
                        </div>
                    </div>

                    <!-- CTA Button -->
                    <a href="{{ route('assignments.index', ['workshop' => $workshop->slug]) }}" 
                       class="block w-full text-center py-3 bg-gradient-to-r from-indigo-500 to-purple-600 hover:from-indigo-600 hover:to-purple-700 text-white rounded-lg font-semibold transition-all transform hover:scale-105 group-hover:shadow-lg group-hover:shadow-indigo-500/25">
                        <i class="fas fa-rocket mr-2"></i>
                        Join Workshop
                    </a>

                    <!-- Assignment Info -->
                    <div class="text-center text-xs text-slate-500">
                        <i class="fas fa-tasks mr-1"></i>
                        Includes practical assignment • $5 token fee
                    </div>
                </div>
            </div>
            @empty
            <div class="col-span-full text-center py-12">
                <div class="glass rounded-2xl p-8 max-w-md mx-auto">
                    <i class="fas fa-calendar-alt text-4xl text-indigo-400 mb-4"></i>
                    <h3 class="text-xl font-semibold mb-2">Workshops Coming Soon</h3>
                    <p class="text-slate-400">Check back later for upcoming workshop schedules</p>
                </div>
            </div>
            @endforelse
        </div>
    </div>
</section>

<!-- Info Banner -->
<section class="py-16 relative overflow-hidden">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="glass rounded-2xl p-8 text-center">
            <div class="w-16 h-16 bg-gradient-to-br from-green-500 to-emerald-600 rounded-full flex items-center justify-center mx-auto mb-4">
                <i class="fas fa-graduation-cap text-white text-2xl"></i>
            </div>
            <h3 class="text-2xl font-bold mb-2 gradient-text">100% Scholarship Available</h3>
            <p class="text-slate-400">
                All workshops are FREE for registered participants • Live training on Google Meet • Practical assignments with HBT tools
            </p>
        </div>
    </div>
</section>
@endsection
