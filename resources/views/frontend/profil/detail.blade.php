@extends('frontend.layouts.app')

@section('title', 'Profil Dinas - Dinas PUTR Provinsi Jambi')

@section('content')
<!-- BREADCRUMB -->
<div class="bg-putr-blue text-white py-12 dark:bg-putr-blue-dark border-b border-gray-700">
    <div class="container mx-auto px-4">
        <h1 class="text-3xl font-bold mb-2">Profil Dinas</h1>
        <div class="text-sm breadcrumbs">
            <ul class="flex items-center gap-2 text-gray-300">
                <li><a href="{{ url('/') }}" class="hover:text-putr-yellow"><i class="fas fa-home"></i> Beranda</a></li>
                <li><span class="text-gray-500">/</span></li>
                <li><span class="text-putr-yellow">Profil Dinas</span></li>
            </ul>
        </div>
    </div>
</div>


<!-- CONTENT -->
<section class="py-12 bg-white dark:bg-putr-blue-dark transition-colors duration-300">
    <div class="container mx-auto px-4 flex flex-col lg:flex-row gap-10">
        <!-- Main Content -->
        <div class="w-full lg:w-2/3">
            <div class="prose max-w-none dark:prose-invert">
                <h2 class="text-2xl font-bold text-putr-blue border-l-4 border-putr-yellow pl-3 mb-6 dark:text-putr-yellow">Sejarah Singkat</h2>
                <p class="mb-4">
                    Dinas Pekerjaan Umum dan Tata Ruang (PUTR) Provinsi Jambi memiliki sejarah panjang dalam pembangunan infrastruktur di Bumi Sepucuk Jambi Sembilan Lurah. 
                    Berdiri sejak terbentuknya Provinsi Jambi, dinas ini telah mengalami berbagai perubahan nomenklatur dan struktur organisasi menyesuaikan dengan kebutuhan 
                    pembangunan daerah dan regulasi nasional.
                </p>
                <div class="my-8">
                    <img src="https://placehold.co/800x400?text=Gedung+Dinas+PUTR" alt="Gedung Dinas PUTR" class="w-full rounded-lg shadow-lg">
                    <p class="text-center text-sm text-gray-500 mt-2 italic">Gedung Kantor Dinas PUTR Provinsi Jambi</p>
                </div>
                <p class="mb-4 mt-4">
                    Saat ini, Dinas PUTR Provinsi Jambi bertanggung jawab atas penyelenggaraan urusan pemerintahan di bidang pekerjaan umum dan penataan ruang yang meliputi 
                    sub-urusan jalan dan jembatan, sumber daya air, cipta karya, jasa konstruksi, dan penataan ruang.
                </p>

                <h2 class="text-2xl font-bold text-putr-blue border-l-4 border-putr-yellow pl-3 mb-6 mt-10 dark:text-putr-yellow">Visi dan Misi</h2>
                
                <h3 class="font-bold text-lg mb-2 text-putr-blue-dark dark:text-gray-200">Visi</h3>
                <blockquote class="bg-gray-50 border-l-4 border-putr-blue p-4 italic text-lg text-gray-700 mb-6 dark:bg-gray-800 dark:text-gray-300 dark:border-putr-yellow">
                    "Terwujudnya Infrastruktur Pekerjaan Umum dan Tata Ruang yang Handal, Terpadu, dan Berkelanjutan untuk Mendukung Jambi MANTAP (Maju, Aman, Nyaman, Tertib, Amanah, dan Profesional)"
                </blockquote>

                <h3 class="font-bold text-lg mb-2 text-putr-blue-dark dark:text-gray-200">Misi</h3>
                <ul class="list-disc pl-5 space-y-2 mb-6 text-gray-700 dark:text-gray-300">
                    <li>Meningkatkan konektivitas antar wilayah melalui pembangunan jalan dan jembatan yang berkualitas.</li>
                    <li>Mengelola sumber daya air secara terpadu dan berkelanjutan untuk mendukung ketahanan pangan dan pengendalian banjir.</li>
                    <li>Menyediakan infrastruktur pemukiman yang layak huni dan ramah lingkungan.</li>
                    <li>Mewujudkan penataan ruang yang harmonis dan berkelanjutan.</li>
                    <li>Meningkatkan kualitas sumber daya manusia dan tata kelola pemerintahan yang baik.</li>
                </ul>

                <h2 class="text-2xl font-bold text-putr-blue border-l-4 border-putr-yellow pl-3 mb-6 mt-10 dark:text-putr-yellow">Struktur Organisasi</h2>
                <p class="mb-4">
                    Struktur organisasi Dinas PUTR Provinsi Jambi terdiri dari Kepala Dinas, Sekretariat, dan beberapa Bidang Teknis, yaitu:
                </p>
                <ul class="list-disc pl-5 space-y-2 mb-6 text-gray-700 dark:text-gray-300">
                    <li><b>Sekretariat</b>: Mengelola administrasi umum, keuangan, dan kepegawaian.</li>
                    <li><b>Bidang Bina Marga</b>: Menangani jalan dan jembatan.</li>
                    <li><b>Bidang Sumber Daya Air</b>: Menangani irigasi, sungai, dan pantai.</li>
                    <li><b>Bidang Cipta Karya</b>: Menangani bangunan gedung dan penyehatan lingkungan.</li>
                    <li><b>Bidang Tata Ruang</b>: Menangani perencanaan dan pemanfaatan ruang.</li>
                    <li><b>Bidang Bina Konstruksi</b>: Menangani pembinaan jasa konstruksi.</li>
                </ul>
            </div>
        </div>

        <!-- Sidebar -->
        <div class="w-full lg:w-1/3">
            <div class="bg-white border border-gray-100 rounded-lg shadow-sm p-6 dark:bg-putr-blue dark:border-gray-700">
                <h3 class="text-lg font-bold text-putr-blue mb-4 border-b pb-2 dark:text-putr-yellow">Tentang Kami</h3>
                <ul class="space-y-2">
                    <li>
                        <a href="#" class="block px-3 py-2 rounded bg-putr-yellow text-putr-blue-dark font-semibold">Profil Dinas</a>
                    </li>
                    <li>
                        <a href="#" class="block px-3 py-2 rounded text-gray-600 hover:bg-gray-50 transition dark:text-gray-300 dark:hover:bg-gray-700">Kepala Dinas</a>
                    </li>
                    <li>
                        <a href="#" class="block px-3 py-2 rounded text-gray-600 hover:bg-gray-50 transition dark:text-gray-300 dark:hover:bg-gray-700">Pejabat Struktural</a>
                    </li>
                    <li>
                        <a href="#" class="block px-3 py-2 rounded text-gray-600 hover:bg-gray-50 transition dark:text-gray-300 dark:hover:bg-gray-700">Tugas & Fungsi</a>
                    </li>
                    <li>
                        <a href="#" class="block px-3 py-2 rounded text-gray-600 hover:bg-gray-50 transition dark:text-gray-300 dark:hover:bg-gray-700">Unit Pelaksana Teknis</a>
                    </li>
                </ul>
            </div>

            <div class="bg-putr-blue text-white p-6 rounded-lg shadow-sm mt-6 text-center dark:bg-putr-blue-dark border dark:border-gray-700">
                <h3 class="font-bold text-lg mb-2">Butuh Bantuan?</h3>
                <p class="text-sm text-gray-300 mb-4">Hubungi kami jika Anda memiliki pertanyaan atau pengaduan.</p>
                <a href="#" class="inline-block bg-putr-yellow text-putr-blue-dark font-bold py-2 px-6 rounded hover:bg-putr-yellow-dark transition">Kontak Kami</a>
            </div>
        </div>
    </div>
</section>
@endsection
