<footer class="bg-putr-blue text-gray-300 pt-16 pb-6 dark:bg-putr-blue-dark dark:border-t dark:border-gray-800">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-12">
            <!-- About -->
            <div>
                <div class="flex items-center gap-3 mb-4">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/c/ca/Logo_Resmi_Provinsi_Jambi.png" class="h-12 w-auto " alt="Logo Jambi">
                    <h3 class="text-white font-bold text-lg">DPUTR PROVINSI JAMBI</h3>
                </div>
                <p class="text-sm leading-relaxed mb-4">Unsur pelaksana urusan pemerintahan bidang pekerjaan umum dan penataan ruang Provinsi Jambi.</p>
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
                    <li><a href="{{ url('/') }}" class="hover:text-white hover:pl-2 transition">Beranda</a></li>
                    <li><a href="/profil" class="hover:text-white hover:pl-2 transition">Profil Dinas</a></li>
                    <li><a href="/berita" class="hover:text-white hover:pl-2 transition">Berita</a></li>
                    <li><a href="#" class="hover:text-white hover:pl-2 transition">Layanan Publik</a></li>
                </ul>
            </div>

            <!-- Contact -->
            <div class="lg:col-span-2">
                <h4 class="text-putr-yellow font-bold uppercase text-sm tracking-wider mb-6">Hubungi Kami</h4>
                <ul class="space-y-4 text-sm">
                    <li class="flex gap-3">
                        <i class="fas fa-map-marker-alt mt-1 text-putr-yellow"></i>
                        <span>Komp. Kantor Gubernur Jambi, Jl. Jend. A. Yani No.10, Telanaipura, Kota Jambi, Jambi</span>
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
            &copy; {{ date('Y') }} Dinas Pekerjaan Umum dan Tata Ruang Provinsi Jambi. All Rights Reserved.
        </div>
    </div>
</footer>