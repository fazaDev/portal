<header class="bg-white shadow-md sticky top-0 z-50 dark:bg-putr-blue dark:border-gray-700 transition-colors duration-300">
    <div class="container mx-auto px-4 py-4 flex justify-between items-center">
        <!-- Logo -->
        <a href="{{ route('home') }}" class="flex items-center gap-3 group">
            <!-- Ganti src dengan logo asli nanti -->
            <img src="https://upload.wikimedia.org/wikipedia/commons/c/ca/Logo_Resmi_Provinsi_Jambi.png" alt="Logo Jambi" class="h-12 w-auto">
            <div>
                <h1 class="text-putr-blue font-bold text-lg leading-tight group-hover:text-putr-yellow-dark transition dark:text-white">DINAS PEKERJAAN UMUM<br>DAN TATA RUANG</h1>
                <p class="text-gray-500 text-xs dark:text-gray-400">PROVINSI JAMBI</p>
            </div>
        </a>

        <!-- Desktop Menu -->
        <nav class="hidden lg:flex gap-6 items-center">
            <a href="{{ route('home') }}" class="font-medium text-putr-blue hover:text-putr-yellow-dark border-b-2 border-transparent hover:border-putr-yellow transition py-1 dark:text-white dark:hover:text-putr-yellow">Beranda</a>
            
            <!-- DROPDOWN PROFIL START -->
            <!-- <div class="relative group">
                <a href="#" class="font-medium text-putr-blue hover:text-putr-yellow-dark border-b-2 border-transparent hover:border-putr-yellow transition py-1 flex items-center gap-1 dark:text-white dark:hover:text-putr-yellow">
                    Profil <i class="fas fa-chevron-down text-xs"></i>
                </a> -->
                
                <!-- Menu Dropdown (Hidden by default, Show on Hover) -->
                <!-- <div class="absolute top-full left-0 w-64 bg-white shadow-xl rounded-md overflow-hidden border-t-4 border-putr-yellow z-50 transform transition-all duration-200 ease-out opacity-0 pointer-events-none translate-y-1 group-hover:opacity-100 group-hover:pointer-events-auto group-hover:translate-y-0 dark:bg-putr-blue dark:border-gray-700">
                    <a href="#" class="block px-6 py-3 text-sm text-gray-700 hover:bg-putr-blue hover:text-white transition duration-200 flex items-center gap-2 dark:text-white dark:hover:bg-putr-blue-dark">
                        <i class="fas fa-info-circle text-xs w-4"></i> Tentang Kami
                    </a>
                    <a href="#" class="block px-6 py-3 text-sm text-gray-700 hover:bg-putr-blue hover:text-white transition duration-200 flex items-center gap-2 dark:text-white dark:hover:bg-putr-blue-dark">
                        <i class="fas fa-bullseye text-xs w-4"></i> Visi dan Misi
                    </a>
                    <a href="#" class="block px-6 py-3 text-sm text-gray-700 hover:bg-putr-blue hover:text-white transition duration-200 flex items-center gap-2 dark:text-white dark:hover:bg-putr-blue-dark">
                        <i class="fas fa-sitemap text-xs w-4"></i> Struktur Organisasi
                    </a>
                    <a href="#" class="block px-6 py-3 text-sm text-gray-700 hover:bg-putr-blue hover:text-white transition duration-200 flex items-center gap-2 dark:text-white dark:hover:bg-putr-blue-dark">
                        <i class="fas fa-tasks text-xs w-4"></i> Tugas Pokok dan Fungsi
                    </a>
                </div>
            </div> -->
            <!-- DROPDOWN PROFIL END -->

            <a href="{{ route('profil') }}" class="font-medium text-putr-blue hover:text-putr-yellow-dark border-b-2 border-transparent hover:border-putr-yellow transition py-1 flex items-center gap-1 dark:text-white dark:hover:text-putr-yellow">Profil</a>
            <a href="{{ route('berita') }}" class="font-medium text-putr-blue hover:text-putr-yellow-dark border-b-2 border-transparent hover:border-putr-yellow transition py-1 flex items-center gap-1 dark:text-white dark:hover:text-putr-yellow">Berita</a>
            <a href="#" class="font-medium text-putr-blue hover:text-putr-yellow-dark border-b-2 border-transparent hover:border-putr-yellow transition py-1 flex items-center gap-1 dark:text-white dark:hover:text-putr-yellow">Layanan</a>
            <a href="#" class="font-medium text-putr-blue hover:text-putr-yellow-dark border-b-2 border-transparent hover:border-putr-yellow transition py-1 flex items-center gap-1 dark:text-white dark:hover:text-putr-yellow">Dokumen</a>
            <a href="#" class="font-medium text-putr-blue hover:text-putr-yellow-dark border-b-2 border-transparent hover:border-putr-yellow transition py-1 flex items-center gap-1 dark:text-white dark:hover:text-putr-yellow">Kontak</a>
            
            <!-- Dark Mode Toggle Button -->
            <button onclick="toggleDarkMode()" class="ml-2 w-8 h-8 flex items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 dark:bg-putr-blue-dark dark:hover:bg-gray-900 transition text-putr-blue dark:text-putr-yellow border border-gray-200 dark:border-putr-yellow/50">
                <i class="fas fa-moon !block dark:!hidden"></i>
                <i class="fas fa-sun !hidden dark:!block"></i>
            </button>
        </nav>

        <!-- Mobile Toggle -->
        <button onclick="toggleMenu()" class="lg:hidden text-putr-blue text-2xl focus:outline-none dark:text-putr-yellow">
            <i class="fas fa-bars"></i>
        </button>
    </div>

    <!-- Mobile Menu (Updated with Submenu) -->
    <div id="mobile-menu" class="hidden lg:hidden bg-white border-t p-4 flex flex-col gap-2 shadow-lg dark:bg-putr-blue dark:border-gray-700">
        <a href="{{ route('home') }}" class="font-medium text-putr-blue py-2 border-b border-gray-100 dark:text-white dark:border-gray-700">Beranda</a>
        
        <!-- Mobile Profil Submenu -->
        <!-- <div class="pl-4 border-l-2 border-putr-yellow my-1">
            <p class="text-xs font-bold text-gray-400 mb-2">Profil</p>
            <a href="#" class="block text-sm text-gray-700 py-2 hover:text-putr-blue dark:text-gray-200 dark:hover:text-putr-yellow">Tentang Kami</a>
            <a href="#" class="block text-sm text-gray-700 py-2 hover:text-putr-blue dark:text-gray-200 dark:hover:text-putr-yellow">Visi dan Misi</a>
            <a href="#" class="block text-sm text-gray-700 py-2 hover:text-putr-blue dark:text-gray-200 dark:hover:text-putr-yellow">Struktur Organisasi</a>
            <a href="#" class="block text-sm text-gray-700 py-2 hover:text-putr-blue dark:text-gray-200 dark:hover:text-putr-yellow">Tugas Pokok dan Fungsi</a>
        </div> -->

        <a href="{{ route('profil') }}" class="font-medium text-gray-600 py-2 border-b border-gray-100 dark:text-white dark:border-gray-700">Profil</a>
        <a href="{{ route('berita') }}" class="font-medium text-gray-600 py-2 border-b border-gray-100 dark:text-white dark:border-gray-700">Berita</a>
        <a href="#" class="font-medium text-gray-600 py-2 border-b border-gray-100 dark:text-white dark:border-gray-700">Layanan</a>
        <a href="#" class="font-medium text-gray-600 py-2 border-b border-gray-100 dark:text-white dark:border-gray-700">Dokumen</a>
        <a href="#" class="font-medium text-gray-600 py-2 dark:text-white">Kontak</a>
        
        <!-- Mobile Dark Mode Toggle -->
        <div class="py-2 border-t border-gray-100 dark:border-gray-700 mt-2 flex items-center justify-between">
            <span class="font-medium text-gray-600 dark:text-white">Mode Gelap</span>
            <button onclick="toggleDarkMode()" class="w-10 h-10 flex items-center justify-center rounded-full bg-gray-100 dark:bg-putr-blue-dark text-putr-blue dark:text-putr-yellow border dark:border-putr-yellow/50">
                <i class="fas fa-moon !block dark:!hidden"></i>
                <i class="fas fa-sun !hidden dark:!block"></i>
            </button>
        </div>
    </div>
</header>