@extends('layout.app')

@section('content')


    <!-- Breadcrumb -->
    <section class="pt-24 pb-8 px-4" style="background: #FFF8F0;">
        <div class="max-w-7xl mx-auto">
            <nav class="flex items-center space-x-2 text-sm text-gray-600 mb-4">
            </nav>
        </div>
    </section>

    <!-- Hero Section -->
    <section class="pb-16 px-4" style="background: #FFF8F0;">
        <div class="max-w-7xl mx-auto">
            <div class="text-center animate-slide-up">
                <h1 class="text-4xl lg:text-5xl font-bold text-dark mb-6">
                    Artikel <span class="bg-gradient-to-r from-primary to-secondary bg-clip-text text-transparent">Kesehatan</span>
                </h1>
                <p class="text-xl text-gray-600 mb-8 max-w-3xl mx-auto">
                    Temukan informasi kesehatan terkini, tips hidup sehat, dan panduan medis dari para ahli kesehatan terpercaya
                </p>
            </div>
        </div>
    </section>

    <!-- Filter & Search -->
    <section class="pb-12 px-4" style="background: #FFF8F0;">
        <div class="max-w-7xl mx-auto">
            <div class="flex flex-col md:flex-row gap-4 items-center justify-between mb-8">
                <!-- Search Bar -->
                <div class="relative flex-1 max-w-md">
                    <input type="text" placeholder="Cari artikel..." 
                           class="w-full px-6 py-3 pl-12 rounded-full border border-orange-200 focus:border-primary focus:outline-none focus:ring-2 focus:ring-primary/20">
                    <div class="absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-400">
                        🔍
                    </div>
                </div>
                
                <!-- Category Filter -->
                <div class="flex flex-wrap gap-2">
                    <button class="px-6 py-2 bg-gradient-to-r from-primary to-secondary text-white rounded-full font-semibold">
                        Semua
                    </button>
                    <button class="px-6 py-2 bg-white text-dark border border-orange-200 rounded-full hover:bg-orange-50 transition-colors">
                        Jantung
                    </button>
                    <button class="px-6 py-2 bg-white text-dark border border-orange-200 rounded-full hover:bg-orange-50 transition-colors">
                        Nutrisi
                    </button>
                    <button class="px-6 py-2 bg-white text-dark border border-orange-200 rounded-full hover:bg-orange-50 transition-colors">
                        Mental
                    </button>
                    <button class="px-6 py-2 bg-white text-dark border border-orange-200 rounded-full hover:bg-orange-50 transition-colors">
                        Olahraga
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Article -->
    <section class="pb-16 px-4 bg-white">
        <div class="max-w-7xl mx-auto">
            <h2 class="text-3xl font-bold text-dark mb-8">Artikel Pilihan</h2>
            <div class="bg-white rounded-3xl overflow-hidden shadow-2xl hover-lift transition-all duration-300">
                <div class="grid lg:grid-cols-2 gap-0">
                    <div class="h-64 lg:h-full bg-gradient-to-r from-orange-400 to-orange-300 flex items-center justify-center">
                        <span class="text-8xl">🫀</span>
                    </div>
                    <div class="p-8 lg:p-12 flex flex-col justify-center">
                        <div class="flex items-center space-x-2 mb-4">
                            <span class="bg-orange-100 text-primary px-3 py-1 rounded-full text-sm font-semibold">Kesehatan Jantung</span>
                            <span class="text-gray-400">•</span>
                            <span class="text-gray-600 text-sm">5 menit baca</span>
                        </div>
                        <h3 class="text-2xl lg:text-3xl font-bold text-dark mb-4">
                            10 Cara Efektif Menjaga Kesehatan Jantung di Era Modern
                        </h3>
                        <p class="text-gray-600 mb-6 text-lg leading-relaxed">
                            Pelajari strategi terbukti secara medis untuk menjaga kesehatan jantung Anda. Dari pola makan sehat hingga olahraga yang tepat, temukan panduan lengkap untuk hidup yang lebih sehat.
                        </p>
                        <div class="flex items-center space-x-4">
                            <div class="flex items-center space-x-2">
                                <img src="https://images.unsplash.com/photo-1612349317150-e413f6a5b16d?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80" 
                                     alt="Dr. Budi" class="w-10 h-10 rounded-full object-cover">
                                <div>
                                    <p class="font-semibold text-dark text-sm">Dr. Budi Santoso</p>
                                    <p class="text-gray-500 text-xs">Spesialis Jantung</p>
                                </div>
                            </div>
                            <span class="text-gray-400">•</span>
                            <span class="text-gray-600 text-sm">2 hari yang lalu</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Articles Grid -->
    <section class="pb-16 px-4 bg-white">
        <div class="max-w-7xl mx-auto">
            <div class="flex justify-between items-center mb-12">
                <h2 class="text-3xl font-bold text-dark">Artikel Terbaru</h2>
                <div class="flex items-center space-x-2">
                    <span class="text-gray-600">Urutkan:</span>
                    <select class="bg-white border border-orange-200 rounded-lg px-4 py-2 focus:outline-none focus:border-primary">
                        <option>Terbaru</option>
                        <option>Terpopuler</option>
                        <option>A-Z</option>
                    </select>
                </div>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Article 1 -->
                <article class="bg-white rounded-3xl overflow-hidden shadow-xl hover-lift transition-all duration-300">
                    <div class="h-48 bg-gradient-to-r from-orange-400 to-orange-300 flex items-center justify-center">
                        <span class="text-6xl">❤</span>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center space-x-2 mb-3">
                            <span class="bg-orange-100 text-primary px-2 py-1 rounded-full text-xs font-semibold">Jantung</span>
                            <span class="text-gray-500 text-xs">3 menit baca</span>
                        </div>
                        <h3 class="text-xl font-bold text-dark mb-3">Tips Menjaga Kesehatan Jantung</h3>
                        <p class="text-gray-600 mb-4 text-sm leading-relaxed">
                            Pelajari cara menjaga kesehatan jantung dengan pola hidup sehat dan olahraga teratur untuk hidup yang lebih berkualitas.
                        </p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-2">
                                <img src="https://images.unsplash.com/photo-1612349317150-e413f6a5b16d?ixlib=rb-4.0.3&auto=format&fit=crop&w=50&q=80" 
                                     alt="Author" class="w-6 h-6 rounded-full object-cover">
                                <span class="text-gray-600 text-xs">Dr. Budi</span>
                            </div>
                            <a href="#" class="text-primary font-semibold hover:underline text-sm">Baca →</a>
                        </div>
                    </div>
                </article>

                <!-- Article 2 -->
                <article class="bg-white rounded-3xl overflow-hidden shadow-xl hover-lift transition-all duration-300">
                    <div class="h-48 bg-gradient-to-r from-orange-300 to-orange-200 flex items-center justify-center">
                        <span class="text-6xl">🥗</span>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center space-x-2 mb-3">
                            <span class="bg-orange-100 text-primary px-2 py-1 rounded-full text-xs font-semibold">Nutrisi</span>
                            <span class="text-gray-500 text-xs">5 menit baca</span>
                        </div>
                        <h3 class="text-xl font-bold text-dark mb-3">Nutrisi Seimbang untuk Imunitas</h3>
                        <p class="text-gray-600 mb-4 text-sm leading-relaxed">
                            Temukan makanan bergizi yang dapat meningkatkan sistem kekebalan tubuh Anda secara alami dan efektif.
                        </p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-2">
                                <img src="https://images.unsplash.com/photo-1594824388347-c7bf2b5ffe9b?ixlib=rb-4.0.3&auto=format&fit=crop&w=50&q=80" 
                                     alt="Author" class="w-6 h-6 rounded-full object-cover">
                                <span class="text-gray-600 text-xs">Dr. Sari</span>
                            </div>
                            <a href="#" class="text-primary font-semibold hover:underline text-sm">Baca →</a>
                        </div>
                    </div>
                </article>

                <!-- Article 3 -->
                <article class="bg-white rounded-3xl overflow-hidden shadow-xl hover-lift transition-all duration-300">
                    <div class="h-48 bg-gradient-to-r from-orange-500 to-orange-400 flex items-center justify-center">
                        <span class="text-6xl">🧘</span>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center space-x-2 mb-3">
                            <span class="bg-orange-100 text-primary px-2 py-1 rounded-full text-xs font-semibold">Mental</span>
                            <span class="text-gray-500 text-xs">4 menit baca</span>
                        </div>
                        <h3 class="text-xl font-bold text-dark mb-3">Pentingnya Kesehatan Mental</h3>
                        <p class="text-gray-600 mb-4 text-sm leading-relaxed">
                            Cara menjaga kesehatan mental dan mengelola stress dalam kehidupan sehari-hari untuk keseimbangan hidup.
                        </p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-2">
                                <img src="https://images.unsplash.com/photo-1582750433449-648ed127bb54?ixlib=rb-4.0.3&auto=format&fit=crop&w=50&q=80" 
                                     alt="Author" class="w-6 h-6 rounded-full object-cover">
                                <span class="text-gray-600 text-xs">Dr. Ahmad</span>
                            </div>
                            <a href="#" class="text-primary font-semibold hover:underline text-sm">Baca →</a>
                        </div>
                    </div>
                </article>

                <!-- Article 4 -->
                <article class="bg-white rounded-3xl overflow-hidden shadow-xl hover-lift transition-all duration-300">
                    <div class="h-48 bg-gradient-to-r from-orange-400 to-orange-500 flex items-center justify-center">
                        <span class="text-6xl">🏃‍♂</span>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center space-x-2 mb-3">
                            <span class="bg-orange-100 text-primary px-2 py-1 rounded-full text-xs font-semibold">Olahraga</span>
                            <span class="text-gray-500 text-xs">6 menit baca</span>
                        </div>
                        <h3 class="text-xl font-bold text-dark mb-3">Olahraga Untuk Pemula</h3>
                        <p class="text-gray-600 mb-4 text-sm leading-relaxed">
                            Panduan lengkap memulai rutinitas olahraga yang aman dan efektif untuk pemula dari segala usia.
                        </p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-2">
                                <img src="https://images.unsplash.com/photo-1612349317150-e413f6a5b16d?ixlib=rb-4.0.3&auto=format&fit=crop&w=50&q=80" 
                                     alt="Author" class="w-6 h-6 rounded-full object-cover">
                                <span class="text-gray-600 text-xs">Dr. Budi</span>
                            </div>
                            <a href="#" class="text-primary font-semibold hover:underline text-sm">Baca →</a>
                        </div>
                    </div>
                </article>

                <!-- Article 5 -->
                <article class="bg-white rounded-3xl overflow-hidden shadow-xl hover-lift transition-all duration-300">
                    <div class="h-48 bg-gradient-to-r from-orange-300 to-orange-400 flex items-center justify-center">
                        <span class="text-6xl">😴</span>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center space-x-2 mb-3">
                            <span class="bg-orange-100 text-primary px-2 py-1 rounded-full text-xs font-semibold">Tidur</span>
                            <span class="text-gray-500 text-xs">4 menit baca</span>
                        </div>
                        <h3 class="text-xl font-bold text-dark mb-3">Kualitas Tidur yang Baik</h3>
                        <p class="text-gray-600 mb-4 text-sm leading-relaxed">
                            Tips dan trik untuk mendapatkan tidur berkualitas yang memulihkan tubuh dan pikiran Anda setiap malam.
                        </p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-2">
                                <img src="https://images.unsplash.com/photo-1594824388347-c7bf2b5ffe9b?ixlib=rb-4.0.3&auto=format&fit=crop&w=50&q=80" 
                                     alt="Author" class="w-6 h-6 rounded-full object-cover">
                                <span class="text-gray-600 text-xs">Dr. Sari</span>
                            </div>
                            <a href="#" class="text-primary font-semibold hover:underline text-sm">Baca →</a>
                        </div>
                    </div>
                </article>

                <!-- Article 6 -->
                <article class="bg-white rounded-3xl overflow-hidden shadow-xl hover-lift transition-all duration-300">
                    <div class="h-48 bg-gradient-to-r from-orange-200 to-orange-300 flex items-center justify-center">
                        <span class="text-6xl">🩺</span>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center space-x-2 mb-3">
                            <span class="bg-orange-100 text-primary px-2 py-1 rounded-full text-xs font-semibold">Pencegahan</span>
                            <span class="text-gray-500 text-xs">7 menit baca</span>
                        </div>
                        <h3 class="text-xl font-bold text-dark mb-3">Pentingnya Medical Check-up</h3>
                        <p class="text-gray-600 mb-4 text-sm leading-relaxed">
                            Mengapa pemeriksaan kesehatan rutin penting untuk deteksi dini penyakit dan menjaga kesehatan optimal.
                        </p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-2">
                                <img src="https://images.unsplash.com/photo-1582750433449-648ed127bb54?ixlib=rb-4.0.3&auto=format&fit=crop&w=50&q=80" 
                                     alt="Author" class="w-6 h-6 rounded-full object-cover">
                                <span class="text-gray-600 text-xs">Dr. Ahmad</span>
                            </div>
                            <a href="#" class="text-primary font-semibold hover:underline text-sm">Baca →</a>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- Pagination -->
    <section class="pb-16 px-4 bg-white">
        <div class="max-w-7xl mx-auto">
            <div class="flex justify-center items-center space-x-2">
                <button class="px-4 py-2 text-gray-400 hover:text-primary transition-colors">
                    ‹ Sebelumnya
                </button>
                <button class="px-4 py-2 bg-gradient-to-r from-primary to-secondary text-white rounded-lg">1</button>
                <button class="px-4 py-2 text-gray-600 hover:text-primary transition-colors">2</button>
                <button class="px-4 py-2 text-gray-600 hover:text-primary transition-colors">3</button>
                <span class="px-2 text-gray-400">...</span>
                <button class="px-4 py-2 text-gray-600 hover:text-primary transition-colors">10</button>
                <button class="px-4 py-2 text-gray-600 hover:text-primary transition-colors">
                    Selanjutnya ›
                </button>
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
                nav.classList.add('bg-white/90');
            } else {
                nav.classList.remove('bg-white/90');
            }
        });

        // Search functionality
        const searchInput = document.querySelector('input[type="text"]');
        const articles = document.querySelectorAll('article');
        
        searchInput.addEventListener('input', function() {
            const searchTerm = this.value.toLowerCase();
            
            articles.forEach(article => {
                const title = article.querySelector('h3').textContent.toLowerCase();
                const content = article.querySelector('p').textContent.toLowerCase();
                
                if (title.includes(searchTerm) || content.includes(searchTerm)) {
                    article.style.display = 'block';
                    article.classList.add('animate-fade-in');
                } else {
                    article.style.display = 'none';
                }
            });
        });

        // Category filter functionality
        const categoryButtons = document.querySelectorAll('button');
        const categoryFilter = Array.from(categoryButtons).filter(btn => 
            btn.textContent.includes('Semua') || 
            btn.textContent.includes('Jantung') || 
            btn.textContent.includes('Nutrisi') || 
            btn.textContent.includes('Mental') || 
            btn.textContent.includes('Olahraga')
        );

        categoryFilter.forEach(button => {
            button.addEventListener('click', function() {
                // Remove active class from all buttons
                categoryFilter.forEach(btn => {
                    btn.classList.remove('bg-gradient-to-r', 'from-primary', 'to-secondary', 'text-white');
                    btn.classList.add('bg-white', 'text-dark', 'border', 'border-orange-200');
                });
                
                // Add active class to clicked button
                this.classList.add('bg-gradient-to-r', 'from-primary', 'to-secondary', 'text-white');
                this.classList.remove('bg-white', 'text-dark', 'border', 'border-orange-200');
                
                const category = this.textContent.trim();
                
                articles.forEach(article => {
                    const articleCategory = article.querySelector('.bg-orange-100').textContent.trim();
                    
                    if (category === 'Semua' || articleCategory === category) {
                        article.style.display = 'block';
                        article.classList.add('animate-fade-in');
                    } else {
                        article.style.display = 'none';
                    }
                });
            });
        });

        // Sort functionality
        const sortSelect = document.querySelector('select');
        const articlesContainer = document.querySelector('.grid');
        
        sortSelect.addEventListener('change', function() {
            const sortValue = this.value;
            const articlesArray = Array.from(articles);
            
            articlesArray.sort((a, b) => {
                if (sortValue === 'Terbaru') {
                    // Sort by newest (you can implement actual date sorting here)
                    return 0;
                } else if (sortValue === 'A-Z') {
                    const titleA = a.querySelector('h3').textContent;
                    const titleB = b.querySelector('h3').textContent;
                    return titleA.localeCompare(titleB);
                } else if (sortValue === 'Terpopuler') {
                    // Sort by popularity (you can implement actual popularity sorting here)
                    return 0;
                }
            });
            
            // Clear container and re-append sorted articles
            articlesContainer.innerHTML = '';
            articlesArray.forEach(article => {
                articlesContainer.appendChild(article);
            });
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

        // Observe all sections and articles
        document.querySelectorAll('section, article').forEach(element => {
            observer.observe(element);
        });

        // Newsletter form submission
        const newsletterForm = document.querySelector('.flex-col');
        const emailInput = newsletterForm ? newsletterForm.querySelector('input[type="email"]') : null;
        const subscribeBtn = newsletterForm ? newsletterForm.querySelector('button') : null;

        if (subscribeBtn) {
            subscribeBtn.addEventListener('click', function(e) {
                e.preventDefault();
                const email = emailInput.value.trim();
                
                if (email && email.includes('@')) {
                    // Simulate successful subscription
                    this.textContent = 'Berhasil! ✓';
                    this.classList.add('bg-green-500');
                    this.classList.remove('from-primary', 'to-secondary');
                    
                    setTimeout(() => {
                        this.textContent = 'Berlangganan';
                        this.classList.remove('bg-green-500');
                        this.classList.add('bg-gradient-to-r', 'from-primary', 'to-secondary');
                        emailInput.value = '';
                    }, 2000);
                } else {
                    // Show error
                    emailInput.classList.add('border-red-500');
                    setTimeout(() => {
                        emailInput.classList.remove('border-red-500');
                    }, 2000);
                }
            });
        }

        // Lazy loading for images
        const images = document.querySelectorAll('img');
        const imageObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    img.classList.add('animate-fade-in');
                    observer.unobserve(img);
                }
            });
        });

        images.forEach(img => {
            imageObserver.observe(img);
        });

        // Reading time calculator (simple implementation)
        articles.forEach(article => {
            const content = article.querySelector('p').textContent;
            const wordCount = content.split(' ').length;
            const readingTime = Math.ceil(wordCount / 200); // Assuming 200 words per minute
            
            const timeElement = article.querySelector('.text-gray-500');
            if (timeElement && !timeElement.textContent.includes('menit')) {
                timeElement.textContent = `${readingTime} menit baca`;
            }
        });
    </script>
@endsection