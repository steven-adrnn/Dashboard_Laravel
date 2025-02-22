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
        ]);
    }
}
