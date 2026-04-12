@extends('layouts.app')

@section('content')
<!-- Page Header -->
<section class="relative py-24 overflow-hidden">
    <!-- Subtle Background -->
    <div class="absolute inset-0 bg-gradient-to-br from-slate-950 via-slate-900 to-slate-950"></div>
    <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-indigo-500/5 rounded-full blur-3xl"></div>
    <div class="absolute bottom-1/4 right-1/4 w-96 h-96 bg-purple-500/5 rounded-full blur-3xl"></div>
    
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto text-center space-y-8">
            <!-- Badge -->
            <div class="inline-flex items-center px-4 py-2 rounded-full border border-slate-800 bg-slate-900/50">
                <span class="w-2 h-2 bg-green-400 rounded-full mr-2"></span>
                <span class="text-sm text-slate-400">Free Resources</span>
            </div>
            
            <h1 class="text-5xl md:text-6xl lg:text-7xl font-bold leading-tight tracking-tight">
                <span class="text-white">Workshop</span>
                <br>
                <span class="gradient-text">Starter Kits</span>
            </h1>
            
            <p class="text-xl text-slate-400 leading-relaxed max-w-2xl mx-auto">
                Access templates, code samples, and tools to maximize your learning experience.
            </p>
            
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('workshops.index') }}" class="inline-flex items-center justify-center px-8 py-4 bg-white text-black rounded-xl font-semibold transition-all transform hover:scale-105 hover:bg-slate-100 shadow-lg shadow-white/10">
                    <i class="fas fa-arrow-left mr-2"></i>
                    View Workshops
                </a>
                <a href="{{ route('assignments.index') }}" class="inline-flex items-center justify-center px-8 py-4 border border-slate-700 hover:border-slate-600 text-slate-300 hover:text-white rounded-xl font-semibold transition-all">
                    <i class="fas fa-upload mr-2"></i>
                    Submit Assignment
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Info Banner -->
<section class="py-8 relative overflow-hidden">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="glass rounded-2xl p-6 text-center">
            <div class="flex items-center justify-center space-x-3">
                <i class="fas fa-gift text-2xl text-green-400"></i>
                <h3 class="text-xl font-bold gradient-text">All Resources are FREE</h3>
            </div>
            <p class="text-slate-400 mt-2">
                As part of our 100% scholarship program, all workshop resources and starter kits are provided free of charge to registered participants.
            </p>
        </div>
    </div>
</section>

<!-- Kits Grid -->
<section class="py-16 relative overflow-hidden">
    <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-b from-slate-900 to-slate-950"></div>
    
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        @if ($purchaseMessage)
            <div class="mb-8 p-4 bg-green-500/20 border border-green-500/30 rounded-lg">
                <div class="flex items-center">
                    <i class="fas fa-check-circle text-green-400 mr-3"></i>
                    <span class="text-green-400">{{ $purchaseMessage }}</span>
                </div>
            </div>
        @endif
        @if ($purchaseError)
            <div class="mb-8 p-4 bg-red-500/20 border border-red-500/30 rounded-lg">
                <div class="flex items-center">
                    <i class="fas fa-exclamation-circle text-red-400 mr-3"></i>
                    <span class="text-red-400">{{ $purchaseError }}</span>
                </div>
            </div>
        @endif

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse ($kits as $kit)
            <div class="glass rounded-2xl overflow-hidden hover:bg-slate-800/50 transition-all transform hover:scale-105 card-3d group">
                <!-- Card Image -->
                <div class="relative h-48 overflow-hidden">
                    @php
                        $kitImages = [
                            'AI Development Toolkit' => 'https://images.unsplash.com/photo-1677442136019-21780ecad995?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                            'Blockchain Starter Pack' => 'https://images.unsplash.com/photo-1639762681485-074b7f938ba0?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                            'Web Development Kit' => 'https://images.unsplash.com/photo-1547658719-da2b51169166?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                            'UI/UX Design Resources' => 'https://images.unsplash.com/photo-1561070791-2526d30994b5?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                            'Digital Marketing Automation Suite' => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                            'Startup Launch Package' => 'https://images.unsplash.com/photo-1559136555-9303baea8ebd?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                        ];
                        $kitImageUrl = $kitImages[$kit->name] ?? 'https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80';
                    @endphp
                    <img src="{{ $kitImageUrl }}" alt="{{ $kit->name }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 to-transparent"></div>
                    <div class="absolute top-4 right-4">
                        <span class="bg-white/20 backdrop-blur-sm text-white text-xs px-3 py-1 rounded-full">
                            <i class="fas fa-gift mr-1"></i>FREE
                        </span>
                    </div>
                </div>

                <!-- Card Content -->
                <div class="p-6 space-y-4">
                    <!-- Category -->
                    <div class="inline-flex items-center px-3 py-1 rounded-full bg-cyan-500/20 text-cyan-400 text-sm">
                        <i class="fas fa-box mr-2 text-xs"></i>
                        {{ $kit->workshop ? $kit->workshop->title : 'General Resources' }}
                    </div>

                    <!-- Title -->
                    <h3 class="text-xl font-bold text-white line-clamp-2">
                        {{ $kit->name }}
                    </h3>

                    <!-- Description -->
                    <p class="text-slate-400 text-sm line-clamp-3">
                        {{ $kit->description }}
                    </p>

                    <!-- Features -->
                    <div class="space-y-2">
                        <div class="flex items-center text-slate-400 text-sm">
                            <i class="fas fa-check-circle text-green-400 mr-2"></i>
                            Templates & Samples
                        </div>
                        <div class="flex items-center text-slate-400 text-sm">
                            <i class="fas fa-check-circle text-green-400 mr-2"></i>
                            Integration Guides
                        </div>
                        <div class="flex items-center text-slate-400 text-sm">
                            <i class="fas fa-check-circle text-green-400 mr-2"></i>
                            HBT Tools Access
                        </div>
                    </div>

                    <!-- CTA Button -->
                    <button type="button" onclick="openPurchaseModal({{ $kit->id }}, '{{ $kit->name }}')"
                            class="block w-full text-center py-3 bg-gradient-to-r from-cyan-500 to-blue-600 hover:from-cyan-600 hover:to-blue-700 text-white rounded-lg font-semibold transition-all transform hover:scale-105 group-hover:shadow-lg group-hover:shadow-cyan-500/25">
                        <i class="fas fa-download mr-2"></i>
                        Request Access
                    </button>
                </div>
            </div>
            @empty
            <div class="col-span-full text-center py-12">
                <div class="glass rounded-2xl p-8 max-w-md mx-auto">
                    <i class="fas fa-box-open text-4xl text-indigo-400 mb-4"></i>
                    <h3 class="text-xl font-semibold mb-2">Resources Coming Soon</h3>
                    <p class="text-slate-400 mb-4">Workshop resources are being prepared. Check back soon!</p>
                    <a href="{{ route('assignments.index') }}" class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-indigo-500 to-purple-600 text-white rounded-lg font-semibold">
                        <i class="fas fa-tasks mr-2"></i>
                        Submit Assignment
                    </a>
                </div>
            </div>
            @endforelse
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="py-16 relative overflow-hidden">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="glass rounded-2xl p-8 text-center">
            <div class="w-16 h-16 bg-gradient-to-br from-indigo-500 to-purple-600 rounded-full flex items-center justify-center mx-auto mb-4">
                <i class="fas fa-headset text-white text-2xl"></i>
            </div>
            <h3 class="text-2xl font-bold mb-2 gradient-text">Need Help?</h3>
            <p class="text-slate-400 mb-6">
                If you have questions about accessing workshop resources or need assistance with assignments, our team is here to help.
            </p>
            <div class="flex flex-col sm:flex-row items-center justify-center gap-4 text-slate-300">
                <a href="mailto:workshops@hyperbird.tech" class="flex items-center hover:text-indigo-400 transition-colors">
                    <i class="fas fa-envelope mr-2 text-indigo-400"></i>
                    workshops@hyperbird.tech
                </a>
                <span class="hidden sm:inline">•</span>
                <div class="flex items-center">
                    <i class="fas fa-video mr-2 text-indigo-400"></i>
                    Available via Google Meet during sessions
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Request Modal -->
<div id="purchase-modal" class="fixed inset-0 z-50 hidden items-center justify-center bg-black/70 backdrop-blur-sm">
    <div class="relative w-full max-w-md mx-4" onclick="event.stopPropagation()">
        <div class="glass rounded-2xl p-8">
            <div class="flex items-center justify-between mb-6">
                <h3 class="text-2xl font-bold gradient-text">Request Resource Kit</h3>
                <button onclick="closePurchaseModal()" class="text-slate-400 hover:text-white transition-colors">
                    <i class="fas fa-times text-xl"></i>
                </button>
            </div>
            
            <p id="modal-kit-name" class="text-slate-400 mb-2"></p>
            <div class="flex items-center mb-6 p-3 bg-green-500/20 rounded-lg">
                <i class="fas fa-check-circle text-green-400 mr-2"></i>
                <span class="text-green-400 font-semibold">FREE Access</span>
            </div>

            <form method="post" action="{{ route('kits.request') }}" class="space-y-4">
                @csrf
                <input type="hidden" name="kit_id" id="modal-kit-id" value="">
                
                <div>
                    <label for="customer_name" class="block text-sm font-medium text-slate-300 mb-2">
                        <i class="fas fa-user mr-2 text-indigo-400"></i>Full name *
                    </label>
                    <input type="text" id="customer_name" name="customer_name" required
                           placeholder="John Doe"
                           class="w-full px-4 py-3 bg-slate-800/50 border border-slate-700 rounded-lg text-white placeholder-slate-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-all">
                    @error('customer_name')
                        <span class="text-red-400 text-sm mt-1"><i class="fas fa-exclamation-triangle mr-1"></i>{{ $message }}</span>
                    @enderror
                </div>

                <div>
                    <label for="customer_email" class="block text-sm font-medium text-slate-300 mb-2">
                        <i class="fas fa-envelope mr-2 text-indigo-400"></i>Email *
                    </label>
                    <input type="email" id="customer_email" name="customer_email" required
                           placeholder="your.email@example.com"
                           class="w-full px-4 py-3 bg-slate-800/50 border border-slate-700 rounded-lg text-white placeholder-slate-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-all">
                    @error('customer_email')
                        <span class="text-red-400 text-sm mt-1"><i class="fas fa-exclamation-triangle mr-1"></i>{{ $message }}</span>
                    @enderror
                </div>

                <div>
                    <label for="customer_phone" class="block text-sm font-medium text-slate-300 mb-2">
                        <i class="fas fa-phone mr-2 text-indigo-400"></i>Phone (Optional)
                    </label>
                    <input type="text" id="customer_phone" name="customer_phone"
                           placeholder="+1 234 567 8900"
                           class="w-full px-4 py-3 bg-slate-800/50 border border-slate-700 rounded-lg text-white placeholder-slate-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-all">
                    @error('customer_phone')
                        <span class="text-red-400 text-sm mt-1"><i class="fas fa-exclamation-triangle mr-1"></i>{{ $message }}</span>
                    @enderror
                </div>

                <div class="flex gap-4 pt-4">
                    <button type="button" onclick="closePurchaseModal()" 
                            class="flex-1 py-3 glass text-white rounded-lg font-semibold hover:bg-slate-800 transition-all">
                        Cancel
                    </button>
                    <button type="submit" 
                            class="flex-1 py-3 bg-gradient-to-r from-cyan-500 to-blue-600 hover:from-cyan-600 hover:to-blue-700 text-white rounded-lg font-semibold transition-all transform hover:scale-105">
                        <i class="fas fa-paper-plane mr-2"></i>Request Access
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
function openPurchaseModal(id, name) {
    document.getElementById('modal-kit-id').value = id;
    document.getElementById('modal-kit-name').textContent = name;
    document.getElementById('purchase-modal').classList.remove('hidden');
    document.getElementById('purchase-modal').classList.add('flex');
    document.body.style.overflow = 'hidden';
}

function closePurchaseModal() {
    document.getElementById('purchase-modal').classList.add('hidden');
    document.getElementById('purchase-modal').classList.remove('flex');
    document.body.style.overflow = '';
}

// Close modal on overlay click
document.getElementById('purchase-modal').addEventListener('click', function(e) {
    if (e.target === this) {
        closePurchaseModal();
    }
});

// Close modal on Escape key
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
        closePurchaseModal();
    }
});
</script>
@endsection
