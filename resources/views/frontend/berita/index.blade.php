@extends('frontend.layouts.app')

@section('title', 'Berita - Dinas PUTR Provinsi Jambi')

@section('content')
<!-- BREADCRUMB -->
<div class="bg-gray-100 py-12 dark:bg-gray-800">
    <div class="container mx-auto px-4">
        <div class="text-sm breadcrumbs">
            <ul class="flex items-center gap-2 text-gray-500 dark:text-gray-400">
                <li><a href="{{ url('/') }}" class="hover:text-putr-blue dark:hover:text-putr-yellow"><i class="fas fa-home"></i> Beranda</a></li>
                <li><span>/</span></li>
                <li><span class="text-putr-blue font-medium dark:text-gray-200">Berita</span></li>
            </ul>
        </div>
    </div>
</div>

<!-- NEWS LIST -->
<section class="py-12 bg-white dark:bg-putr-blue-dark transition-colors duration-300">
    <div class="container mx-auto px-4">
        <div class="flex flex-col lg:flex-row gap-10">
            <!-- Main Content -->
            <div class="w-full lg:w-2/3">
                <h1 class="text-2xl md:text-3xl font-bold text-putr-blue-dark mb-6 dark:text-gray-100">
                    Berita Terbaru
                </h1>
                <!-- <div class="space-y-4">
                        <a href="#" class="flex items-center gap-4 group">
                            <img 
                                src="https://placehold.co/120x80" 
                                alt="News"
                                class="w-20 h-14 object-cover rounded-md shrink-0"
                            >
                            <div>
                                <h4 class="text-sm font-semibold text-putr-blue-dark dark:text-white group-hover:text-putr-blue transition">
                                    Normalisasi Sungai Batanghari
                                </h4>
                                <span class="text-xs text-gray-500 dark:text-gray-400">
                                    10 Okt 2023
                                </span>
                            </div>
                        </a>

                        <a href="#" class="flex items-center gap-4 group">
                            <img 
                                src="https://placehold.co/120x80" 
                                alt="News"
                                class="w-20 h-14 object-cover rounded-md shrink-0"
                            >
                            <div>
                                <h4 class="text-sm font-semibold text-putr-blue-dark dark:text-white group-hover:text-putr-blue transition">
                                    Rapat Evaluasi Kinerja
                                </h4>
                                <span class="text-xs text-gray-500 dark:text-gray-400">
                                    08 Okt 2023
                                </span>
                            </div>
                        </a>

                        <a href="#" class="flex items-center gap-4 group">
                            <img 
                                src="https://placehold.co/120x80" 
                                alt="News"
                                class="w-20 h-14 object-cover rounded-md shrink-0"
                            >
                            <div>
                                <h4 class="text-sm font-semibold text-putr-blue-dark dark:text-white group-hover:text-putr-blue transition">
                                    Kunjungan Kerja Menteri
                                </h4>
                                <span class="text-xs text-gray-500 dark:text-gray-400">
                                    05 Okt 2023
                                </span>
                            </div>
                        </a>
                    </div>
                </div> -->

                <div class="space-y-5">
                    <div class="space-y-6">
                        <!-- Item 1 -->
                        <div class="flex items-center gap-4 group">
                            <img 
                                src="https://placehold.co/120x80" 
                                alt="News"
                                class="w-64 h-40 object-cover rounded-md shrink-0"
                            >
                            <div>
                                <div class="flex items-center gap-2 mb-3 text-xs text-gray-500">
                                    <span class="bg-putr-blue text-white px-2 py-1 rounded">Bina Marga</span>
                                    <span><i class="far fa-calendar"></i> 12 Okt 2023</span>
                                </div>
                                <a href="#" class="block text-lg font-bold text-putr-blue-dark mb-2 leading-snug group-hover:text-putr-yellow-dark transition dark:text-gray-100">
                                    Pengecoran Jalan Lintas Timur Dilanjutkan Tahun Ini
                                </a>
                                <p class="text-gray-600 text-sm line-clamp-3 dark:text-gray-400">Pemerintah Provinsi Jambi melalui Dinas PU-TR memastikan pengecoran jalan sepanjang 15 KM akan selesai sebelum akhir tahun...</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="w-full lg:w-1/3">
                <!-- Search -->
                <div class="mb-8">
                    <div class="relative">
                        <input type="text" placeholder="Cari berita..." class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:border-putr-blue focus:ring-1 focus:ring-putr-blue dark:bg-gray-800 dark:border-gray-600 dark:text-white">
                        <button class="absolute right-0 top-0 h-full px-4 text-gray-500 hover:text-putr-blue dark:text-gray-400">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>

                <!-- Recent News -->
                <div class="bg-white dark:bg-putr-blue rounded-lg p-5 mb-6">
                    <h3 class="text-lg font-bold text-putr-blue dark:text-putr-yellow mb-4">
                        Berita Terbaru
                    </h3>

                    <div class="space-y-4">
                        <!-- Item -->
                        <a href="#" class="flex items-center gap-4 group">
                            <img 
                                src="https://placehold.co/120x80" 
                                alt="News"
                                class="w-20 h-14 object-cover rounded-md shrink-0"
                            >
                            <div>
                                <h4 class="text-sm font-semibold text-putr-blue-dark dark:text-white group-hover:text-putr-blue transition">
                                    Normalisasi Sungai Batanghari
                                </h4>
                                <span class="text-xs text-gray-500 dark:text-gray-400">
                                    10 Okt 2023
                                </span>
                            </div>
                        </a>

                        <a href="#" class="flex items-center gap-4 group">
                            <img 
                                src="https://placehold.co/120x80" 
                                alt="News"
                                class="w-20 h-14 object-cover rounded-md shrink-0"
                            >
                            <div>
                                <h4 class="text-sm font-semibold text-putr-blue-dark dark:text-white group-hover:text-putr-blue transition">
                                    Rapat Evaluasi Kinerja
                                </h4>
                                <span class="text-xs text-gray-500 dark:text-gray-400">
                                    08 Okt 2023
                                </span>
                            </div>
                        </a>

                        <a href="#" class="flex items-center gap-4 group">
                            <img 
                                src="https://placehold.co/120x80" 
                                alt="News"
                                class="w-20 h-14 object-cover rounded-md shrink-0"
                            >
                            <div>
                                <h4 class="text-sm font-semibold text-putr-blue-dark dark:text-white group-hover:text-putr-blue transition">
                                    Kunjungan Kerja Menteri
                                </h4>
                                <span class="text-xs text-gray-500 dark:text-gray-400">
                                    05 Okt 2023
                                </span>
                            </div>
                        </a>
                    </div>
                </div>



                <!-- Categories -->
                <div class="bg-white border border-gray-100 rounded-lg shadow-sm p-6 dark:bg-putr-blue dark:border-gray-700">
                    <h3 class="text-lg font-bold text-putr-blue mb-4 border-b pb-2 dark:text-putr-yellow">Kategori</h3>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#" class="flex justify-between items-center text-gray-600 hover:text-putr-blue dark:text-gray-300 dark:hover:text-putr-yellow"><span>Bina Marga</span> <span class="bg-gray-100 px-2 py-0.5 rounded text-xs dark:bg-gray-700">12</span></a></li>
                        <li><a href="#" class="flex justify-between items-center text-gray-600 hover:text-putr-blue dark:text-gray-300 dark:hover:text-putr-yellow"><span>Sumber Daya Air</span> <span class="bg-gray-100 px-2 py-0.5 rounded text-xs dark:bg-gray-700">8</span></a></li>
                        <li><a href="#" class="flex justify-between items-center text-gray-600 hover:text-putr-blue dark:text-gray-300 dark:hover:text-putr-yellow"><span>Cipta Karya</span> <span class="bg-gray-100 px-2 py-0.5 rounded text-xs dark:bg-gray-700">5</span></a></li>
                        <li><a href="#" class="flex justify-between items-center text-gray-600 hover:text-putr-blue dark:text-gray-300 dark:hover:text-putr-yellow"><span>Tata Ruang</span> <span class="bg-gray-100 px-2 py-0.5 rounded text-xs dark:bg-gray-700">3</span></a></li>
                        <li><a href="#" class="flex justify-between items-center text-gray-600 hover:text-putr-blue dark:text-gray-300 dark:hover:text-putr-yellow"><span>Sekretariat</span> <span class="bg-gray-100 px-2 py-0.5 rounded text-xs dark:bg-gray-700">10</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
    