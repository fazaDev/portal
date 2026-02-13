<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dinas Pekerjaan Umum dan Tata Ruang Provinsi Jambi</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="icon" href="{{ asset('images/logo-pemprov-jambi.png') }}">
    <script>
        // Check for saved dark mode preference
        if (localStorage.getItem('theme') === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark');
        }

        function toggleDarkMode() {
            if (document.documentElement.classList.contains('dark')) {
                document.documentElement.classList.remove('dark');
                localStorage.setItem('theme', 'light');
            } else {
                document.documentElement.classList.add('dark');
                localStorage.setItem('theme', 'dark');
            }
        }
    </script>
</head>

<body
    class="font-sans text-gray-800 bg-gray-50 dark:bg-putr-blue-dark dark:text-gray-200 transition-colors duration-300">

    <!-- TOP BAR -->
    <div class="bg-putr-blue-dark text-white text-xs py-2">
        <div class="container mx-auto px-4 flex justify-between items-center">
            <div class="hidden md:flex gap-4">
                <span><i class="fas fa-phone-alt mr-1"></i> (0741) 446720, 446726, 41225, 445115</span>
                <span><i class="fas fa-envelope mr-1"></i> dputr@jambiprov.go.id</span>
            </div>
            <div class="flex gap-3">
                <a href="#" class="hover:text-putr-yellow transition"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="hover:text-putr-yellow transition"><i class="fab fa-instagram"></i></a>
                <a href="#" class="hover:text-putr-yellow transition"><i class="fab fa-youtube"></i></a>
            </div>
        </div>
    </div>

    <!-- HEADER & NAVBAR -->
    <header
        class="bg-white shadow-md sticky top-0 z-50 dark:bg-putr-blue dark:border-gray-700 transition-colors duration-300">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <!-- Logo -->
            <a href="#" class="flex items-center gap-3 group">
                <!-- Ganti src dengan logo asli nanti -->
                <img src="{{ asset('images/logo-pemprov-jambi.png') }}" alt="Logo Jambi" class="h-12 w-auto">
                <div>
                    <h1
                        class="text-putr-blue font-bold text-lg leading-tight group-hover:text-putr-yellow-dark transition dark:text-white">
                        DINAS PEKERJAAN UMUM<br>DAN TATA RUANG</h1>
                    <p class="text-gray-500 text-xs dark:text-gray-400">PROVINSI JAMBI</p>
                </div>
            </a>

            <!-- Desktop Menu -->
            <nav class="hidden lg:flex gap-6 items-center">
                <a href="#"
                    class="font-medium text-putr-blue hover:text-putr-yellow-dark border-b-2 border-transparent hover:border-putr-yellow transition py-1 dark:text-white dark:hover:text-putr-yellow">Beranda</a>

                <!-- DROPDOWN PROFIL START -->
                <div class="relative group">
                    <a href="#"
                        class="font-medium text-putr-blue hover:text-putr-yellow-dark border-b-2 border-transparent hover:border-putr-yellow transition py-1 flex items-center gap-1 dark:text-white dark:hover:text-putr-yellow">
                        Profil <i class="fas fa-chevron-down text-xs"></i>
                    </a>

                    <!-- Menu Dropdown (Hidden by default, Show on Hover) -->
                    <div
                        class="absolute top-full left-0 w-64 bg-white shadow-xl rounded-md overflow-hidden border-t-4 border-putr-yellow z-50 transform transition-all duration-200 ease-out opacity-0 pointer-events-none translate-y-1 group-hover:opacity-100 group-hover:pointer-events-auto group-hover:translate-y-0 dark:bg-putr-blue dark:border-gray-700">
                        <a href="#"
                            class="block px-6 py-3 text-sm text-gray-700 hover:bg-putr-blue hover:text-white transition duration-200 flex items-center gap-2 dark:text-white dark:hover:bg-putr-blue-dark">
                            <i class="fas fa-info-circle text-xs w-4"></i> Tentang Kami
                        </a>
                        <a href="#"
                            class="block px-6 py-3 text-sm text-gray-700 hover:bg-putr-blue hover:text-white transition duration-200 flex items-center gap-2 dark:text-white dark:hover:bg-putr-blue-dark">
                            <i class="fas fa-bullseye text-xs w-4"></i> Visi dan Misi
                        </a>
                        <a href="#"
                            class="block px-6 py-3 text-sm text-gray-700 hover:bg-putr-blue hover:text-white transition duration-200 flex items-center gap-2 dark:text-white dark:hover:bg-putr-blue-dark">
                            <i class="fas fa-sitemap text-xs w-4"></i> Struktur Organisasi
                        </a>
                        <a href="#"
                            class="block px-6 py-3 text-sm text-gray-700 hover:bg-putr-blue hover:text-white transition duration-200 flex items-center gap-2 dark:text-white dark:hover:bg-putr-blue-dark">
                            <i class="fas fa-tasks text-xs w-4"></i> Tugas Pokok dan Fungsi
                        </a>
                    </div>
                </div>
                <!-- DROPDOWN PROFIL END -->

                <a href="#"
                    class="font-medium text-putr-blue hover:text-putr-yellow-dark border-b-2 border-transparent hover:border-putr-yellow transition py-1 flex items-center gap-1 dark:text-white dark:hover:text-putr-yellow">Berita</a>
                <a href="#"
                    class="font-medium text-putr-blue hover:text-putr-yellow-dark border-b-2 border-transparent hover:border-putr-yellow transition py-1 flex items-center gap-1 dark:text-white dark:hover:text-putr-yellow">Layanan</a>
                <a href="#"
                    class="font-medium text-putr-blue hover:text-putr-yellow-dark border-b-2 border-transparent hover:border-putr-yellow transition py-1 flex items-center gap-1 dark:text-white dark:hover:text-putr-yellow">Dokumen</a>
                <a href="#"
                    class="font-medium text-putr-blue hover:text-putr-yellow-dark border-b-2 border-transparent hover:border-putr-yellow transition py-1 flex items-center gap-1 dark:text-white dark:hover:text-putr-yellow">Kontak</a>

                <!-- Dark Mode Toggle Button -->
                <button onclick="toggleDarkMode()"
                    class="ml-2 w-8 h-8 flex items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 dark:bg-putr-blue-dark dark:hover:bg-gray-900 transition text-putr-blue dark:text-putr-yellow border border-gray-200 dark:border-putr-yellow/50">
                    <i class="fas fa-moon !block dark:!hidden"></i>
                    <i class="fas fa-sun !hidden dark:!block"></i>
                </button>
            </nav>

            <!-- Mobile Toggle -->
            <button onclick="toggleMenu()"
                class="lg:hidden text-putr-blue text-2xl focus:outline-none dark:text-putr-yellow">
                <i class="fas fa-bars"></i>
            </button>
        </div>

        <!-- Mobile Menu (Updated with Submenu) -->
        <div id="mobile-menu"
            class="hidden lg:hidden bg-white border-t p-4 flex flex-col gap-2 shadow-lg dark:bg-putr-blue dark:border-gray-700">
            <a href="#"
                class="font-medium text-putr-blue py-2 border-b border-gray-100 dark:text-white dark:border-gray-700">Beranda</a>

            <!-- Mobile Profil Submenu -->
            <div class="pl-4 border-l-2 border-putr-yellow my-1">
                <p class="text-xs font-bold text-gray-400 mb-2">Profil</p>
                <a href="#"
                    class="block text-sm text-gray-700 py-2 hover:text-putr-blue dark:text-gray-200 dark:hover:text-putr-yellow">Tentang
                    Kami</a>
                <a href="#"
                    class="block text-sm text-gray-700 py-2 hover:text-putr-blue dark:text-gray-200 dark:hover:text-putr-yellow">Visi
                    dan Misi</a>
                <a href="#"
                    class="block text-sm text-gray-700 py-2 hover:text-putr-blue dark:text-gray-200 dark:hover:text-putr-yellow">Struktur
                    Organisasi</a>
                <a href="#"
                    class="block text-sm text-gray-700 py-2 hover:text-putr-blue dark:text-gray-200 dark:hover:text-putr-yellow">Tugas
                    Pokok dan Fungsi</a>
            </div>

            <a href="#"
                class="font-medium text-gray-600 py-2 border-b border-gray-100 dark:text-white dark:border-gray-700">Berita</a>
            <a href="#"
                class="font-medium text-gray-600 py-2 border-b border-gray-100 dark:text-white dark:border-gray-700">Layanan</a>
            <a href="#"
                class="font-medium text-gray-600 py-2 border-b border-gray-100 dark:text-white dark:border-gray-700">Dokumen</a>
            <a href="#" class="font-medium text-gray-600 py-2 dark:text-white">Kontak</a>

            <!-- Mobile Dark Mode Toggle -->
            <div class="py-2 border-t border-gray-100 dark:border-gray-700 mt-2 flex items-center justify-between">
                <span class="font-medium text-gray-600 dark:text-white">Mode Gelap</span>
                <button onclick="toggleDarkMode()"
                    class="w-10 h-10 flex items-center justify-center rounded-full bg-gray-100 dark:bg-putr-blue-dark text-putr-blue dark:text-putr-yellow border dark:border-putr-yellow/50">
                    <i class="fas fa-moon !block dark:!hidden"></i>
                    <i class="fas fa-sun !hidden dark:!block"></i>
                </button>
            </div>
        </div>
    </header>

    <!-- HERO SLIDER -->
    <div class="relative h-screen bg-black overflow-hidden" style="height: calc(100vh - 120px);">
        @foreach($heroSlider as $hero)
            <div class="hero-slide absolute inset-0 bg-cover bg-center transition-opacity duration-1000 opacity-100 active"
                style="background-image: url('{{ asset('storage/' . $hero->image) }}');">
                <div
                    class="absolute inset-0 bg-gradient-to-r from-putr-blue-dark/90 to-putr-blue-dark/30 flex items-center">
                    <div class="container mx-auto px-4 text-white">
                        <h2 class="text-4xl md:text-6xl font-bold mb-6 max-w-2xl leading-tight">{{ $hero->title }}
                            <span class="text-putr-yellow">{{ $hero->subtitle }}</span>
                        </h2>
                        <p class="text-lg md:text-xl mb-8 max-w-xl text-gray-200">Mewujudkan konektivitas wilayah yang
                            merata demi kesejahteraan masyarakat Provinsi Jambi.</p>
                        <a href="#"
                            class="inline-block bg-putr-yellow text-putr-blue-dark font-bold py-3 px-8 rounded hover:bg-putr-yellow-dark transition shadow-lg">{{ $hero->button_text }}</a>
                    </div>
                </div>
            </div>
        @endforeach

        <!-- Scroll Down Indicator -->
        <div class="absolute bottom-8 left-1/2 -translate-x-1/2 animate-bounce text-white/70 z-10">
            <div class="flex flex-col items-center gap-2">
                <span class="text-xs uppercase tracking-widest font-medium">Scroll</span>
                <i class="fas fa-chevron-down text-xl"></i>
            </div>
        </div>
    </div>

    <!-- RUNNING TEXT (INFO) -->
    <div class="bg-white border-b-2 border-putr-yellow py-2">
        <div class="container mx-auto px-4 flex items-center overflow-hidden">
            <div class="bg-putr-blue text-putr-yellow font-bold text-xs px-3 py-1 rounded flex-shrink-0 mr-4 z-10">
                INFO TERKINI
            </div>
            <div class="whitespace-nowrap overflow-hidden w-full">
                <div class="animate-marquee text-putr-blue-dark font-medium text-sm">
                    Selamat Datang di Website Resmi Dinas PU-TR Provinsi Jambi &bull; Pengumuman Lelang Proyek Irigasi
                    Tahap II telah dibuka &bull; Rapat Koordinasi Tata Ruang akan dilaksanakan Senin depan.
                </div>
            </div>
        </div>
    </div>

    <!-- LAYANAN CEPAT -->
    <section class="py-12 bg-gray-50 dark:bg-putr-blue-dark transition-colors duration-300">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6">
                <!-- Service Item -->
                <a href="#"
                    class="bg-white p-6 rounded-lg shadow-sm hover:shadow-lg hover:-translate-y-1 transition text-center border-t-4 border-putr-yellow group dark:bg-putr-blue dark:border-gray-700">
                    <div
                        class="text-putr-blue text-4xl mb-3 group-hover:text-putr-yellow-dark transition dark:text-white">
                        <i class="fas fa-hard-hat"></i>
                    </div>
                    <h3 class="font-bold text-putr-blue-dark text-sm md:text-base dark:text-gray-200">LPSE & Lelang</h3>
                </a>
                <!-- Service Item -->
                <a href="#"
                    class="bg-white p-6 rounded-lg shadow-sm hover:shadow-lg hover:-translate-y-1 transition text-center border-t-4 border-putr-yellow group dark:bg-putr-blue dark:border-gray-700">
                    <div
                        class="text-putr-blue text-4xl mb-3 group-hover:text-putr-yellow-dark transition dark:text-white">
                        <i class="fas fa-file-contract"></i>
                    </div>
                    <h3 class="font-bold text-putr-blue-dark text-sm md:text-base dark:text-gray-200">Perizinan</h3>
                </a>
                <!-- Service Item -->
                <a href="#"
                    class="bg-white p-6 rounded-lg shadow-sm hover:shadow-lg hover:-translate-y-1 transition text-center border-t-4 border-putr-yellow group dark:bg-putr-blue dark:border-gray-700">
                    <div
                        class="text-putr-blue text-4xl mb-3 group-hover:text-putr-yellow-dark transition dark:text-white">
                        <i class="fas fa-bullhorn"></i>
                    </div>
                    <h3 class="font-bold text-putr-blue-dark text-sm md:text-base dark:text-gray-200">Pengaduan</h3>
                </a>
                <!-- Service Item -->
                <a href="#"
                    class="bg-white p-6 rounded-lg shadow-sm hover:shadow-lg hover:-translate-y-1 transition text-center border-t-4 border-putr-yellow group dark:bg-putr-blue dark:border-gray-700">
                    <div
                        class="text-putr-blue text-4xl mb-3 group-hover:text-putr-yellow-dark transition dark:text-white">
                        <i class="fas fa-map-marked-alt"></i>
                    </div>
                    <h3 class="font-bold text-putr-blue-dark text-sm md:text-base dark:text-gray-200">GIS & Peta</h3>
                </a>
                <!-- Service Item -->
                <a href="#"
                    class="bg-white p-6 rounded-lg shadow-sm hover:shadow-lg hover:-translate-y-1 transition text-center border-t-4 border-putr-yellow group dark:bg-putr-blue dark:border-gray-700">
                    <div
                        class="text-putr-blue text-4xl mb-3 group-hover:text-putr-yellow-dark transition dark:text-white">
                        <i class="fas fa-book-open"></i>
                    </div>
                    <h3 class="font-bold text-putr-blue-dark text-sm md:text-base dark:text-gray-200">Regulasi</h3>
                </a>
            </div>
        </div>
    </section>

    <!-- MAIN CONTENT: NEWS & AGENDA -->
    <section class="py-12 bg-white dark:bg-putr-blue-dark transition-colors duration-300">
        <div class="container mx-auto px-4 flex flex-col lg:flex-row gap-10">

            <!-- Left Column: News (2/3 width) -->
            <div class="w-full lg:w-2/3">
                <div
                    class="flex items-center justify-between mb-8 border-b-2 border-gray-100 pb-2 dark:border-gray-700">
                    <h2
                        class="text-2xl font-bold text-putr-blue border-l-4 border-putr-yellow pl-3 dark:text-putr-yellow">
                        Berita Terkini</h2>
                    <a href="#" class="text-sm text-putr-blue font-medium hover:underline">Lihat Semua &rarr;</a>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- News Card 1 -->
                    <div
                        class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition group dark:bg-putr-blue">
                        <div class="h-48 overflow-hidden">
                            <img src="https://placehold.co/600x400?text=Jalan+Lintas+Timur" alt="News"
                                class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                        </div>
                        <div class="p-5">
                            <div class="flex items-center gap-2 mb-3 text-xs text-gray-500">
                                <span class="bg-putr-blue text-white px-2 py-1 rounded">Bina Marga</span>
                                <span><i class="far fa-calendar"></i> 12 Okt 2023</span>
                            </div>
                            <h3
                                class="text-lg font-bold text-putr-blue-dark mb-2 leading-snug group-hover:text-putr-yellow-dark transition dark:text-gray-100">
                                <a href="#">Pengecoran Jalan Lintas Timur Dilanjutkan Tahun Ini</a>
                            </h3>
                            <p class="text-gray-600 text-sm line-clamp-3 dark:text-gray-400">Pemerintah Provinsi Jambi
                                melalui Dinas PU-TR memastikan pengecoran jalan sepanjang 15 KM akan selesai sebelum
                                akhir tahun...</p>
                        </div>
                    </div>
                    <!-- News Card 2 -->
                    <div
                        class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition group dark:bg-putr-blue">
                        <div class="h-48 overflow-hidden">
                            <img src="https://placehold.co/600x400?text=Sungai+Batanghari" alt="News"
                                class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                        </div>
                        <div class="p-5">
                            <div class="flex items-center gap-2 mb-3 text-xs text-gray-500">
                                <span class="bg-putr-blue text-white px-2 py-1 rounded">Sumber Daya Air</span>
                                <span><i class="far fa-calendar"></i> 10 Okt 2023</span>
                            </div>
                            <h3
                                class="text-lg font-bold text-putr-blue-dark mb-2 leading-snug group-hover:text-putr-yellow-dark transition dark:text-gray-100">
                                <a href="#">Normalisasi Sungai Batanghari Masuk Tahap Perencanaan</a>
                            </h3>
                            <p class="text-gray-600 text-sm line-clamp-3 dark:text-gray-400">Untuk mengantisipasi banjir
                                tahunan, tim teknis sedang melakukan survei mendalam terhadap kondisi sedimentasi...</p>
                        </div>
                    </div>
                    <!-- News Card 3 -->
                    <div
                        class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition group dark:bg-putr-blue">
                        <div class="h-48 overflow-hidden">
                            <img src="https://placehold.co/600x400?text=Jalan+Suak+Kandis" alt="News"
                                class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                        </div>
                        <div class="p-5">
                            <div class="flex items-center gap-2 mb-3 text-xs text-gray-500">
                                <span class="bg-putr-blue text-white px-2 py-1 rounded">Bina Marga</span>
                                <span><i class="far fa-calendar"></i> 12 Okt 2023</span>
                            </div>
                            <h3
                                class="text-lg font-bold text-putr-blue-dark mb-2 leading-snug group-hover:text-putr-yellow-dark transition dark:text-gray-100">
                                <a href="#">Pengecoran Jalan Lintas Timur Dilanjutkan Tahun Ini</a>
                            </h3>
                            <p class="text-gray-600 text-sm line-clamp-3 dark:text-gray-400">Pemerintah Provinsi Jambi
                                melalui Dinas PU-TR memastikan pengecoran jalan sepanjang 15 KM akan selesai sebelum
                                akhir tahun...</p>
                        </div>
                    </div>
                    <!-- News Card 4 -->
                    <div
                        class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition group dark:bg-putr-blue">
                        <div class="h-48 overflow-hidden">
                            <img src="https://placehold.co/600x400?text=Jembatan+Kelok+Sago" alt="News"
                                class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                        </div>
                        <div class="p-5">
                            <div class="flex items-center gap-2 mb-3 text-xs text-gray-500">
                                <span class="bg-putr-blue text-white px-2 py-1 rounded">Sumber Daya Air</span>
                                <span><i class="far fa-calendar"></i> 10 Okt 2023</span>
                            </div>
                            <h3
                                class="text-lg font-bold text-putr-blue-dark mb-2 leading-snug group-hover:text-putr-yellow-dark transition dark:text-gray-100">
                                <a href="#">Normalisasi Sungai Batanghari Masuk Tahap Perencanaan</a>
                            </h3>
                            <p class="text-gray-600 text-sm line-clamp-3 dark:text-gray-400">Untuk mengantisipasi banjir
                                tahunan, tim teknis sedang melakukan survei mendalam terhadap kondisi sedimentasi...</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column: Agenda & Sidebar (1/3 width) -->
            <div class="w-full lg:w-1/3">

                <!-- Agenda Widget -->
                <div class="mb-8">
                    <div
                        class="flex items-center justify-between mb-4 border-b-2 border-gray-100 pb-2 dark:border-gray-700">
                        <h2 class="text-xl font-bold text-putr-blue pl-3 dark:text-putr-yellow">Agenda Kegiatan</h2>
                    </div>
                    <div
                        class="bg-white border border-gray-100 rounded-lg p-4 shadow-sm space-y-4 dark:bg-putr-blue dark:border-gray-700">
                        <!-- Agenda Item -->
                        <div
                            class="flex gap-4 items-start border-b border-gray-100 pb-4 last:border-0 last:pb-0 dark:border-gray-700">
                            <div
                                class="bg-gray-50 p-3 text-center rounded border border-putr-yellow min-w-[60px] dark:bg-putr-blue-dark">
                                <span class="block text-xl font-bold text-putr-blue dark:text-putr-yellow">25</span>
                                <span class="block text-xs uppercase font-semibold text-gray-500">Okt</span>
                            </div>
                            <div>
                                <h4 class="font-bold text-putr-blue-dark text-sm mb-1 dark:text-white">Rapat Evaluasi
                                    Fisik Triwulan III</h4>
                                <p class="text-xs text-gray-500 dark:text-gray-300"><i
                                        class="far fa-clock text-putr-yellow mr-1"></i> 09:00 WIB</p>
                            </div>
                        </div>
                        <!-- Agenda Item -->
                        <div class="flex gap-4 items-start">
                            <div
                                class="bg-gray-50 p-3 text-center rounded border border-putr-yellow min-w-[60px] dark:bg-putr-blue-dark">
                                <span class="block text-xl font-bold text-putr-blue dark:text-putr-yellow">02</span>
                                <span class="block text-xs uppercase font-semibold text-gray-500">Nov</span>
                            </div>
                            <div>
                                <h4 class="font-bold text-putr-blue-dark text-sm mb-1 dark:text-white">Sosialisasi K3
                                    Konstruksi</h4>
                                <p class="text-xs text-gray-500 dark:text-gray-300"><i
                                        class="far fa-clock text-putr-yellow mr-1"></i> 13:00 WIB</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pengumuman Widget -->
                <div>
                    <div
                        class="flex items-center justify-between mb-4 border-b-2 border-gray-100 pb-2 dark:border-gray-700">
                        <h2 class="text-xl font-bold text-putr-blue pl-3 dark:text-putr-yellow">Pengumuman</h2>
                    </div>
                    <ul class="space-y-3">
                        <li
                            class="bg-white p-3 rounded shadow-sm hover:bg-gray-50 transition flex items-center gap-3 dark:bg-putr-blue dark:hover:bg-putr-blue-dark">
                            <i class="fas fa-file-pdf text-red-500 text-xl"></i>
                            <a href="#"
                                class="text-sm font-medium text-putr-blue-dark hover:text-putr-blue dark:text-white dark:hover:text-putr-yellow">Undangan
                                Rapat Koordinasi</a>
                        </li>
                        <li
                            class="bg-white p-3 rounded shadow-sm hover:bg-gray-50 transition flex items-center gap-3 dark:bg-putr-blue dark:hover:bg-putr-blue-dark">
                            <i class="fas fa-file-pdf text-red-500 text-xl"></i>
                            <a href="#"
                                class="text-sm font-medium text-putr-blue-dark hover:text-putr-blue dark:text-white dark:hover:text-putr-yellow">Hasil
                                Seleksi Berkas Tenaga Ahli</a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </section>

    <!-- DOCUMENTS SECTION -->
    <section class="py-12 bg-gray-50 dark:bg-putr-blue-dark transition-colors duration-300">
        <div class="container mx-auto px-4">
            <div class="text-center mb-10">
                <h2 class="text-2xl font-bold text-putr-blue dark:text-putr-yellow">Dokumen Publik</h2>
                <p class="text-gray-500 mt-2 dark:text-gray-300">Transparansi data dan unduhan dokumen resmi</p>
            </div>

            <div class="bg-white rounded-lg shadow overflow-hidden dark:bg-putr-blue">
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead class="bg-putr-blue text-white dark:bg-putr-blue-dark">
                            <tr>
                                <th class="p-4 text-sm font-semibold text-gray-100">No</th>
                                <th class="p-4 text-sm font-semibold text-gray-100">Nama Dokumen</th>
                                <th class="p-4 text-sm font-semibold text-gray-100">Kategori</th>
                                <th class="p-4 text-sm font-semibold text-gray-100">Tahun</th>
                                <th class="p-4 text-sm font-semibold text-center text-gray-100">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                            <tr class="hover:bg-blue-50 transition dark:hover:bg-putr-blue-dark">
                                <td class="p-4 text-sm dark:text-white">1</td>
                                <td class="p-4 text-sm font-medium flex items-center gap-2 dark:text-white">
                                    <i class="fas fa-file-pdf text-red-500"></i> Laporan Kinerja Dinas PUTR 2022
                                </td>
                                <td class="p-4 text-sm text-gray-600 dark:text-gray-300">Laporan</td>
                                <td class="p-4 text-sm text-gray-600 dark:text-gray-300">2023</td>
                                <td class="p-4 text-sm text-center">
                                    <a href="#"
                                        class="bg-putr-yellow text-putr-blue-dark px-3 py-1 rounded text-xs font-bold hover:bg-putr-yellow-dark transition">Unduh</a>
                                </td>
                            </tr>
                            <tr class="hover:bg-blue-50 transition dark:hover:bg-putr-blue-dark">
                                <td class="p-4 text-sm dark:text-white">2</td>
                                <td class="p-4 text-sm font-medium flex items-center gap-2 dark:text-white">
                                    <i class="fas fa-file-pdf text-red-500"></i> RTRW Provinsi Jambi
                                </td>
                                <td class="p-4 text-sm text-gray-600 dark:text-gray-300">Perencanaan</td>
                                <td class="p-4 text-sm text-gray-600 dark:text-gray-300">2023</td>
                                <td class="p-4 text-sm text-center">
                                    <a href="#"
                                        class="bg-putr-yellow text-putr-blue-dark px-3 py-1 rounded text-xs font-bold hover:bg-putr-yellow-dark transition">Unduh</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <!-- GALLERY SECTION -->
    <section class="py-12 bg-white dark:bg-putr-blue-dark transition-colors duration-300">
        <div class="container mx-auto px-4">
            <div class="text-center mb-10">
                <h2 class="text-2xl font-bold text-putr-blue dark:text-putr-yellow">Galeri Foto</h2>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="group relative h-48 overflow-hidden rounded-lg cursor-pointer">
                    <img src="https://placehold.co/400x300?text=Foto+1"
                        class="w-full h-full object-cover transition duration-500 group-hover:scale-110">
                    <div
                        class="absolute inset-0 bg-putr-blue-dark/70 opacity-0 group-hover:opacity-100 transition flex items-center justify-center">
                        <span class="text-white font-bold">Kunjungan Gubernur</span>
                    </div>
                </div>
                <div class="group relative h-48 overflow-hidden rounded-lg cursor-pointer">
                    <img src="https://placehold.co/400x300?text=Foto+2"
                        class="w-full h-full object-cover transition duration-500 group-hover:scale-110">
                    <div
                        class="absolute inset-0 bg-putr-blue-dark/70 opacity-0 group-hover:opacity-100 transition flex items-center justify-center">
                        <span class="text-white font-bold">Peresmian Jembatan</span>
                    </div>
                </div>
                <div class="group relative h-48 overflow-hidden rounded-lg cursor-pointer">
                    <img src="https://placehold.co/400x300?text=Foto+3"
                        class="w-full h-full object-cover transition duration-500 group-hover:scale-110">
                    <div
                        class="absolute inset-0 bg-putr-blue-dark/70 opacity-0 group-hover:opacity-100 transition flex items-center justify-center">
                        <span class="text-white font-bold">Rapat Koordinasi</span>
                    </div>
                </div>
                <div class="group relative h-48 overflow-hidden rounded-lg cursor-pointer">
                    <img src="https://placehold.co/400x300?text=Foto+4"
                        class="w-full h-full object-cover transition duration-500 group-hover:scale-110">
                    <div
                        class="absolute inset-0 bg-putr-blue-dark/70 opacity-0 group-hover:opacity-100 transition flex items-center justify-center">
                        <span class="text-white font-bold">Survey Lapangan</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="bg-putr-blue text-gray-300 pt-16 pb-6 dark:bg-putr-blue-dark dark:border-t dark:border-gray-800">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-12">
                <!-- About -->
                <div>
                    <div class="flex items-center gap-3 mb-4">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/c/ca/Logo_Resmi_Provinsi_Jambi.png"
                            class="h-12 w-auto " alt="Logo Jambi">
                        <h3 class="text-white font-bold text-lg">DPUTR PROVINSI JAMBI</h3>
                    </div>
                    <p class="text-sm leading-relaxed mb-4">Unsur pelaksana urusan pemerintahan bidang pekerjaan umum
                        dan penataan ruang Provinsi Jambi.</p>
                    <div class="flex gap-4">
                        <a href="#" class="hover:text-putr-yellow"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="hover:text-putr-yellow"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="hover:text-putr-yellow"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="hover:text-putr-yellow"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>

                <!-- Link -->
                <div>
                    <h4 class="text-putr-yellow font-bold uppercase text-sm tracking-wider mb-6">Navigasi</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#" class="hover:text-white hover:pl-2 transition">Beranda</a></li>
                        <li><a href="#" class="hover:text-white hover:pl-2 transition">Profil Dinas</a></li>
                        <li><a href="#" class="hover:text-white hover:pl-2 transition">Berita</a></li>
                        <li><a href="#" class="hover:text-white hover:pl-2 transition">Layanan Publik</a></li>
                    </ul>
                </div>

                <!-- Contact -->
                <div class="lg:col-span-2">
                    <h4 class="text-putr-yellow font-bold uppercase text-sm tracking-wider mb-6">Hubungi Kami</h4>
                    <ul class="space-y-4 text-sm">
                        <li class="flex gap-3">
                            <i class="fas fa-map-marker-alt mt-1 text-putr-yellow"></i>
                            <span>Komp. Kantor Gubernur Jambi, Jl. Jend. A. Yani No.10, Telanaipura, Kota Jambi,
                                Jambi</span>
                        </li>
                        <li class="flex gap-3">
                            <i class="fas fa-phone mt-1 text-putr-yellow"></i>
                            <span>(0741) 123456</span>
                        </li>
                        <li class="flex gap-3">
                            <i class="fas fa-envelope mt-1 text-putr-yellow"></i>
                            <span>putr@jambiprov.go.id</span>
                        </li>
                    </ul>
                    <div class="mt-6 h-32 bg-gray-700 rounded flex items-center justify-center text-gray-500">
                        <!-- Placeholder for Google Maps -->
                        <i class="fas fa-map mr-2"></i> Google Maps Embed Area
                    </div>
                </div>
            </div>

            <div class="border-t border-gray-700 pt-6 text-center text-xs">
                &copy; 2023 Dinas Pekerjaan Umum dan Tata Ruang Provinsi Jambi. All Rights Reserved.
            </div>
        </div>
    </footer>

    <!-- Script -->
    <script>
        // Toggle Mobile Menu
        function toggleMenu() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        }

        // Simple Slider Logic
        let currentSlide = 0;
        const slides = document.querySelectorAll('.hero-slide');

        function nextSlide() {
            slides[currentSlide].classList.remove('opacity-100');
            slides[currentSlide].classList.add('opacity-0');
            slides[currentSlide].classList.remove('active');

            currentSlide = (currentSlide + 1) % slides.length;

            slides[currentSlide].classList.remove('opacity-0');
            slides[currentSlide].classList.add('opacity-100');
            slides[currentSlide].classList.add('active');
        }

        setInterval(nextSlide, 5000);
    </script>
</body>

</html>