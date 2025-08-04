@extends('layout.app')

@section('content')
    <!-- Hero Section -->
    <section class="hero-bg pt-24 pb-16 px-4">
        <div class="max-w-7xl mx-auto text-center">
            <div class="animate-slide-up">
                <h1 class="text-5xl lg:text-6xl font-bold text-dark mb-6">
                    Tim <span class="bg-gradient-to-r from-primary to-secondary bg-clip-text text-transparent">Dokter</span> Terbaik
                </h1>
                <p class="text-xl text-gray-600 mb-8 max-w-3xl mx-auto">
                    Bertemu dengan dokter berpengalaman dan terpercaya yang siap memberikan pelayanan kesehatan terbaik untuk Anda dan keluarga.
                </p>
            </div>
        </div>
    </section>

    <!-- Search & Filter Section -->
    <section class="hero-bg pb-16 px-4">
        <div class="max-w-7xl mx-auto">
            <div class="bg-white rounded-3xl p-8 shadow-xl">
                <div class="grid md:grid-cols-3 gap-6">
                    <div>
                        <label class="block text-sm font-semibold text-dark mb-2">Cari Dokter</label>
                        <input type="text" placeholder="Nama dokter atau spesialisasi..." 
                               class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-dark mb-2">Spesialisasi</label>
                        <select class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                            <option>Semua Spesialisasi</option>
                            <option>Dokter Umum</option>
                            <option>Spesialis Anak</option>
                            <option>Spesialis Gigi</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-dark mb-2">Ketersediaan</label>
                        <select class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                            <option>Semua Waktu</option>
                            <option>Tersedia Hari Ini</option>
                            <option>Tersedia Besok</option>
                        </select>
                    </div>
                </div>
                <div class="mt-6 text-center">
                    <button class="bg-gradient-to-r from-primary to-secondary text-white px-8 py-3 rounded-full font-semibold hover:shadow-lg transition-all duration-300">
                        Cari Dokter
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Doctors Section -->
    <section class="hero-bg pb-16 px-4">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-dark mb-4">Dokter Populer</h2>
                <p class="text-xl text-gray-600">Dokter terpilih dengan rating tertinggi</p>
            </div>
            
            <div class="grid lg:grid-cols-4 md:grid-cols-2 gap-8">
                <!-- Doctor 1 -->
                <div class="doctor-card bg-white rounded-3xl p-8 shadow-xl hover-lift transition-all duration-300 relative">
                    <div class="relative mb-6">
                        <img src="https://images.unsplash.com/photo-1612349317150-e413f6a5b16d?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" 
                             alt="Dr. Budi" class="w-24 h-24 rounded-full mx-auto object-cover">
                        <div class="absolute -bottom-2 left-1/2 transform -translate-x-1/2 bg-orange-500 w-6 h-6 rounded-full border-4 border-white"></div>
                    </div>
                    <h3 class="text-xl font-bold text-dark text-center mb-2">Dr. Budi Santoso</h3>
                    <p class="text-gray-600 text-center mb-2">Spesialis Gigi</p>
                    <div class="flex justify-center mb-4">
                        <div class="flex text-yellow-400">
                            ⭐⭐⭐⭐⭐
                        </div>
                        <span class="text-sm text-gray-500 ml-2">(4.9)</span>
                    </div>
                    <button class="w-full bg-gradient-to-r from-primary to-secondary text-white py-3 rounded-full font-semibold hover:shadow-lg transition-all duration-300">
                        Lihat Profil Dokter
                    </button>
                </div>

                <!-- Doctor 2 -->
                <div class="doctor-card bg-white rounded-3xl p-8 shadow-xl hover-lift transition-all duration-300 relative">
                    <div class="relative mb-6">
                        <img src="https://images.unsplash.com/photo-1594824388347-c7bf2b5ffe9b?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" 
                             alt="Dr. Sari" class="w-24 h-24 rounded-full mx-auto object-cover">
                        <div class="absolute -bottom-2 left-1/2 transform -translate-x-1/2 bg-orange-500 w-6 h-6 rounded-full border-4 border-white"></div>
                    </div>
                    <h3 class="text-xl font-bold text-dark text-center mb-2">Dr. Sari Wijaya</h3>
                    <p class="text-gray-600 text-center mb-2">Spesialis Anak</p>
                    <div class="flex justify-center mb-4">
                        <div class="flex text-yellow-400">
                            ⭐⭐⭐⭐⭐
                        </div>
                        <span class="text-sm text-gray-500 ml-2">(4.8)</span>
                    </div>
                    <button class="w-full bg-gradient-to-r from-primary to-secondary text-white py-3 rounded-full font-semibold hover:shadow-lg transition-all duration-300">
                        Lihat Profil Dokter
                    </button>
                </div>

                <!-- Doctor 3 -->
                <div class="doctor-card bg-white rounded-3xl p-8 shadow-xl hover-lift transition-all duration-300 relative">
                    <div class="relative mb-6">
                        <img src="https://images.unsplash.com/photo-1582750433449-648ed127bb54?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" 
                             alt="Dr. Ahmad" class="w-24 h-24 rounded-full mx-auto object-cover">
                        <div class="absolute -bottom-2 left-1/2 transform -translate-x-1/2 bg-orange-500 w-6 h-6 rounded-full border-4 border-white"></div>
                    </div>
                    <h3 class="text-xl font-bold text-dark text-center mb-2">Dr. Ahmad Rizki</h3>
                    <p class="text-gray-600 text-center mb-2">Dokter Umum</p>
                    <div class="flex justify-center mb-4">
                        <div class="flex text-yellow-400">
                            ⭐⭐⭐⭐⭐
                        </div>
                        <span class="text-sm text-gray-500 ml-2">(4.7)</span>
                    </div>
                    <button class="w-full bg-gradient-to-r from-primary to-secondary text-white py-3 rounded-full font-semibold hover:shadow-lg transition-all duration-300">
                        Lihat Profil Dokter
                    </button>
                </div>

                <!-- Doctor 4 -->
                <div class="doctor-card bg-white rounded-3xl p-8 shadow-xl hover-lift transition-all duration-300 relative">
                    <div class="relative mb-6">
                        <img src="https://images.unsplash.com/photo-1559839734-2b71ea197ec2?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" 
                             alt="Dr. Maya" class="w-24 h-24 rounded-full mx-auto object-cover">
                        <div class="absolute -bottom-2 left-1/2 transform -translate-x-1/2 bg-orange-500 w-6 h-6 rounded-full border-4 border-white"></div>
                    </div>
                    <h3 class="text-xl font-bold text-dark text-center mb-2">Dr. Maya Sari</h3>
                    <p class="text-gray-600 text-center mb-2">Spesialis Gigi</p>
                    <div class="flex justify-center mb-4">
                        <div class="flex text-yellow-400">
                            ⭐⭐⭐⭐⭐
                        </div>
                        <span class="text-sm text-gray-500 ml-2">(4.9)</span>
                    </div>
                    <button class="w-full bg-gradient-to-r from-primary to-secondary text-white py-3 rounded-full font-semibold hover:shadow-lg transition-all duration-300">
                        Lihat Profil Dokter
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- All Doctors Section -->
    <section class="py-16  px-4 bg-white/50">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-dark mb-4">Semua Dokter</h2>
                <p class="text-xl text-gray-600">Temukan dokter yang tepat untuk kebutuhan Anda</p>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Doctor List Item 1 -->
                <div class="doctor-card bg-white rounded-3xl p-6 shadow-lg hover-lift transition-all duration-300">
                    <div class="flex items-center space-x-4 mb-4">
                        <img src="https://images.unsplash.com/photo-1607990281513-2c110a25bd8c?ixlib=rb-4.0.3&auto=format&fit=crop&w=200&q=80" 
                             alt="Dr. Indra" class="w-16 h-16 rounded-full object-cover">
                        <div class="flex-1">
                            <h3 class="text-lg font-bold text-dark">Dr. Indra Pratama</h3>
                            <p class="text-gray-600 text-sm">Spesialis Anak</p>
                            <div class="flex items-center mt-1">
                                <div class="flex text-yellow-400 text-sm">⭐⭐⭐⭐⭐</div>
                                <span class="text-xs text-gray-500 ml-1">(4.6)</span>
                            </div>
                        </div>
                        <div class="text-green-500 text-sm"></div>
                    </div>
                    <div class="flex justify-between items-center">
                        <button class="bg-gradient-to-r from-primary to-secondary text-white px-4 py-2 rounded-full text-sm font-semibold hover:shadow-lg transition-all duration-300">
                            Lihat Profil
                        </button>
                    </div>
                </div>

                <!-- Doctor List Item 2 -->
                <div class="doctor-card bg-white rounded-3xl p-6 shadow-lg hover-lift transition-all duration-300">
                    <div class="flex items-center space-x-4 mb-4">
                        <img src="https://images.unsplash.com/photo-1584467735871-8a74e8edb4c4?ixlib=rb-4.0.3&auto=format&fit=crop&w=200&q=80" 
                             alt="Dr. Lisa" class="w-16 h-16 rounded-full object-cover">
                        <div class="flex-1">
                            <h3 class="text-lg font-bold text-dark">Dr. Lisa Andini</h3>
                            <p class="text-gray-600 text-sm">Spesialis Gigi</p>
                            <div class="flex items-center mt-1">
                                <div class="flex text-yellow-400 text-sm">⭐⭐⭐⭐⭐</div>
                                <span class="text-xs text-gray-500 ml-1">(4.8)</span>
                            </div>
                        </div>
                        <div class="text-green-500 text-sm"></div>
                    </div>
                    <div class="flex justify-between items-center">
                        <button class="bg-gradient-to-r from-primary to-secondary text-white px-4 py-2 rounded-full text-sm font-semibold hover:shadow-lg transition-all duration-300">
                            Lihat Profil
                        </button>
                    </div>
                </div>

                <!-- Doctor List Item 3 -->
                <div class="doctor-card bg-white rounded-3xl p-6 shadow-lg hover-lift transition-all duration-300">
                    <div class="flex items-center space-x-4 mb-4">
                        <img src="https://images.unsplash.com/photo-1612349317150-e413f6a5b16d?ixlib=rb-4.0.3&auto=format&fit=crop&w=200&q=80" 
                             alt="Dr. Rahman" class="w-16 h-16 rounded-full object-cover">
                        <div class="flex-1">
                            <h3 class="text-lg font-bold text-dark">Dr. Rahman Hakim</h3>
                            <p class="text-gray-600 text-sm">Dokter Umum</p>
                            <div class="flex items-center mt-1">
                                <div class="flex text-yellow-400 text-sm">⭐⭐⭐⭐⭐</div>
                                <span class="text-xs text-gray-500 ml-1">(4.5)</span>
                            </div>
                        </div>
                        <div class="text-gray-500 text-sm"></div>
                    </div>
                    <div class="flex justify-between items-center">
                        <button class="bg-gradient-to-r from-primary to-secondary text-white px-4 py-2 rounded-full text-sm font-semibold hover:shadow-lg transition-all duration-300">
                            Lihat Profil
                        </button>
                    </div>
                </div>

                <!-- Doctor List Item 4 -->
                <div class="doctor-card bg-white rounded-3xl p-6 shadow-lg hover-lift transition-all duration-300">
                    <div class="flex items-center space-x-4 mb-4">
                        <img src="https://images.unsplash.com/photo-1582750433449-648ed127bb54?ixlib=rb-4.0.3&auto=format&fit=crop&w=200&q=80" 
                             alt="Dr. Yoga" class="w-16 h-16 rounded-full object-cover">
                        <div class="flex-1">
                            <h3 class="text-lg font-bold text-dark">Dr. Yoga Pratama</h3>
                            <p class="text-gray-600 text-sm">Spesialis Anak</p>
                            <div class="flex items-center mt-1">
                                <div class="flex text-yellow-400 text-sm">⭐⭐⭐⭐⭐</div>
                                <span class="text-xs text-gray-500 ml-1">(4.7)</span>
                            </div>
                        </div>
                        <div class="text-green-500 text-sm"></div>
                    </div>
                    <div class="flex justify-between items-center">
                        <button class="bg-gradient-to-r from-primary to-secondary text-white px-4 py-2 rounded-full text-sm font-semibold hover:shadow-lg transition-all duration-300">
                            Lihat Profil
                        </button>
                    </div>
                </div>

                <!-- Doctor List Item 5 -->
                <div class="doctor-card bg-white rounded-3xl p-6 shadow-lg hover-lift transition-all duration-300">
                    <div class="flex items-center space-x-4 mb-4">
                        <img src="https://images.unsplash.com/photo-1594824388347-c7bf2b5ffe9b?ixlib=rb-4.0.3&auto=format&fit=crop&w=200&q=80" 
                             alt="Dr. Nina" class="w-16 h-16 rounded-full object-cover">
                        <div class="flex-1">
                            <h3 class="text-lg font-bold text-dark">Dr. Nina Sari</h3>
                            <p class="text-gray-600 text-sm">Spesialis Gigi</p>
                            <div class="flex items-center mt-1">
                                <div class="flex text-yellow-400 text-sm">⭐⭐⭐⭐⭐</div>
                                <span class="text-xs text-gray-500 ml-1">(4.9)</span>
                            </div>
                        </div>
                        <div class="text-green-500 text-sm"></div>
                    </div>
                    <div class="flex justify-between items-center">
                        <button class="bg-gradient-to-r from-primary to-secondary text-white px-4 py-2 rounded-full text-sm font-semibold hover:shadow-lg transition-all duration-300">
                            Lihat Profil
                        </button>
                    </div>
                </div>

                <!-- Doctor List Item 6 -->
                <div class="doctor-card bg-white rounded-3xl p-6 shadow-lg hover-lift transition-all duration-300">
                    <div class="flex items-center space-x-4 mb-4">
                        <img src="https://images.unsplash.com/photo-1559839734-2b71ea197ec2?ixlib=rb-4.0.3&auto=format&fit=crop&w=200&q=80" 
                             alt="Dr. Reza" class="w-16 h-16 rounded-full object-cover">
                        <div class="flex-1">
                            <h3 class="text-lg font-bold text-dark">Dr. Reza Maulana</h3>
                            <p class="text-gray-600 text-sm">Dokter Umum</p>
                            <div class="flex items-center mt-1">
                                <div class="flex text-yellow-400 text-sm">⭐⭐⭐⭐⭐</div>
                                <span class="text-xs text-gray-500 ml-1">(4.6)</span>
                            </div>
                        </div>
                        <div class="text-green-500 text-sm"></div>
                    </div>
                    <div class="flex justify-between items-center">
                        <button class="bg-gradient-to-r from-primary to-secondary text-white px-4 py-2 rounded-full text-sm font-semibold hover:shadow-lg transition-all duration-300">
                            Lihat Profil
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <script>
        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Add scroll effect to navigation
        window.addEventListener('scroll', function() {
            const nav = document.querySelector('nav');
            if (nav && window.scrollY > 100) {
                nav.classList.add('bg-white/90');
            } else if (nav) {
                nav.classList.remove('bg-white/90');
            }
        });

        // Intersection Observer for animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-slide-up');
                }
            });
        }, observerOptions);

        // Observe all sections
        document.querySelectorAll('section').forEach(section => {
            observer.observe(section);
        });

        // Search functionality
        const searchInput = document.querySelector('input[type="text"]');
        const doctorCards = document.querySelectorAll('.doctor-card');

        if (searchInput) {
            searchInput.addEventListener('input', function() {
                const searchTerm = this.value.toLowerCase();
                
                doctorCards.forEach(card => {
                    const doctorName = card.querySelector('h3')?.textContent.toLowerCase() || '';
                    const specialty = card.querySelector('.text-gray-600')?.textContent.toLowerCase() || '';
                    
                    if (doctorName.includes(searchTerm) || specialty.includes(searchTerm)) {
                        card.style.display = 'block';
                    } else {
                        card.style.display = 'none';
                    }
                });
            });
        }

        // Filter functionality
        const specialtyFilter = document.querySelector('select');
        if (specialtyFilter) {
            specialtyFilter.addEventListener('change', function() {
                const selectedSpecialty = this.value;
                
                doctorCards.forEach(card => {
                    const specialty = card.querySelector('.text-gray-600')?.textContent || '';
                    
                    if (selectedSpecialty === 'Semua Spesialisasi' || specialty.includes(selectedSpecialty.replace('Spesialis ', ''))) {
                        card.style.display = 'block';
                    } else {
                        card.style.display = 'none';
                    }
                });
            });
        }
    </script>
@endsection