@extends('layout.app')

@section('content')
    <!-- Hero Section -->
    <section class="bg-white py-16">
        <div class="max-w-4xl mx-auto text-center px-4">
            <h1 class="text-5xl font-bold text-gray-900 mb-4">
                Hubungi <span class="text-orange-500">Kami</span>
            </h1>
            <p class="text-gray-600 text-lg max-w-2xl mx-auto">
                Siap membantu Anda 24/7. Hubungi tim medis profesional kami untuk konsultasi, 
                appointment, atau pertanyaan kesehatan lainnya
            </p>
        </div>
    </section>

    <!-- Main Content -->
    <section class="py-12 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <!-- Contact Form -->
                <div class="bg-white rounded-xl shadow-sm p-8 border border-gray-100">
                    <h2 class="text-2xl font-semibold text-gray-900 mb-4">Kirim Pesan</h2>
                    <p class="text-gray-600 mb-6">
                        Sampaikan pertanyaan atau keluhan Anda, tim kami akan merespons dalam 24 jam
                    </p>
                    
                    <form class="space-y-4">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Nama Lengkap *</label>
                                <input type="text" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-1 focus:ring-orange-500 focus:border-orange-500">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">No. Telepon *</label>
                                <input type="tel" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-1 focus:ring-orange-500 focus:border-orange-500">
                            </div>
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Email *</label>
                            <input type="email" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-1 focus:ring-orange-500 focus:border-orange-500">
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Subjek</label>
                            <input type="text" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-1 focus:ring-orange-500 focus:border-orange-500">
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Pesan *</label>
                            <textarea rows="4" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-1 focus:ring-orange-500 focus:border-orange-500 resize-none"></textarea>
                            <div class="text-right text-xs text-gray-500 mt-1">0/500 karakter</div>
                        </div>
                        
                        <div class="flex items-start mt-4">
                            <input type="checkbox" class="mt-1 mr-2 h-4 w-4 text-orange-500 border-gray-300 rounded focus:ring-orange-500">
                            <label class="text-sm text-gray-600">
                                Saya setuju dengan kebijakan privasi dan syarat & ketentuan yang berlaku.
                            </label>
                        </div>
                        
                        <button type="submit" class="w-full bg-gradient-to-r from-orange-500 to-orange-400 text-white py-3 px-4 rounded-lg font-medium hover:from-orange-600 hover:to-orange-500 transition-all duration-300">
                            Kirim Pesan
                        </button>
                    </form>
                </div>

                <!-- Location Info -->
                <div class="space-y-6">
                    <!-- Map -->
                    <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-100">
                        <h3 class="text-xl font-semibold text-gray-900 mb-4">Lokasi Kami</h3>
                        <div class="bg-gray-100 rounded-lg h-64 relative overflow-hidden">
                            <!-- Realistic Google Maps style -->
                            <div class="absolute inset-0 bg-gradient-to-br from-green-50 via-blue-50 to-green-100">
                                <!-- Main roads -->
                                <div class="absolute top-16 left-0 w-full h-2 bg-white border-t border-b border-gray-300"></div>
                                <div class="absolute top-48 left-0 w-full h-2 bg-white border-t border-b border-gray-300"></div>
                                <div class="absolute top-0 left-32 h-full w-2 bg-white border-l border-r border-gray-300"></div>
                                <div class="absolute top-0 left-48 h-full w-2 bg-white border-l border-r border-gray-300"></div>
                                
                                <!-- Smaller streets -->
                                <div class="absolute top-24 left-0 w-full h-1 bg-gray-200"></div>
                                <div class="absolute top-32 left-0 w-full h-1 bg-gray-200"></div>
                                <div class="absolute top-40 left-0 w-full h-1 bg-gray-200"></div>
                                <div class="absolute top-0 left-20 h-full w-1 bg-gray-200"></div>
                                <div class="absolute top-0 left-40 h-full w-1 bg-gray-200"></div>
                                <div class="absolute top-0 left-56 h-full w-1 bg-gray-200"></div>
                                
                                <!-- Buildings and blocks -->
                                <div class="absolute top-4 left-4 w-12 h-12 bg-green-200 border border-green-300 rounded-sm"></div>
                                <div class="absolute top-20 left-8 w-20 h-8 bg-gray-300 border border-gray-400 rounded-sm"></div>
                                <div class="absolute top-36 left-16 w-16 h-12 bg-blue-200 border border-blue-300 rounded-sm"></div>
                                <div class="absolute top-52 left-24 w-14 h-10 bg-yellow-200 border border-yellow-300 rounded-sm"></div>
                                <div class="absolute top-12 left-52 w-18 h-16 bg-purple-200 border border-purple-300 rounded-sm"></div>
                                <div class="absolute top-44 left-56 w-12 h-14 bg-pink-200 border border-pink-300 rounded-sm"></div>
                                
                                <!-- Parks/green areas -->
                                <div class="absolute top-28 left-36 w-8 h-8 bg-green-300 rounded-full border border-green-400"></div>
                                <div class="absolute top-8 left-44 w-6 h-6 bg-green-300 rounded-full border border-green-400"></div>
                                
                                <!-- Water bodies -->
                                <div class="absolute top-52 left-36 w-16 h-6 bg-blue-300 rounded-lg border border-blue-400"></div>
                                
                                <!-- Location markers (other places) -->
                                <div class="absolute top-20 left-28 w-3 h-3 bg-blue-600 rounded-full border-2 border-white shadow-md"></div>
                                <div class="absolute top-36 left-52 w-3 h-3 bg-green-600 rounded-full border-2 border-white shadow-md"></div>
                                <div class="absolute top-48 left-16 w-3 h-3 bg-purple-600 rounded-full border-2 border-white shadow-md"></div>
                                <div class="absolute top-12 left-60 w-3 h-3 bg-red-600 rounded-full border-2 border-white shadow-md"></div>
                                
                                <!-- Main location pin (QueueClinic) -->
                                <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                                    <div class="relative">
                                        <!-- Pin shadow -->
                                        <div class="absolute top-8 left-1/2 transform -translate-x-1/2 w-4 h-2 bg-black opacity-20 rounded-full blur-sm"></div>
                                        <!-- Pin body -->
                                        <div class="w-8 h-8 bg-red-500 rounded-full border-3 border-white shadow-lg relative">
                                            <div class="absolute inset-0 bg-red-500 rounded-full"></div>
                                            <div class="absolute inset-1 bg-red-400 rounded-full"></div>
                                        </div>
                                        <!-- Pin tip -->
                                        <div class="absolute -bottom-2 left-1/2 transform -translate-x-1/2 w-0 h-0 border-l-4 border-r-4 border-t-6 border-l-transparent border-r-transparent border-t-red-500"></div>
                                    </div>
                                </div>
                                
                                <!-- Google Maps style text labels -->
                                <div class="absolute top-8 left-8 text-xs text-gray-700 font-medium bg-white bg-opacity-80 px-1 rounded">Jl. Sudirman</div>
                                <div class="absolute top-56 left-40 text-xs text-gray-700 font-medium bg-white bg-opacity-80 px-1 rounded">Jl. Thamrin</div>
                                <div class="absolute top-32 left-12 text-xs text-gray-700 font-medium bg-white bg-opacity-80 px-1 rounded rotate-90 origin-left">Jl. MH Thamrin</div>
                                
                                <!-- Zoom controls -->
                                <div class="absolute top-4 right-4 bg-white rounded-lg shadow-md border border-gray-200">
                                    <button class="block w-8 h-8 flex items-center justify-center text-gray-600 hover:bg-gray-50 border-b border-gray-200">+</button>
                                    <button class="block w-8 h-8 flex items-center justify-center text-gray-600 hover:bg-gray-50">−</button>
                                </div>
                                
                                <!-- Google logo -->
                                <div class="absolute bottom-2 left-2 text-xs text-gray-500 font-bold">Google</div>
                            </div>
                        </div>
                    </div>

                    <!-- Location Details -->
                    <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-100">
                        <h3 class="text-xl font-semibold text-gray-900 mb-4">Informasi Lokasi</h3>
                        
                        <div class="space-y-4">
                            <div class="flex items-start">
                                <div class="w-10 h-10 bg-orange-500 rounded-full flex items-center justify-center mr-4 flex-shrink-0 mt-1">
                                    <span class="text-white font-bold text-sm">A</span>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-900 mb-1">Alamat Lengkap</h4>
                                    <p class="text-gray-600 text-sm">Jl. Kesehatan Raya No. 123</p>
                                    <p class="text-gray-600 text-sm">Jakarta Pusat, DKI Jakarta 10110</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start">
                                <div class="w-10 h-10 bg-red-500 rounded-full flex items-center justify-center mr-4 flex-shrink-0 mt-1">
                                    <span class="text-white font-bold text-sm">T</span>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-900 mb-1">Akses Transportasi</h4>
                                    <p class="text-gray-600 text-sm">• 5 menit dari Stasiun MRT Bundaran HI</p>
                                    <p class="text-gray-600 text-sm">• 10 menit dari Halte TransJakarta Monas</p>
                                    <p class="text-gray-600 text-sm">• Parkir tersedia</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start">
                                <div class="w-10 h-10 bg-orange-400 rounded-full flex items-center justify-center mr-4 flex-shrink-0 mt-1">
                                    <span class="text-white font-bold text-sm">J</span>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-900 mb-1">Jam Operasional</h4>
                                    <p class="text-gray-600 text-sm">Senin - Jumat: 08:00 - 20:00</p>
                                    <p class="text-gray-600 text-sm">Sabtu - Minggu: 08:00 - 18:00</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-12 bg-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-8">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Pertanyaan yang Sering Diajukan</h2>
                <p class="text-gray-600">Temukan jawaban untuk pertanyaan umum tentang layanan kami</p>
            </div>
            
            <div class="space-y-3">
                <div class="border border-gray-200 rounded-xl bg-white">
                    <button class="w-full px-6 py-4 text-left flex justify-between items-center hover:bg-gray-50 transition-colors duration-200 faq-toggle rounded-xl">
                        <span class="font-medium text-gray-900">Bagaimana cara membuat appointment?</span>
                        <span class="text-orange-500 text-xl font-light">+</span>
                    </button>
                    <div class="px-6 pb-4 text-gray-600 text-sm hidden faq-content">
                        <p>Anda dapat membuat appointment dengan menghubungi nomor telepon kami di (021) 1234-5678, melalui WhatsApp, atau datang langsung ke klinik. Tim customer service kami siap membantu Anda dalam menjadwalkan konsultasi dengan dokter yang sesuai dengan kebutuhan Anda.</p>
                    </div>
                </div>
                
                <div class="border border-gray-200 rounded-xl bg-white">
                    <button class="w-full px-6 py-4 text-left flex justify-between items-center hover:bg-gray-50 transition-colors duration-200 faq-toggle rounded-xl">
                        <span class="font-medium text-gray-900">Apakah layanan tersedia 24 jam?</span>
                        <span class="text-orange-500 text-xl font-light">+</span>
                    </button>
                    <div class="px-6 pb-4 text-gray-600 text-sm hidden faq-content">
                        <p>Layanan konsultasi online kami tersedia 24/7, namun untuk kunjungan ke klinik mengikuti jam operasional yang telah ditentukan. Untuk keadaan darurat, kami memiliki layanan rujukan ke rumah sakit partner kami.</p>
                    </div>
                </div>
                
                <div class="border border-gray-200 rounded-xl bg-white">
                    <button class="w-full px-6 py-4 text-left flex justify-between items-center hover:bg-gray-50 transition-colors duration-200 faq-toggle rounded-xl">
                        <span class="font-medium text-gray-900">Metode pembayaran apa saja yang diterima?</span>
                        <span class="text-orange-500 text-xl font-light">+</span>
                    </button>
                    <div class="px-6 pb-4 text-gray-600 text-sm hidden faq-content">
                        <p>Kami menerima berbagai metode pembayaran termasuk tunai, kartu debit/kredit, transfer bank, e-wallet (GoPay, OVO, DANA), dan asuransi kesehatan yang bekerja sama dengan kami.</p>
                    </div>
                </div>
                
                <div class="border border-gray-200 rounded-xl bg-white">
                    <button class="w-full px-6 py-4 text-left flex justify-between items-center hover:bg-gray-50 transition-colors duration-200 faq-toggle rounded-xl">
                        <span class="font-medium text-gray-900">Apakah hasil pemeriksaan bisa diakses online?</span>
                        <span class="text-orange-500 text-xl font-light">+</span>
                    </button>
                    <div class="px-6 pb-4 text-gray-600 text-sm hidden faq-content">
                        <p>Ya, semua hasil pemeriksaan dan rekam medis dapat diakses melalui aplikasi QueueClinic atau portal pasien online kami. Anda akan mendapat notifikasi ketika hasil sudah tersedia.</p>
                    </div>
                </div>
                
                <div class="border border-gray-200 rounded-xl bg-white">
                    <button class="w-full px-6 py-4 text-left flex justify-between items-center hover:bg-gray-50 transition-colors duration-200 faq-toggle rounded-xl">
                        <span class="font-medium text-gray-900">Bagaimana jika perlu membatalkan appointment?</span>
                        <span class="text-orange-500 text-xl font-light">+</span>
                    </button>
                    <div class="px-6 pb-4 text-gray-600 text-sm hidden faq-content">
                        <p>Pembatalan appointment dapat dilakukan minimal 2 jam sebelum jadwal konsultasi melalui aplikasi, telepon, atau WhatsApp. Untuk pembatalan mendadak karena keadaan darurat, silakan hubungi tim customer service kami.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <script>
        // Character counter for textarea
        const textarea = document.querySelector('textarea');
        const counter = textarea.nextElementSibling;
        
        textarea.addEventListener('input', function() {
            const currentLength = this.value.length;
            counter.textContent = `${currentLength}/500 karakter`;
            
            if (currentLength >= 450) {
                counter.classList.add('text-orange-500');
            } else {
                counter.classList.remove('text-orange-500');
            }
        });

        // FAQ Toggle Functionality
        document.querySelectorAll('.faq-toggle').forEach(toggle => {
            toggle.addEventListener('click', function() {
                const content = this.nextElementSibling;
                const icon = this.querySelector('span:last-child');
                
                // Close all other FAQs
                document.querySelectorAll('.faq-content').forEach(otherContent => {
                    if (otherContent !== content && !otherContent.classList.contains('hidden')) {
                        otherContent.classList.add('hidden');
                        otherContent.previousElementSibling.querySelector('span:last-child').textContent = '+';
                    }
                });
                
                // Toggle current FAQ
                if (content.classList.contains('hidden')) {
                    content.classList.remove('hidden');
                    icon.textContent = '−';
                } else {
                    content.classList.add('hidden');
                    icon.textContent = '+';
                }
            });
        });

        // Form submission
        document.querySelector('form').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const submitBtn = this.querySelector('button[type="submit"]');
            const originalText = submitBtn.textContent;
            
            // Show loading state
            submitBtn.textContent = 'Mengirim...';
            submitBtn.disabled = true;
            submitBtn.classList.add('opacity-75');
            
            // Simulate form submission
            setTimeout(() => {
                submitBtn.textContent = 'Pesan Terkirim! ✓';
                submitBtn.classList.remove('bg-gradient-to-r', 'from-orange-500', 'to-orange-400');
                submitBtn.classList.add('bg-green-500');
                
                // Reset form
                this.reset();
                textarea.nextElementSibling.textContent = '0/500 karakter';
                
                // Reset button after 3 seconds
                setTimeout(() => {
                    submitBtn.textContent = originalText;
                    submitBtn.disabled = false;
                    submitBtn.classList.remove('opacity-75', 'bg-green-500');
                    submitBtn.classList.add('bg-gradient-to-r', 'from-orange-500', 'to-orange-400');
                }, 3000);
                
            }, 2000);
        });

        // Form validation
        const inputs = document.querySelectorAll('input[required], textarea[required]');
        
        inputs.forEach(input => {
            input.addEventListener('blur', function() {
                if (!this.value.trim()) {
                    this.classList.add('border-red-500', 'ring-1', 'ring-red-500');
                    this.classList.remove('border-gray-300');
                } else {
                    this.classList.remove('border-red-500', 'ring-1', 'ring-red-500');
                    this.classList.add('border-gray-300');
                }
            });
            
            input.addEventListener('input', function() {
                if (this.value.trim()) {
                    this.classList.remove('border-red-500', 'ring-1', 'ring-red-500');
                    this.classList.add('border-gray-300');
                }
            });
        });

        // Email validation
        const emailInput = document.querySelector('input[type="email"]');
        emailInput.addEventListener('blur', function() {
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (this.value && !emailRegex.test(this.value)) {
                this.classList.add('border-red-500', 'ring-1', 'ring-red-500');
                this.classList.remove('border-gray-300');
            }
        });

        // Phone number formatting
        const phoneInput = document.querySelector('input[type="tel"]');
        phoneInput.addEventListener('input', function() {
            let value = this.value.replace(/\D/g, '');
            
            if (value.length >= 4 && value.length <= 12) {
                if (value.length <= 8) {
                    value = value.substring(0, 4) + '-' + value.substring(4);
                } else {
                    value = value.substring(0, 4) + '-' + value.substring(4, 8) + '-' + value.substring(8);
                }
            }
            
            this.value = value;
        });

        // Smooth scrolling for anchor links
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

        // Add navbar scroll effect
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('header');
            if (window.scrollY > 50) {
                navbar.classList.add('shadow-md');
            } else {
                navbar.classList.remove('shadow-md');
            }
        });
    </script>

@endsection
