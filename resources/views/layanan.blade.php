@extends('layout.app')

@section('content')
    <!-- Hero Section -->
    <section class="hero-bg pt-24 pb-16 px-4">
        <div class="max-w-4xl mx-auto text-center">
            <h1 class="text-4xl lg:text-5xl font-bold text-gray-800 mb-4">
                Sistem <span class="text-orange-500">Antrian Online</span>
            </h1>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto leading-relaxed">
                Ambil nomor antrian dengan mudah tanpa perlu datang langsung ke klinik. 
                Pilih poli yang diinginkan dan tunggu giliran Anda dengan nyaman.
            </p>
        </div>
    </section>

    <!-- Queue Status Section -->
    <section class="bg-white py-8">
        <div class="max-w-4xl mx-auto px-4">
            <div class="bg-white rounded-2xl p-8 shadow-lg">
                <h2 class="text-2xl font-bold text-gray-800 text-center mb-8">Status antrian saat ini</h2>
                <div class="grid md:grid-cols-3 gap-6">
                    <!-- Poli Umum Status -->
                    <div class="text-center p-6 bg-orange-50 rounded-xl hover-lift transition-all duration-300">
                        <div class="text-4xl mb-3">👨‍⚕️</div>
                        <h3 class="font-semibold text-gray-800 mb-2">Poli Umum</h3>
                        <div class="text-3xl font-bold text-orange-500 mb-1">A012</div>
                        <p class="text-sm text-gray-600 mb-2">Sedang dilayani</p>
                        <p class="text-sm text-orange-600">15 orang dalam antrian</p>
                    </div>
                    
                    <!-- Poli Gigi Status -->
                    <div class="text-center p-6 bg-orange-50 rounded-xl hover-lift transition-all duration-300">
                        <div class="text-4xl mb-3">🦷</div>
                        <h3 class="font-semibold text-gray-800 mb-2">Poli Gigi</h3>
                        <div class="text-3xl font-bold text-orange-500 mb-1">B008</div>
                        <p class="text-sm text-gray-600 mb-2">Sedang dilayani</p>
                        <p class="text-sm text-orange-600">8 orang dalam antrian</p>
                    </div>
                    
                    <!-- Poli Anak Status -->
                    <div class="text-center p-6 bg-orange-50 rounded-xl hover-lift transition-all duration-300">
                        <div class="text-4xl mb-3">👶</div>
                        <h3 class="font-semibold text-gray-800 mb-2">Poli Anak</h3>
                        <div class="text-3xl font-bold text-orange-500 mb-1">C006</div>
                        <p class="text-sm text-gray-600 mb-2">Sedang dilayani</p>
                        <p class="text-sm text-orange-600">12 orang dalam antrian</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Poli Selection Section -->
    <section id="layanan" class="bg-white py-16">
        <div class="max-w-6xl mx-auto px-4">
            <div class="text-center mb-12 animate-slide-up">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Pilih Poli Tujuan</h2>
                <p class="text-lg text-gray-600">Klik pada poli yang ingin Anda kunjungi untuk mengambil nomor antrian</p>
            </div>
            
            <div class="grid lg:grid-cols-3 gap-8">
                <!-- Poli Umum -->
                <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl hover-lift transition-all duration-300 animate-fade-in">
                    <div class="text-center mb-6">
                        <div class="w-16 h-16 bg-blue-500 rounded-lg flex items-center justify-center mb-4 mx-auto">
                            <span class="text-2xl text-white">👨‍⚕️</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Poli Umum</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">
                            Pemeriksaan kesehatan umum, konsultasi penyakit ringan, cek kesehatan rutin, dan pelayanan medis dasar.
                        </p>
                    </div>
                    
                    <div class="space-y-2 mb-6 text-sm">
                        <div class="flex justify-between">
                            <span class="text-gray-600">Jam Operasional:</span>
                            <span class="font-medium">08:00 - 16:00</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-600">Estimasi Waktu:</span>
                            <span class="font-medium">15-20 menit</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-600">Antrian Saat Ini:</span>
                            <span class="font-medium text-orange-600">15 orang</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-600">Dokter Jaga:</span>
                            <span class="font-medium">Dr. Ahmad</span>
                        </div>
                    </div>
                    
                    <button class="w-full bg-blue-500 text-white py-3 rounded-lg font-medium hover:bg-blue-600 transition-colors duration-300 poli-button" data-poli="Poli Umum">
                        Ambil Antrian
                    </button>
                </div>

                <!-- Poli Gigi -->
                <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl hover-lift transition-all duration-300 animate-fade-in">
                    <div class="text-center mb-6">
                        <div class="w-16 h-16 bg-green-500 rounded-lg flex items-center justify-center mb-4 mx-auto">
                            <span class="text-2xl text-white">🦷</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Poli Gigi</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">
                            Pemeriksaan gigi dan mulut, pembersihan karang gigi, penambalan, pencabutan, dan perawatan gigi lainnya.
                        </p>
                    </div>
                    
                    <div class="space-y-2 mb-6 text-sm">
                        <div class="flex justify-between">
                            <span class="text-gray-600">Jam Operasional:</span>
                            <span class="font-medium">08:00 - 15:00</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-600">Estimasi Waktu:</span>
                            <span class="font-medium">30-45 menit</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-600">Antrian Saat Ini:</span>
                            <span class="font-medium text-orange-600">8 orang</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-600">Dokter Jaga:</span>
                            <span class="font-medium">Dr. Budi</span>
                        </div>
                    </div>
                    
                    <button class="w-full bg-green-500 text-white py-3 rounded-lg font-medium hover:bg-green-600 transition-colors duration-300 poli-button" data-poli="Poli Gigi">
                        Ambil Antrian
                    </button>
                </div>

                <!-- Poli Anak -->
                <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl hover-lift transition-all duration-300 animate-fade-in">
                    <div class="text-center mb-6">
                        <div class="w-16 h-16 bg-pink-500 rounded-lg flex items-center justify-center mb-4 mx-auto">
                            <span class="text-2xl text-white">👶</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Poli Anak</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">
                            Pemeriksaan kesehatan anak, imunisasi, konsultasi tumbuh kembang, dan penanganan penyakit anak.
                        </p>
                    </div>
                    
                    <div class="space-y-2 mb-6 text-sm">
                        <div class="flex justify-between">
                            <span class="text-gray-600">Jam Operasional:</span>
                            <span class="font-medium">08:00 - 14:00</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-600">Estimasi Waktu:</span>
                            <span class="font-medium">20-30 menit</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-600">Antrian Saat Ini:</span>
                            <span class="font-medium text-orange-600">12 orang</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-600">Dokter Jaga:</span>
                            <span class="font-medium">Dr. Sari</span>
                        </div>
                    </div>
                    
                    <button class="w-full bg-pink-500 text-white py-3 rounded-lg font-medium hover:bg-pink-600 transition-colors duration-300 poli-button" data-poli="Poli Anak">
                        Ambil Antrian
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works Section -->
    <section class=" py-16">
        <div class="max-w-6xl mx-auto px-4">
            <div class="text-center mb-12 animate-slide-up">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Cara Mengambil Antrian</h2>
                <p class="text-lg text-gray-600">Ikuti langkah mudah berikut untuk mengambil nomor antrian</p>
            </div>
            
            <div class="grid md:grid-cols-4 gap-8">
                <div class="text-center animate-fade-in">
                    <div class="w-16 h-16 bg-orange-500 rounded-full flex items-center justify-center mx-auto mb-4 text-white text-xl font-bold animate-bounce-gentle">
                        1
                    </div>
                    <h3 class="text-lg font-bold text-gray-800 mb-2">Pilih Poli</h3>
                    <p class="text-gray-600 text-sm">Pilih poli yang sesuai dengan kebutuhan pemeriksaan Anda</p>
                </div>
                
                <div class="text-center animate-fade-in" style="animation-delay: 0.2s;">
                    <div class="w-16 h-16 bg-orange-500 rounded-full flex items-center justify-center mx-auto mb-4 text-white text-xl font-bold animate-bounce-gentle">
                        2
                    </div>
                    <h3 class="text-lg font-bold text-gray-800 mb-2">Ambil Nomor</h3>
                    <p class="text-gray-600 text-sm">Klik tombol untuk mengambil nomor antrian secara otomatis</p>
                </div>
                
                <div class="text-center animate-fade-in" style="animation-delay: 0.4s;">
                    <div class="w-16 h-16 bg-orange-500 rounded-full flex items-center justify-center mx-auto mb-4 text-white text-xl font-bold animate-bounce-gentle">
                        3
                    </div>
                    <h3 class="text-lg font-bold text-gray-800 mb-2">Tunggu Panggilan</h3>
                    <p class="text-gray-600 text-sm">Pantau status antrian dan datang saat waktu Anda</p>
                </div>
                
                <div class="text-center animate-fade-in" style="animation-delay: 0.6s;">
                    <div class="w-16 h-16 bg-orange-500 rounded-full flex items-center justify-center mx-auto mb-4 text-white text-xl font-bold animate-bounce-gentle">
                        4
                    </div>
                    <h3 class="text-lg font-bold text-gray-800 mb-2">Dilayani</h3>
                    <p class="text-gray-600 text-sm">Datang ke ruang poli dan dapatkan pelayanan kesehatan terbaik</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal for Queue Confirmation -->
    <div id="queueModal" class="fixed inset-0 bg-black bg-opacity-50 hidden z-50 flex items-center justify-center p-4">
        <div class="bg-white rounded-2xl p-8 max-w-md w-full animate-slide-up">
            <div class="text-center">
                <div class="w-16 h-16 bg-green-500 rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="text-white text-2xl">✓</span>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-2">Konfirmasi Antrian</h3>
                <p class="text-gray-600 mb-6">Anda akan mengambil antrian untuk <span id="selectedPoli" class="font-semibold text-orange-500"></span></p>
                
                <form id="queueForm" class="space-y-4 mb-6">
                    <input type="text" placeholder="Nama Lengkap" required 
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500">
                    <input type="tel" placeholder="Nomor Telepon" required 
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500">
                    <textarea placeholder="Keluhan (Opsional)" rows="3" 
                              class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500"></textarea>
                </form>
                
                <div class="flex space-x-4">
                    <button id="cancelQueue" class="flex-1 bg-gray-300 text-gray-700 py-3 rounded-lg font-medium hover:bg-gray-400 transition-colors">
                        Batal
                    </button>
                    <button id="confirmQueue" class="flex-1 bg-orange-500 text-white py-3 rounded-lg font-medium hover:bg-orange-600 transition-colors">
                        Ambil Antrian
                    </button>
                </div>
            </div>
        </div>
    </div>

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

        // Queue Modal functionality
        const modal = document.getElementById('queueModal');
        const selectedPoliSpan = document.getElementById('selectedPoli');
        const cancelBtn = document.getElementById('cancelQueue');
        const confirmBtn = document.getElementById('confirmQueue');
        const queueForm = document.getElementById('queueForm');

        // Queue button interactions
        document.querySelectorAll('.poli-button').forEach(button => {
            button.addEventListener('click', function() {
                const poliName = this.getAttribute('data-poli');
                selectedPoliSpan.textContent = poliName;
                modal.classList.remove('hidden');
                document.body.style.overflow = 'hidden';
            });
        });

        // Cancel button
        cancelBtn.addEventListener('click', function() {
            modal.classList.add('hidden');
            document.body.style.overflow = 'auto';
            queueForm.reset();
        });

        // Confirm button
        confirmBtn.addEventListener('click', function() {
            const formData = new FormData(queueForm);
            const nama = queueForm.querySelector('input[placeholder="Nama Lengkap"]').value;
            const telpon = queueForm.querySelector('input[placeholder="Nomor Telepon"]').value;
            
            if (nama && telpon) {
                // Here you would normally send the data to your Laravel backend
                alert(`Antrian berhasil diambil!\n\nNama: ${nama}\nPoli: ${selectedPoliSpan.textContent}\nNomor antrian Anda akan dikirim via SMS.`);
                modal.classList.add('hidden');
                document.body.style.overflow = 'auto';
                queueForm.reset();
            } else {
                alert('Mohon lengkapi nama dan nomor telepon!');
            }
        });

        // Close modal when clicking outside
        modal.addEventListener('click', function(e) {
            if (e.target === modal) {
                modal.classList.add('hidden');
                document.body.style.overflow = 'auto';
                queueForm.reset();
            }
        });

        // Real-time queue updates (simulation)
        setInterval(function() {
            const queueNumbers = document.querySelectorAll('.text-3xl.font-bold.text-orange-500');
            queueNumbers.forEach(number => {
                // Randomly update queue numbers for demonstration
                if (Math.random() > 0.9) {
                    const currentNum = parseInt(number.textContent.substring(1));
                    number.textContent = number.textContent.charAt(0) + String(currentNum + 1).padStart(3, '0');
                }
            });
        }, 10000); // Update every 10 seconds
    </script>
@endsection