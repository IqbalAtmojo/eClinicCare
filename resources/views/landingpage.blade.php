@extends('layout.app')


@section('content')

    <!-- Hero Section -->
    <section id="beranda" class="hero-bg pt-24 pb-8 px-4">
        <div class="max-w-7xl mx-auto">
            <div class="grid lg:grid-cols-2 gap-8 items-center">
                <div class="animate-slide-up">
                    <h1 class="text-4xl lg:text-5xl font-bold text-dark mb-4 leading-tight">
                        Antri Mudah<br>
                        <span class="bg-gradient-to-r from-primary to-secondary bg-clip-text text-transparent">
                            Sehat Terjaga
                        </span>
                    </h1>
                    <p class="text-lg text-gray-600 mb-6 leading-relaxed">
                        Dapatkan layanan kesehatan terpercaya dengan 
                        dokter berpengalaman, perawatan berkualitas, hidup 
                        sehat terjamin!
                    </p>
                    <button class="bg-gradient-to-r from-primary to-secondary text-white px-6 py-3 rounded-full text-sm font-semibold hover:shadow-xl transition-all duration-300 hover-lift">
                        Ambil Antrian Sekarang
                    </button>
                </div>
                
                <div class="relative animate-fade-in">
    <img src="https://images.unsplash.com/photo-1559839734-2b71ea197ec2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=80" 
         alt="Doctor" 
         class="w-200 h-100 object-cover rounded-2xl shadow-md"
         style="border: 20px solid #ffffff;">
</div>



            </div>
        </div>
    </section>
    <!-- Background Transition -->
    <section class="hero-bg py-8 px-4"></section>

    <!-- Features Section -->
    <section class="bg-white py-12 px-4">
        <div class="max-w-7xl mx-auto">
            <div class="grid md:grid-cols-2 gap-6">
                <div class="flex items-start space-x-4 p-6 rounded-2xl bg-white shadow-md hover-lift">
                    <div class="w-12 h-12 bg-gradient-to-r from-orange-400 to-orange-500 rounded-xl flex items-center justify-center flex-shrink-0">
                        <span class="text-white text-xl">💡</span>
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-dark mb-2">Tentang Klinik</h3>
                        <p class="text-gray-600 text-sm">Klinik modern dengan fasilitas lengkap dan dokter berpengalaman untuk memberikan layanan kesehatan terbaik.</p>
                    </div>
                </div>
                
                <div class="flex items-start space-x-4 p-6 rounded-2xl bg-white shadow-md hover-lift">
                    <div class="w-12 h-12 bg-gradient-to-r from-orange-500 to-orange-600 rounded-xl flex items-center justify-center flex-shrink-0">
                        <span class="text-white text-xl">🎯</span>
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-dark mb-2">Visi & Misi</h3>
                        <p class="text-gray-600 text-sm">Menjadi pusat layanan kesehatan terdepan yang mengutamakan kepuasan pasien dan kualitas pelayanan.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    

    <!-- Doctors Section -->
    <section id="dokter" class="bg-white py-8 px-4">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-8">
                <h2 class="text-3xl font-bold text-dark mb-2">Dokter Populer</h2>
                <p class="text-gray-600">Tim dokter Berpengalaman dan Terpercaya</p>
            </div>
            
            <div class="grid md:grid-cols-3 gap-6">
                <div class="bg-white rounded-2xl p-6 shadow-md hover-lift transition-all duration-300 text-center">
                    <div class="relative mb-4">
                        <img src="https://images.unsplash.com/photo-1612349317150-e413f6a5b16d?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" 
                             alt="Dr. Budi" class="w-20 h-20 rounded-full mx-auto object-cover">
                    </div>
                    <h3 class="text-lg font-bold text-dark mb-1">Dr. Budi</h3>
                    <p class="text-gray-500 text-sm mb-2">Spesialis gigi</p>
                    <div class="flex justify-center mb-3 text-sm">
                        <span class="text-orange-400">★</span>
                        <span class="text-gray-400 ml-1">5.0 (2K+ Review)</span>
                    </div>
                    <button class="w-full bg-gradient-to-r from-primary to-secondary text-white py-2 rounded-full text-sm font-semibold hover:shadow-lg transition-all duration-300">
                        Lihat Profil
                    </button>
                </div>
                
                <div class="bg-white rounded-2xl p-6 shadow-md hover-lift transition-all duration-300 text-center">
                    <div class="relative mb-4">
                        <img src="https://images.unsplash.com/photo-1594824388347-c7bf2b5ffe9b?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" 
                             alt="Dr. Sari" class="w-20 h-20 rounded-full mx-auto object-cover">
                    </div>
                    <h3 class="text-lg font-bold text-dark mb-1">Dr. Sari</h3>
                    <p class="text-gray-500 text-sm mb-2">Spesialis anak</p>
                    <div class="flex justify-center mb-3 text-sm">
                        <span class="text-orange-400">★</span>
                        <span class="text-gray-400 ml-1">5.0 (2K+ Review)</span>
                    </div>
                    <button class="w-full bg-gradient-to-r from-primary to-secondary text-white py-2 rounded-full text-sm font-semibold hover:shadow-lg transition-all duration-300">
                        Lihat Profil
                    </button>
                </div>
                
                <div class="bg-white rounded-2xl p-6 shadow-md hover-lift transition-all duration-300 text-center">
                    <div class="relative mb-4">
                        <img src="https://images.unsplash.com/photo-1582750433449-648ed127bb54?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" 
                             alt="Dr. Ahmad" class="w-20 h-20 rounded-full mx-auto object-cover">
                    </div>
                    <h3 class="text-lg font-bold text-dark mb-1">Dr. Ahmad</h3>
                    <p class="text-gray-500 text-sm mb-2">Dokter umum</p>
                    <div class="flex justify-center mb-3 text-sm">
                        <span class="text-orange-400">★</span>
                        <span class="text-gray-400 ml-1">5.0 (2K+ Review)</span>
                    </div>
                    <button class="w-full bg-gradient-to-r from-primary to-secondary text-white py-2 rounded-full text-sm font-semibold hover:shadow-lg transition-all duration-300">
                        Lihat Profil
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Articles Section -->
    <section id="artikel" class="bg-white py-16 px-4">
        <div class="max-w-7xl mx-auto">
            <div class="flex justify-between items-center mb-12">
                <div>
                    <h2 class="text-3xl font-bold text-dark mb-1">Artikel Terbaru</h2>
                    <p class="text-gray-600">Tips kesehatan dan informasi medis terkini</p>
                </div>
                <button class="bg-gradient-to-r from-primary to-secondary text-white px-4 py-2 rounded-full text-sm font-semibold hover:shadow-lg transition-all duration-300">
                    Lihat Semua
                </button>
            </div>
            
            <div class="grid md:grid-cols-3 gap-8">
                <article class="bg-white rounded-2xl overflow-hidden shadow-md hover-lift transition-all duration-300">
                    <div class="h-48 bg-gradient-to-r from-orange-500 to-orange-400 flex items-center justify-center">
                        <span class="text-7xl">❤</span>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-dark mb-3">Tips Menjaga Kesehatan Jantung</h3>
                        <p class="text-gray-600 text-sm mb-4 leading-relaxed">Pelajari cara menjaga kesehatan jantung dengan pola hidup sehat dan olahraga teratur untuk hidup yang lebih berkualitas.</p>
                        <a href="#" class="text-primary text-sm font-semibold hover:underline">Baca Selengkapnya →</a>
                    </div>
                </article>
                
                <article class="bg-white rounded-2xl overflow-hidden shadow-md hover-lift transition-all duration-300">
                    <div class="h-48 bg-gradient-to-r from-orange-500 to-orange-400 flex items-center justify-center">
                        <span class="text-7xl">🥗</span>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-dark mb-3">Nutrisi Seimbang untuk Imunitas</h3>
                        <p class="text-gray-600 text-sm mb-4 leading-relaxed">Temukan makanan bergizi yang dapat meningkatkan sistem kekebalan tubuh Anda dan menjaga kesehatan optimal.</p>
                        <a href="#" class="text-primary text-sm font-semibold hover:underline">Baca Selengkapnya →</a>
                    </div>
                </article>
                
                <article class="bg-white rounded-2xl overflow-hidden shadow-md hover-lift transition-all duration-300">
                    <div class="h-48 bg-gradient-to-r from-orange-500 to-orange-400 flex items-center justify-center">
                        <span class="text-7xl">🧘</span>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-dark mb-3">Pentingnya Kesehatan Mental</h3>
                        <p class="text-gray-600 text-sm mb-4 leading-relaxed">Cara menjaga kesehatan mental dan mengelola stress dalam kehidupan sehari-hari untuk keseimbangan hidup.</p>
                        <a href="#" class="text-primary text-sm font-semibold hover:underline">Baca Selengkapnya →</a>
                    </div>
                </article>
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
            if (window.scrollY > 100) {
                nav.classList.add('bg-white/95');
            } else {
                nav.classList.remove('bg-white/95');
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
    </script>
@endsection