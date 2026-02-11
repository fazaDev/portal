@extends('frontend.layouts.app')

@section('title', 'Detail Berita - Dinas PUTR Provinsi Jambi')

@section('content')
<!-- BREADCRUMB -->
<div class="bg-gray-100 py-12 dark:bg-gray-800">
    <div class="container mx-auto px-4">
        <div class="text-sm breadcrumbs">
            <ul class="flex items-center gap-2 text-gray-500 dark:text-gray-400">
                <li><a href="{{ url('/') }}" class="hover:text-putr-blue dark:hover:text-putr-yellow"><i class="fas fa-home"></i> Beranda</a></li>
                <li><span>/</span></li>
                <li><a href="#" class="hover:text-putr-blue dark:hover:text-putr-yellow">Berita</a></li>
                <li><span>/</span></li>
                <li><span class="text-putr-blue font-medium dark:text-gray-200">Pengecoran Jalan Lintas Timur Dilanjutkan Tahun Ini, Target Selesai Desember</span></li>
            </ul>
        </div>
    </div>
</div>

<!-- NEWS CONTENT -->
<section class="py-12 bg-white dark:bg-putr-blue-dark transition-colors duration-300">
    <div class="container mx-auto px-4 flex flex-col lg:flex-row gap-10">
        <!-- Main Article -->
        <div class="w-full lg:w-2/3">
            <div class="mb-6">
                <span class="bg-putr-blue text-white px-3 py-1 rounded text-sm font-semibold">Bina Marga</span>
                <h1 class="text-3xl md:text-4xl font-bold text-putr-blue-dark mt-3 mb-4 leading-tight dark:text-gray-100">
                    Pengecoran Jalan Lintas Timur Dilanjutkan Tahun Ini, Target Selesai Desember
                </h1>
                <div class="flex items-center gap-4 text-sm text-gray-500 dark:text-gray-400">
                    <span><i class="far fa-user mr-1"></i> Admin PUTR</span>
                    <span><i class="far fa-calendar mr-1"></i> 12 Okt 2023</span>
                    <span><i class="far fa-eye mr-1"></i> 1,204 Dilihat</span>
                </div>
            </div>

            <div class="mb-8 rounded-lg overflow-hidden shadow-lg h-[400px]">
                <img src="https://placehold.co/1200x600?text=Pengecoran+Jalan" alt="Pengecoran Jalan" class="w-full h-full object-cover">
            </div>

            <div class="prose max-w-none text-gray-700 leading-relaxed dark:text-gray-300 dark:prose-invert">
                <p class="mb-4 text-lg font-medium">
                    Jambi - Pemerintah Provinsi Jambi melalui Dinas Pekerjaan Umum dan Tata Ruang (PUTR) memastikan kelanjutan proyek pengecoran jalan lintas timur sepajang 15 kilometer.
                </p>
                <p class="mb-4">
                    Kepala Dinas PUTR Provinsi Jambi menyatakan bahwa proyek ini merupakan prioritas utama dalam anggaran perubahan tahun ini. 
                    "Jalan ini adalah urat nadi perekonomian masyarakat. Kita tidak ingin ada keterlambatan lagi. Kontraktor sudah kita mobilisasi mulai minggu depan," ujarnya saat ditemui di ruang kerjanya, Senin (10/10).
                </p>
                <p class="mb-4">
                    Kondisi jalan yang sebelumnya rusak parah akibat tingginya volume kendaraan berat yang melintas, seringkali menyebabkan kemacetan panjang dan kecelakaan. 
                    Dengan adanya perbaikan rigid pavement (beton) ini, diharapkan umur layanan jalan bisa lebih panjang dan mampu menahan beban kendaraan logistik.
                </p>
                
                <h3 class="text-xl font-bold text-putr-blue-dark mt-8 mb-4 dark:text-gray-100">Anggaran dan Spesifikasi</h3>
                <p class="mb-4">
                    Proyek ini menelan anggaran sebesar Rp 45 Miliar yang bersumber dari APBD Provinsi Jambi. Spesifikasi yang digunakan adalah beton K-350 dengan ketebalan 30 cm dan lebar 7 meter. 
                    Selain itu, juga akan dibangun drainase di sisi kiri dan kanan jalan untuk mencegah genangan air yang dapat merusak struktur jalan.
                </p>
                <p class="mb-4">
                    "Kami minta masyarakat bersabar selama proses pengerjaan, karena akan ada sistem buka tutup jalan. Kami usahakan gangguan lalu lintas seminimal mungkin," tambahnya.
                </p>

                <h3 class="text-xl font-bold text-putr-blue-dark mt-8 mb-4 dark:text-gray-100">Harapan Masyarakat</h3>
                <p class="mb-4">
                    Warga sekitar menyambut baik kabar ini. Budi (45), salah satu sopir truk yang sering melintas, mengaku sangat terbantu jika jalan tersebut segera mulus. 
                    "Biasanya kalau lewat situ bisa habis waktu 2 jam cuma buat 15 kilo, hancur semua mobil. Kalau sudah dicor kan enak," ungkapnya.
                </p>
            </div>

            <!-- Share Buttons -->
            <div class="mt-8 pt-6 border-t border-gray-100 dark:border-gray-700">
                <p class="font-bold text-gray-700 mb-3 dark:text-gray-300">Bagikan Berita:</p>
                <div class="flex gap-2">
                    <a href="#" class="bg-blue-600 text-white w-10 h-10 rounded flex items-center justify-center hover:bg-blue-700 transition"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="bg-sky-500 text-white w-10 h-10 rounded flex items-center justify-center hover:bg-sky-600 transition"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="bg-green-500 text-white w-10 h-10 rounded flex items-center justify-center hover:bg-green-600 transition"><i class="fab fa-whatsapp"></i></a>
                    <a href="#" class="bg-gray-500 text-white w-10 h-10 rounded flex items-center justify-center hover:bg-gray-600 transition"><i class="fas fa-link"></i></a>
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
            <div class="bg-white border border-gray-100 rounded-lg shadow-sm p-6 dark:bg-putr-blue dark:border-gray-700">
                <h3 class="text-lg font-bold text-putr-blue mb-4 border-b pb-2 dark:text-putr-yellow">Berita Terbaru</h3>
                <div class="space-y-4">
                    <!-- Item 1 -->
                    <div class="flex gap-3">
                        <img src="https://placehold.co/100x100?text=Img" class="w-16 h-16 object-cover rounded" alt="News">
                        <div>
                            <h4 class="text-sm font-bold leading-tight mb-1 hover:text-putr-blue transition text-putr-blue-dark dark:text-white"><a href="#">Normalisasi Sungai Batanghari</a></h4>
                            <span class="text-xs text-gray-500 dark:text-gray-400">10 Okt 2023</span>
                        </div>
                    </div>
                    <!-- Item 2 -->
                    <div class="flex gap-3">
                        <img src="https://placehold.co/100x100?text=Img" class="w-16 h-16 object-cover rounded" alt="News">
                        <div>
                            <h4 class="text-sm font-bold leading-tight mb-1 hover:text-putr-blue transition text-putr-blue-dark dark:text-white"><a href="#">Rapat Evaluasi Kinerja</a></h4>
                            <span class="text-xs text-gray-500 dark:text-gray-400">08 Okt 2023</span>
                        </div>
                    </div>
                    <!-- Item 3 -->
                    <div class="flex gap-3">
                        <img src="https://placehold.co/100x100?text=Img" class="w-16 h-16 object-cover rounded" alt="News">
                        <div>
                            <h4 class="text-sm font-bold leading-tight mb-1 hover:text-putr-blue transition text-putr-blue-dark dark:text-white"><a href="#">Kunjungan Kerja Menteri</a></h4>
                            <span class="text-xs text-gray-500 dark:text-gray-400">05 Okt 2023</span>
                        </div>
                    </div>
                </div>
                <!-- <a href="#" class="block text-center text-sm font-bold text-putr-blue mt-4 hover:underline dark:text-putr-yellow">Lihat Semua Berita</a> -->
            </div>

            <!-- Categories -->
            <div class="bg-white border border-gray-100 rounded-lg shadow-sm p-6 mt-6 dark:bg-putr-blue dark:border-gray-700">
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
</section>
@endsection
