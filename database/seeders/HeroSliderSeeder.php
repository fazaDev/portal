<?php

namespace Database\Seeders;

use App\Models\HeroSlider;
use Illuminate\Database\Seeder;

class HeroSliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Check if data exists
        if (HeroSlider::count() > 0) {
            return;
        }

        HeroSlider::create([
            'title' => 'Selamat Datang di Portal',
            'subtitle' => 'Dinas PUPR Provinsi Jambi',
            'image' => 'https://placehold.co/1920x1080/003366/FFFFFF?text=Slide+1',
            'link' => '#',
            'button_text' => 'Selengkapnya',
            'is_active' => true,
            'order' => 1,
        ]);

        HeroSlider::create([
            'title' => 'Pembangunan Infrastruktur',
            'subtitle' => 'Jalan dan Jembatan',
            'image' => 'https://placehold.co/1920x1080/004d00/FFFFFF?text=Slide+2',
            'link' => '#',
            'button_text' => 'Lihat Proyek',
            'is_active' => true,
            'order' => 2,
        ]);

        HeroSlider::create([
            'title' => 'Informasi Tata Ruang',
            'subtitle' => 'Transparan dan Akuntabel',
            'image' => 'https://placehold.co/1920x1080/660000/FFFFFF?text=Slide+3',
            'link' => '#',
            'button_text' => 'Pelajari',
            'is_active' => true,
            'order' => 3,
        ]);
    }
}
