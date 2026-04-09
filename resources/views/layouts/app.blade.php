<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $pageTitle ?? 'Workshops' }} | Hyperbird Workshops</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Space+Grotesk:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body class="bg-slate-950 text-slate-100">
    <!-- Navigation -->
    <nav class="fixed top-0 left-0 right-0 z-50 bg-slate-950/80 backdrop-blur-xl border-b border-slate-800/50">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <!-- Logo -->
                <a href="{{ route('home') }}" class="flex items-center">
                    <img src="{{ asset('assets/hyperbird-logo-700x200-white.png') }}" alt="Hyperbird" class="h-8 w-auto">
                </a>

                <!-- Desktop Navigation -->
                <div class="hidden md:flex items-center space-x-8">
                    <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'text-white' : 'text-slate-400 hover:text-white' }} transition-colors text-sm font-medium">
                        Home
                    </a>
                    <a href="{{ route('workshops.index') }}" class="{{ request()->routeIs('workshops.*') ? 'text-white' : 'text-slate-400 hover:text-white' }} transition-colors text-sm font-medium">
                        Workshops
                    </a>
                    <a href="{{ route('kits.index') }}" class="{{ request()->routeIs('kits.*') ? 'text-white' : 'text-slate-400 hover:text-white' }} transition-colors text-sm font-medium">
                        Starter Kits
                    </a>
                    <a href="{{ route('assignments.index') }}" class="{{ request()->routeIs('assignments.*') ? 'text-white' : 'text-slate-400 hover:text-white' }} transition-colors text-sm font-medium">
                        Assignments
                    </a>
                </div>

                <!-- CTA Button -->
                <div class="hidden md:flex items-center">
                    <a href="{{ route('assignments.index') }}" class="bg-white text-slate-900 px-5 py-2 rounded-lg text-sm font-semibold hover:bg-slate-100 transition-colors">
                        Get Started
                    </a>
                </div>

                <!-- Mobile menu button -->
                <button class="md:hidden text-slate-400 hover:text-white p-2" onclick="toggleMobileMenu()">
                    <i class="fas fa-bars text-xl"></i>
                </button>
            </div>
        </div>

        <!-- Mobile Navigation -->
        <div id="mobile-menu" class="hidden md:hidden bg-slate-950/95 backdrop-blur-xl border-t border-slate-800/50">
            <div class="px-6 py-4 space-y-3">
                <a href="{{ route('home') }}" class="block py-2 text-slate-300 hover:text-white transition-colors text-sm font-medium">
                    Home
                </a>
                <a href="{{ route('workshops.index') }}" class="block py-2 text-slate-300 hover:text-white transition-colors text-sm font-medium">
                    Workshops
                </a>
                <a href="{{ route('kits.index') }}" class="block py-2 text-slate-300 hover:text-white transition-colors text-sm font-medium">
                    Starter Kits
                </a>
                <a href="{{ route('assignments.index') }}" class="block py-2 text-slate-300 hover:text-white transition-colors text-sm font-medium">
                    Assignments
                </a>
                <div class="pt-4 mt-4 border-t border-slate-800/50">
                    <a href="{{ route('assignments.index') }}" class="block w-full bg-white text-slate-900 px-5 py-2 rounded-lg text-sm font-semibold text-center hover:bg-slate-100 transition-colors">
                        Get Started
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="pt-16">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="glass mt-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- Brand -->
                <div class="col-span-1 md:col-span-2">
                    <div class="flex items-center mb-4">
                        <img src="{{ asset('assets/hyperbird-logo-700x200-white.png') }}" alt="Hyperbird" class="h-10 w-auto mr-3">
                        <span class="text-xl font-bold gradient-text">Hyperbird LLC</span>
                    </div>
                    <p class="text-slate-400 mb-4">Next-generation software development and technology innovation for Africa and global markets.</p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-slate-400 hover:text-indigo-400 transition-colors">
                            <i class="fab fa-twitter text-xl"></i>
                        </a>
                        <a href="#" class="text-slate-400 hover:text-indigo-400 transition-colors">
                            <i class="fab fa-linkedin text-xl"></i>
                        </a>
                        <a href="#" class="text-slate-400 hover:text-indigo-400 transition-colors">
                            <i class="fab fa-github text-xl"></i>
                        </a>
                        <a href="#" class="text-slate-400 hover:text-indigo-400 transition-colors">
                            <i class="fab fa-discord text-xl"></i>
                        </a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div>
                    <h3 class="text-lg font-semibold mb-4 gradient-text">Quick Links</h3>
                    <ul class="space-y-2">
                        <li><a href="{{ route('home') }}" class="text-slate-400 hover:text-indigo-400 transition-colors"><i class="fas fa-chevron-right mr-2 text-xs"></i>Home</a></li>
                        <li><a href="{{ route('workshops.index') }}" class="text-slate-400 hover:text-indigo-400 transition-colors"><i class="fas fa-chevron-right mr-2 text-xs"></i>Workshops</a></li>
                        <li><a href="{{ route('kits.index') }}" class="text-slate-400 hover:text-indigo-400 transition-colors"><i class="fas fa-chevron-right mr-2 text-xs"></i>Starter Kits</a></li>
                        <li><a href="{{ route('assignments.index') }}" class="text-slate-400 hover:text-indigo-400 transition-colors"><i class="fas fa-chevron-right mr-2 text-xs"></i>Assignments</a></li>
                    </ul>
                </div>

                <!-- Contact -->
                <div>
                    <h3 class="text-lg font-semibold mb-4 gradient-text">Contact</h3>
                    <ul class="space-y-2 text-slate-400">
                        <li><i class="fas fa-envelope mr-2 text-indigo-400"></i>workshops@hyperbird.tech</li>
                        <li><i class="fas fa-map-marker-alt mr-2 text-indigo-400"></i>Africa & Global Markets</li>
                        <li><i class="fas fa-clock mr-2 text-indigo-400"></i>Available 24/7</li>
                    </ul>
                </div>
            </div>

            <div class="border-t border-slate-800 mt-8 pt-8 text-center text-slate-400">
                <p>&copy; {{ date('Y') }} Hyperbird LLC. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        function toggleMobileMenu() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        }
    </script>
    @if (isset($extraScript))
        {!! $extraScript !!}
    @endif
</body>
</html>
