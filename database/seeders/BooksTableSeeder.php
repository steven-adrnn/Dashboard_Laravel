<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB; // Tambahkan ini
use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('books')->insert([
            [
                'judul' => 'Belajar Laravel',
                'penulis' => 'John Doe',
                'tahun_terbit' => 2021,
                'deskripsi' => 'Panduan lengkap untuk belajar Laravel.',
            ],
            [
                'judul' => 'Pemrograman PHP',
                'penulis' => 'Jane Smith',
                'tahun_terbit' => 2020,
                'deskripsi' => 'Dasar-dasar pemrograman PHP untuk pemula.',
            ],
            [
                'judul' => 'JavaScript untuk Pemula',
                'penulis' => 'Alice Johnson',
                'tahun_terbit' => 2019,
                'deskripsi' => 'Panduan praktis untuk belajar JavaScript.',
            ],
            [
                'judul' => 'Pengembangan Web Modern',
                'penulis' => 'Michael Brown',
                'tahun_terbit' => 2022,
                'deskripsi' => 'Teknik dan alat untuk pengembangan web modern.',
            ],
            [
                'judul' => 'Database dan SQL',
                'penulis' => 'Emily Davis',
                'tahun_terbit' => 2021,
                'deskripsi' => 'Memahami konsep dasar database dan SQL.',
            ],
            [
                'judul' => 'Framework PHP Terpopuler',
                'penulis' => 'Chris Wilson',
                'tahun_terbit' => 2023,
                'deskripsi' => 'Membahas framework PHP yang paling banyak digunakan.',
            ],
        ]);
    }
}
