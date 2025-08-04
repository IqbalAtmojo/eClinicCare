<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QueueClinic - Anti Mudah Sehat Terjaga</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#FB6F17',
                        secondary: '#FF8A65',
                        accent: '#FFB74D',
                        dark: '#2C3E50'
                    },
                    animation: {
                        'fade-in': 'fadeIn 0.6s ease-in-out',
                        'slide-up': 'slideUp 0.8s ease-out',
                        'bounce-gentle': 'bounceGentle 2s infinite',
                        'pulse-glow': 'pulseGlow 2s infinite'
                    }
                }
            }
        }
    </script>
    <style>
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        @keyframes slideUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }
        @keyframes bounceGentle {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }
        @keyframes pulseGlow {
            0%, 100% { box-shadow: 0 0 20px rgba(255, 107, 53, 0.2); }
            50% { box-shadow: 0 0 30px rgba(255, 107, 53, 0.4); }
        }
        .gradient-bg {
            background: linear-gradient(135deg, #fff5f1 0%, #ffffff 100%);
        }
        .glass-effect {
            backdrop-filter: blur(10px);
            background: rgba(255, 249, 241, 0.9);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        .hover-lift:hover {
            transform: translateY(-5px);
            transition: all 0.3s ease;
        }
        .hero-bg {
            background-color: #FFF8F0;
        }
    </style>
</head>
<body class="min-h-screen">
    <!-- Navigation -->
    <nav class="fixed w-full z-50 glass-effect">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center space-x-2">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo">
                </div>
                
                <div class="hidden md:flex space-x-8">
                    <a href="{{ route('landingpage') }}" class="text-dark hover:text-primary transition-colors duration-300">Beranda</a>
                    <a href="{{ route('layanan') }}" class="text-dark hover:text-primary transition-colors duration-300">Layanan</a>
                    <a href="{{ route('dokter') }}" class="text-dark hover:text-primary transition-colors duration-300">Dokter</a>
                    <a href="{{ route('artikel') }}" class="text-dark hover:text-primary transition-colors duration-300">Artikel</a>
                    <a href="{{ route('kontak') }}" class="text-dark hover:text-primary transition-colors duration-300">Kontak</a>
                </div>
                
                <div class="flex items-center space-x-4">
                    <button class="text-dark text-sm"><a href="{{ route('daftar') }}">Daftar</a></button>
                    <button class="bg-gradient-to-r from-primary to-secondary text-white px-4 py-2 rounded-full text-sm hover:shadow-lg transition-all duration-300">
                        <a href="{{ route('masuk') }}">Masuk</a>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    @yield('content')

    <!-- Footer -->
    <footer class="hero-bg text-dark pt-12 pb-8 mt-8  ">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid md:grid-cols-4 gap-8">
                <div>
                    <div class="flex items-center space-x-2 mb-4">
                        <img src="{{ asset('images/logo.png') }}" alt="Logo">
                    </div>
                    <p class="text-gray-600 text-sm mb-4">Menyediakan layanan kesehatan terpercaya dengan standar internasional.</p>
                    <div class="flex space-x-3">
                        <a href="#" class="w-8 h-8"><img src="{{ asset('images/facebook.png') }}"></a>
                        <a href="#" class="w-8 h-8"><img src="{{ asset('images/instagram.png') }}"></a>
                        <a href="#" class="w-8 h-8"><img src="{{ asset('images/twitter.png') }}"></a>
                        <a href="#" class="w-8 h-8"><img src="{{ asset('images/youtube.png') }}"></a>
                    </div>
                </div>
                
                <div>
                    <h4 class="text-lg font-bold mb-4">Navigasi</h4>
                    <ul class="space-y-2 text-gray-600 text-sm">
                        <li><a href="{{ route('landingpage') }}" class="hover:text-primary transition-colors">Beranda</a></li>
                        <li><a href="{{ route('layanan') }}" class="hover:text-primary transition-colors">Layanan</a></li>
                        <li><a href="{{ route('dokter') }}" class="hover:text-primary transition-colors">Dokter</a></li>
                        <li><a href="{{ route('artikel') }}" class="hover:text-primary transition-colors">Artikel</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="text-lg font-bold mb-4">Kontak</h4>
                    <div class="space-y-2 text-gray-600 text-sm">
                        <p class="flex items-center">
                            <img src="{{ asset('images/location.png') }}" class="w-5 h-5 mr-2"> 
                            Jl. Kesehatan No. 123, Jakarta
                        </p>
                        <p class="flex items-center">
                            <img src="{{ asset('images/phone.png') }}" class="w-5 h-5 mr-2"> 
                            (021) 1234-5678
                        </p>
                        <p class="flex items-center">
                            <img src="{{ asset('images/email.png') }}" class="w-5 h-5 mr-2"> 
                            info@healthcare.com
                        </p>
                    </div>
                </div>
                
                <div>
                    <h4 class="text-lg font-bold mb-4">Artikel Populer</h4>
                    <div class="space-y-2 text-gray-600 text-sm">
                        <p>Tips Kesehatan Jantung</p>
                        <p>Nutrisi Seimbang</p>
                        <p>Kesehatan Mental</p>
                        <p>Olahraga Rutin</p>
                    </div>
                </div>
            </div>
            
            
        </div>
        <div class="border-t-4 border-gray-300 mt-8 pt-6 text-center text-gray-500 text-sm">
                <p>© 2025 QueueClinic Inc. All Rights Reserved.</p>
            </div>
    </footer>


</body>
</html>