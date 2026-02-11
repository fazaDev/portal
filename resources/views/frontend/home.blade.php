@extends('frontend.layouts.app')

@section('title', 'Dinas Pekerjaan Umum dan Tata Ruang Provinsi Jambi')

@section('content')
    <!-- HERO SLIDER -->
    <div class="relative h-[400px] md:h-[550px] bg-black overflow-hidden">
        <!-- Slide 1 -->
        <div class="hero-slide absolute inset-0 bg-cover bg-center transition-opacity duration-1000 opacity-100 active" style="background-image: url('https://images.unsplash.com/photo-1590496793929-36417d3117de?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80');">
            <div class="absolute inset-0 bg-gradient-to-r from-putr-blue-dark/90 to-putr-blue-dark/30 flex items-center">
                <div class="container mx-auto px-4 text-white">
                    <h2 class="text-3xl md:text-5xl font-bold mb-4 max-w-2xl leading-tight">Pembangunan Infrastruktur <span class="text-putr-yellow">Jambi</span></h2>
                    <p class="text-lg mb-6 max-w-xl text-gray-200">Mewujudkan konektivitas wilayah yang merata demi kesejahteraan masyarakat Provinsi Jambi.</p>
                    <a href="#" class="inline-block bg-putr-yellow text-putr-blue-dark font-bold py-3 px-8 rounded hover:bg-putr-yellow-dark transition shadow-lg">Pelajari Selengkapnya</a>
                </div>
            </div>
        </div>
        <!-- Slide 2 -->
        <div class="hero-slide absolute inset-0 bg-cover bg-center transition-opacity duration-1000 opacity-0" style="background-image: url('https://images.unsplash.com/photo-1582555172866-f73bb12a2ab3?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80');">
            <div class="absolute inset-0 bg-gradient-to-r from-putr-blue-dark/90 to-putr-blue-dark/30 flex items-center">
                <div class="container mx-auto px-4 text-white">
                    <h2 class="text-3xl md:text-5xl font-bold mb-4 max-w-2xl leading-tight">Tata Ruang yang <span class="text-putr-yellow">Berkelanjutan</span></h2>
                    <p class="text-lg mb-6 max-w-xl text-gray-200">Perencanaan wilayah yang terintegrasi, harmonis, dan ramah lingkungan untuk masa depan.</p>
                    <a href="#" class="inline-block bg-transparent border-2 border-white text-white font-bold py-3 px-8 rounded hover:bg-white hover:text-putr-blue transition">Lihat Masterplan</a>
                </div>
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
                    Selamat Datang di Website Resmi Dinas PU-TR Provinsi Jambi &bull; Pengumuman Lelang Proyek Irigasi Tahap II telah dibuka &bull; Rapat Koordinasi Tata Ruang akan dilaksanakan Senin depan.
                </div>
            </div>
        </div>
    </div>

    <!-- LAYANAN CEPAT -->
    <section class="py-12 bg-gray-50 dark:bg-putr-blue-dark transition-colors duration-300">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6">
                <!-- Service Item -->
                <a href="#" class="bg-white p-6 rounded-lg shadow-sm hover:shadow-lg hover:-translate-y-1 transition text-center border-t-4 border-putr-yellow group dark:bg-putr-blue dark:border-gray-700">
                    <div class="text-putr-blue text-4xl mb-3 group-hover:text-putr-yellow-dark transition dark:text-white">
                        <i class="fas fa-hard-hat"></i>
                    </div>
                    <h3 class="font-bold text-putr-blue-dark text-sm md:text-base dark:text-gray-200">LPSE & Lelang</h3>
                </a>
                <!-- Service Item -->
                <a href="#" class="bg-white p-6 rounded-lg shadow-sm hover:shadow-lg hover:-translate-y-1 transition text-center border-t-4 border-putr-yellow group dark:bg-putr-blue dark:border-gray-700">
                    <div class="text-putr-blue text-4xl mb-3 group-hover:text-putr-yellow-dark transition dark:text-white">
                        <i class="fas fa-file-contract"></i>
                    </div>
                    <h3 class="font-bold text-putr-blue-dark text-sm md:text-base dark:text-gray-200">Perizinan</h3>
                </a>
                <!-- Service Item -->
                <a href="#" class="bg-white p-6 rounded-lg shadow-sm hover:shadow-lg hover:-translate-y-1 transition text-center border-t-4 border-putr-yellow group dark:bg-putr-blue dark:border-gray-700">
                    <div class="text-putr-blue text-4xl mb-3 group-hover:text-putr-yellow-dark transition dark:text-white">
                        <i class="fas fa-bullhorn"></i>
                    </div>
                    <h3 class="font-bold text-putr-blue-dark text-sm md:text-base dark:text-gray-200">Pengaduan</h3>
                </a>
                <!-- Service Item -->
                <a href="#" class="bg-white p-6 rounded-lg shadow-sm hover:shadow-lg hover:-translate-y-1 transition text-center border-t-4 border-putr-yellow group dark:bg-putr-blue dark:border-gray-700">
                    <div class="text-putr-blue text-4xl mb-3 group-hover:text-putr-yellow-dark transition dark:text-white">
                        <i class="fas fa-map-marked-alt"></i>
                    </div>
                    <h3 class="font-bold text-putr-blue-dark text-sm md:text-base dark:text-gray-200">GIS & Peta</h3>
                </a>
                <!-- Service Item -->
                <a href="#" class="bg-white p-6 rounded-lg shadow-sm hover:shadow-lg hover:-translate-y-1 transition text-center border-t-4 border-putr-yellow group dark:bg-putr-blue dark:border-gray-700">
                    <div class="text-putr-blue text-4xl mb-3 group-hover:text-putr-yellow-dark transition dark:text-white">
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
                <div class="flex items-center justify-between mb-8 border-b-2 border-gray-100 pb-2 dark:border-gray-700">
                    <h2 class="text-2xl font-bold text-putr-blue border-l-4 border-putr-yellow pl-3 dark:text-putr-yellow">Berita Terkini</h2>
                    <a href="#" class="text-sm text-putr-blue font-medium hover:underline">Lihat Semua &rarr;</a>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- News Card 1 -->
                    <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition group dark:bg-putr-blue">
                        <div class="h-48 overflow-hidden">
                            <img src="https://placehold.co/600x400?text=Jalan+Lintas+Timur" alt="News" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                        </div>
                        <div class="p-5">
                            <div class="flex items-center gap-2 mb-3 text-xs text-gray-500">
                                <span class="bg-putr-blue text-white px-2 py-1 rounded">Bina Marga</span>
                                <span><i class="far fa-calendar"></i> 12 Okt 2023</span>
                            </div>
                            <h3 class="text-lg font-bold text-putr-blue-dark mb-2 leading-snug group-hover:text-putr-yellow-dark transition dark:text-gray-100"><a href="{{ url('/berita/detail') }}">Pengecoran Jalan Lintas Timur Dilanjutkan Tahun Ini</a></h3>
                            <p class="text-gray-600 text-sm line-clamp-3 dark:text-gray-400">Pemerintah Provinsi Jambi melalui Dinas PU-TR memastikan pengecoran jalan sepanjang 15 KM akan selesai sebelum akhir tahun...</p>
                        </div>
                    </div>
                    <!-- News Card 2 -->
                    <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition group dark:bg-putr-blue">
                        <div class="h-48 overflow-hidden">
                            <img src="https://placehold.co/600x400?text=Sungai+Batanghari" alt="News" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                        </div>
                        <div class="p-5">
                            <div class="flex items-center gap-2 mb-3 text-xs text-gray-500">
                                <span class="bg-putr-blue text-white px-2 py-1 rounded">Sumber Daya Air</span>
                                <span><i class="far fa-calendar"></i> 10 Okt 2023</span>
                            </div>
                            <h3 class="text-lg font-bold text-putr-blue-dark mb-2 leading-snug group-hover:text-putr-yellow-dark transition dark:text-gray-100"><a href="{{ url('/berita/detail') }}">Normalisasi Sungai Batanghari Masuk Tahap Perencanaan</a></h3>
                            <p class="text-gray-600 text-sm line-clamp-3 dark:text-gray-400">Untuk mengantisipasi banjir tahunan, tim teknis sedang melakukan survei mendalam terhadap kondisi sedimentasi...</p>
                        </div>
                    </div>
                    <!-- News Card 3 -->
                    <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition group dark:bg-putr-blue">
                        <div class="h-48 overflow-hidden">
                            <img src="https://placehold.co/600x400?text=Jalan+Suak+Kandis" alt="News" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                        </div>
                        <div class="p-5">
                            <div class="flex items-center gap-2 mb-3 text-xs text-gray-500">
                                <span class="bg-putr-blue text-white px-2 py-1 rounded">Bina Marga</span>
                                <span><i class="far fa-calendar"></i> 12 Okt 2023</span>
                            </div>
                            <h3 class="text-lg font-bold text-putr-blue-dark mb-2 leading-snug group-hover:text-putr-yellow-dark transition dark:text-gray-100"><a href="{{ url('/berita/detail') }}">Pengecoran Jalan Lintas Timur Dilanjutkan Tahun Ini</a></h3>
                            <p class="text-gray-600 text-sm line-clamp-3 dark:text-gray-400">Pemerintah Provinsi Jambi melalui Dinas PU-TR memastikan pengecoran jalan sepanjang 15 KM akan selesai sebelum akhir tahun...</p>
                        </div>
                    </div>
                    <!-- News Card 4 -->
                    <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition group dark:bg-putr-blue">
                        <div class="h-48 overflow-hidden">
                            <img src="https://placehold.co/600x400?text=Jembatan+Kelok+Sago" alt="News" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                        </div>
                        <div class="p-5">
                            <div class="flex items-center gap-2 mb-3 text-xs text-gray-500">
                                <span class="bg-putr-blue text-white px-2 py-1 rounded">Sumber Daya Air</span>
                                <span><i class="far fa-calendar"></i> 10 Okt 2023</span>
                            </div>
                            <h3 class="text-lg font-bold text-putr-blue-dark mb-2 leading-snug group-hover:text-putr-yellow-dark transition dark:text-gray-100"><a href="{{ url('/berita/detail') }}">Normalisasi Sungai Batanghari Masuk Tahap Perencanaan</a></h3>
                            <p class="text-gray-600 text-sm line-clamp-3 dark:text-gray-400">Untuk mengantisipasi banjir tahunan, tim teknis sedang melakukan survei mendalam terhadap kondisi sedimentasi...</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column: Agenda & Sidebar (1/3 width) -->
            <div class="w-full lg:w-1/3">
                
                <!-- Agenda Widget -->
                <div class="mb-8">
                    <div class="flex items-center justify-between mb-4 border-b-2 border-gray-100 pb-2 dark:border-gray-700">
                        <h2 class="text-xl font-bold text-putr-blue pl-3 dark:text-putr-yellow">Agenda Kegiatan</h2>
                    </div>
                    <div class="bg-white border border-gray-100 rounded-lg p-4 shadow-sm space-y-4 dark:bg-putr-blue dark:border-gray-700">
                        <!-- Agenda Item -->
                        <div class="flex gap-4 items-start border-b border-gray-100 pb-4 last:border-0 last:pb-0 dark:border-gray-700">
                            <div class="bg-gray-50 p-3 text-center rounded border border-putr-yellow min-w-[60px] dark:bg-putr-blue-dark">
                                <span class="block text-xl font-bold text-putr-blue dark:text-putr-yellow">25</span>
                                <span class="block text-xs uppercase font-semibold text-gray-500">Okt</span>
                            </div>
                            <div>
                                <h4 class="font-bold text-putr-blue-dark text-sm mb-1 dark:text-white">Rapat Evaluasi Fisik Triwulan III</h4>
                                <p class="text-xs text-gray-500 dark:text-gray-300"><i class="far fa-clock text-putr-yellow mr-1"></i> 09:00 WIB</p>
                            </div>
                        </div>
                        <!-- Agenda Item -->
                        <div class="flex gap-4 items-start">
                            <div class="bg-gray-50 p-3 text-center rounded border border-putr-yellow min-w-[60px] dark:bg-putr-blue-dark">
                                <span class="block text-xl font-bold text-putr-blue dark:text-putr-yellow">02</span>
                                <span class="block text-xs uppercase font-semibold text-gray-500">Nov</span>
                            </div>
                            <div>
                                <h4 class="font-bold text-putr-blue-dark text-sm mb-1 dark:text-white">Sosialisasi K3 Konstruksi</h4>
                                <p class="text-xs text-gray-500 dark:text-gray-300"><i class="far fa-clock text-putr-yellow mr-1"></i> 13:00 WIB</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pengumuman Widget -->
                <div>
                    <div class="flex items-center justify-between mb-4 border-b-2 border-gray-100 pb-2 dark:border-gray-700">
                        <h2 class="text-xl font-bold text-putr-blue pl-3 dark:text-putr-yellow">Pengumuman</h2>
                    </div>
                    <ul class="space-y-3">
                        <li class="bg-white p-3 rounded shadow-sm hover:bg-gray-50 transition flex items-center gap-3 dark:bg-putr-blue dark:hover:bg-putr-blue-dark">
                            <i class="fas fa-file-pdf text-red-500 text-xl"></i>
                            <a href="#" class="text-sm font-medium text-putr-blue-dark hover:text-putr-blue dark:text-white dark:hover:text-putr-yellow">Undangan Rapat Koordinasi</a>
                        </li>
                        <li class="bg-white p-3 rounded shadow-sm hover:bg-gray-50 transition flex items-center gap-3 dark:bg-putr-blue dark:hover:bg-putr-blue-dark">
                            <i class="fas fa-file-pdf text-red-500 text-xl"></i>
                            <a href="#" class="text-sm font-medium text-putr-blue-dark hover:text-putr-blue dark:text-white dark:hover:text-putr-yellow">Hasil Seleksi Berkas Tenaga Ahli</a>
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
                                    <a href="#" class="bg-putr-yellow text-putr-blue-dark px-3 py-1 rounded text-xs font-bold hover:bg-putr-yellow-dark transition">Unduh</a>
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
                                    <a href="#" class="bg-putr-yellow text-putr-blue-dark px-3 py-1 rounded text-xs font-bold hover:bg-putr-yellow-dark transition">Unduh</a>
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
                    <img src="https://placehold.co/400x300?text=Foto+1" class="w-full h-full object-cover transition duration-500 group-hover:scale-110">
                    <div class="absolute inset-0 bg-putr-blue-dark/70 opacity-0 group-hover:opacity-100 transition flex items-center justify-center">
                        <span class="text-white font-bold">Kunjungan Gubernur</span>
                    </div>
                </div>
                <div class="group relative h-48 overflow-hidden rounded-lg cursor-pointer">
                    <img src="https://placehold.co/400x300?text=Foto+2" class="w-full h-full object-cover transition duration-500 group-hover:scale-110">
                    <div class="absolute inset-0 bg-putr-blue-dark/70 opacity-0 group-hover:opacity-100 transition flex items-center justify-center">
                        <span class="text-white font-bold">Peresmian Jembatan</span>
                    </div>
                </div>
                <div class="group relative h-48 overflow-hidden rounded-lg cursor-pointer">
                    <img src="https://placehold.co/400x300?text=Foto+3" class="w-full h-full object-cover transition duration-500 group-hover:scale-110">
                    <div class="absolute inset-0 bg-putr-blue-dark/70 opacity-0 group-hover:opacity-100 transition flex items-center justify-center">
                        <span class="text-white font-bold">Rapat Koordinasi</span>
                    </div>
                </div>
                <div class="group relative h-48 overflow-hidden rounded-lg cursor-pointer">
                    <img src="https://placehold.co/400x300?text=Foto+4" class="w-full h-full object-cover transition duration-500 group-hover:scale-110">
                    <div class="absolute inset-0 bg-putr-blue-dark/70 opacity-0 group-hover:opacity-100 transition flex items-center justify-center">
                        <span class="text-white font-bold">Survey Lapangan</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
<script>
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
@endpush